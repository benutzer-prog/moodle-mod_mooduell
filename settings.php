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
 * Plugin administration pages are defined here.
 *
 * @package     mod_mooduell
 * @category    admin
 * @copyright   2020 David Bogner <david.bogner@wunderbyte.at>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    //--- general settings -----------------------------------------------------------------------------------
     /*       $mform->addElement('static', 'label1', 'mooduellsettings', get_string('mooduellsettings', 'mod_mooduell'));
        $mform->addElement('header', 'mooduellfieldset', get_string('mooduellfieldset', 'mod_mooduell'));

        $mform->addElement('checkbox', 'usefullnames', get_string('usefullnames', 'mod_mooduell'));
        $mform->addElement('checkbox', 'showcontinuebutton', get_string('showcontinuebutton', 'mod_mooduell'));
        $mform->addElement('checkbox', 'showcorrectanswer', get_string('showcorrectanswer', 'mod_mooduell'));

        $mform->addElement('select', 'countdown', get_string('countdown', 'mod_mooduell'), $this->return_countdown_options());
        $mform->addElement('select', 'waitfornextquestion', get_string('waitfornextquestion', 'mod_mooduell'), */

    $settings->add(new admin_setting_configcheckbox('mooduell/usefullnames',
        get_string('usefullnames', 'mod_mooduell'),""
        , 0));

    $settings->add(new admin_setting_configcheckbox('mooduell/showcontinuebutton',
        get_string('showcontinuebutton', 'mod_mooduell'),"", 0));

    
    $settings->add(new admin_setting_configcheckbox('mooduell/showcorrectanswer',
        get_string('showcorrectanswer', 'mod_mooduell'),
        "", 0));
 

    $name = new lang_string('countdown', 'mod_mooduell');
    $options = array(
       "0" => get_string('nocountdown', 'mod_mooduell'),
        "10" => get_string('xseconds', 'mod_mooduell', 10),
        "20" => get_string('xseconds', 'mod_mooduell', 20),
        "30" => get_string('xseconds', 'mod_mooduell', 30),
        "60" => get_string('xseconds', 'mod_mooduell', 60),
        "90" => get_string('xseconds', 'mod_mooduell', 90),
        "120" => get_string('xseconds', 'mod_mooduell', 120),
    );

    $settings->add(new admin_setting_configselect('mooduell/countdown',
                                                    $name,
                                                    "",
                                                    -1,
                                                    $options));


    $name = new lang_string('clicktomoveon', 'mod_mooduell');
    $options = array(
      "0" => get_string('clicktomoveon', 'mod_mooduell'),
                "2" => get_string('xseconds', 'mod_mooduell', 2),
                "5" => get_string('xseconds', 'mod_mooduell', 5),
                "10" => get_string('xseconds', 'mod_mooduell', 10),
                "20" => get_string('xseconds', 'mod_mooduell', 20),
                "30" => get_string('xseconds', 'mod_mooduell', 30),
    );


    $settings->add(new admin_setting_configselect('mooduell/waitfornextquestion',
                                                    $name,
                                                    "",
                                                    -1,
                                                    $options));
}
