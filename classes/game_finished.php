<?php
// This file is part of Moodle - http:// moodle.org/
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
 * Class for mod_mooduell to react on game finished event.
 *
 * @package mod_mooduell
 * @copyright 2021 Wunderbyte GmbH <georg.maisser@wunderbyte.at>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_mooduell;

use \mod_mooduell\mooduell;

/**
 * Class game_finished contains functions to execute when the event game_finished is triggered
 * @package mod_mooduell
 */
class game_finished {
    /**
     * @var int|null
     */
    public $mooduellid = null;

    /**
     * Function to update the highscores table after a game has been finished.
     * First, all highscore entries of the current MooDuell instance will be removed from the table.
     * After that, they will be generated by the get_highscores function in mooduell.php and inserted again.
     * @param $cmid course module id will be used to instantiate mooduell-class / caution: this is not the mooduellid.
     * @throws \dml_exception
     * @throws \moodle_exception
     */
    public static function update_highscores_table($cmid) {
        global $DB;

        $mooduell = new mooduell($cmid);
        $mooduellid = $mooduell->cm->instance; // THIS is the correct mooduellid.

        $listofhighscores = mooduell::get_highscores($mooduellid);

        $returnarray = [];
        foreach ($listofhighscores as $entry) {
            $entry = (object) $entry;
            $returnarray[] = [
                'mooduellid' => $mooduellid,
                'userid' => $entry->userid,
                'ranking' => $entry->rank,
                'gamesplayed' => $entry->played,
                'gameswon' => $entry->won,
                'gameslost' => $entry->lost,
                'gamesstarted' => 0, // TODO: this will be added later.
                'gamesfinished' => 0, // TODO: this will be added later.
                'score' => $entry->score,
                'qcorrect' => $entry->correct,
                'qplayed'  => $entry->qplayed,
                'qcpercentage' => $entry->correctpercentage,
                'timecreated' => time(),
                'timemodified' => time()
            ];
        }
        // Sort the returned array by score.
        usort($returnarray, $mooduell->build_sorter('score'));

        // Update or insert each entry into the mooduell_highscores table.
        foreach ($returnarray as $entry) {
            $entry = (object) $entry;

            // Let's have a look if the entry already exists in the DB.
            $sql = 'select * from {mooduell_highscores} where mooduellid = '.
                    $entry->mooduellid.' and userid = '.$entry->userid;
            $data = $DB->get_record_sql($sql);

            // If the entry could be found in the database.
            if (!empty($data)) {
                // ... then update the existing record.
                $entry->id = $data->id;
                $entry->timecreated = $data->timecreated;
                $entry->timemodified = time();
                $DB->update_record('mooduell_highscores', $entry);
            } else {
                // ... otherwise, insert a new record.
                $DB->insert_record('mooduell_highscores', $entry);
            }
        }
    }
}
