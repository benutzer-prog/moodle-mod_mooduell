<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin upgrade steps are defined here.
 *
 * @package     mod_mooduell
 * @category    upgrade
 * @copyright   2020 David Bogner <david.bogner@wunderbyte.at>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/upgradelib.php');

/**
 * Execute mod_mooduell upgrade from the given old version.
 *
 * @param int $oldversion
 * @return bool
 */
function xmldb_mooduell_upgrade($oldversion) {
    global $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2020050416) {
        $table = new xmldb_table('mooduell_pushtokens');

        // Adding fields to table mooduell_pushtokens.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('userid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('identifier', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, null);
        $table->add_field('model', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, null);
        $table->add_field('pushtoken', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL, null, null);

        // Adding keys to table mooduell_pushtokens.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for mooduell_pushtokens.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Booking savepoint reached.
        upgrade_mod_savepoint(true, 2020050416, 'mooduell');
    }

    if ($oldversion < 2020050417) {

        // Define field waitinglist to be added to booking_answers.
        $table = new xmldb_table('mooduell_pushtokens');
        $field = new xmldb_field('numberofnotifications', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');

        // Conditionally launch add field waitinglist.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        // Mooduell savepoint reached.
        upgrade_mod_savepoint(true, 2020050417, 'mooduell');
    }

    if ($oldversion < 2021012201) {

        // Define field waitinglist to be added to booking_answers.
        $table = new xmldb_table('mooduell_games');
        $field = new xmldb_field('playeraresults', XMLDB_TYPE_CHAR, '255', null, null, null, null);

        // Conditionally launch add field.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }

        $field = new xmldb_field('playerbresults', XMLDB_TYPE_CHAR, '255', null, null, null, null);

        // Conditionally launch add field .
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }


        // Mooduell savepoint reached.
        upgrade_mod_savepoint(true, 2021012201, 'mooduell');
    }

    return true;
}
