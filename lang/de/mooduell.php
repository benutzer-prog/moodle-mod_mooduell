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
 * Plugin strings are defined here.
 *
 * @package     mod_mooduell
 * @category    string
 * @copyright   2020 David Bogner <david.bogner@wunderbyte.at>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['messageprovider:status'] = 'Spiel Status Änderung';
$string['mooduell:managemooduellsettings'] = 'Bearbeite die Einstellungen eines MooDuell Spiels';
$string['mooduell:viewstatistics'] = 'Siehe Spiel Statistik';
$string['mooduell:viewstudentnames'] = 'Zeige die ganzen Namen der Studierenden';
$string['mooduell:editgames'] = 'Bearbeite Spiele';
$string['pluginname'] = 'MooDuell';
$string['modulenameplural'] = 'MooDuells';
$string['mooduellname'] = 'Name des MooDuell Spiels';
$string['mooduellname_help'] = 'Wähle einen Namen für Dein Spiel';
$string['mooduellsettings'] = 'MooDuell Einstellungen';
$string['mooduellfieldset'] = 'MooDuell Einstellungen';
$string['usefullnames'] = 'Verwende ganze Namen';
$string['modulename_help'] = 'Das MooDuell Modul hilft dir eine Multiplayer Quiz Aktivität zu erstellen, die dann das Spielen mit der MooDuell App erlaubt.';
$string['modulename'] = 'MooDuell';
$string['addInstance'] = 'Ein neues Spiel hinzufügen';
$string['mooduell:addinstance'] = 'Ein neues Spiel hinzufügen';

$string['countdown'] = 'Countdown';
$string['nocountdown'] = 'Kein Countdown';
$string['xseconds'] = '{$a} Sekunden';

$string['showcontinuebutton'] = 'Zeige "Weiter"-Button';
$string['showcorrectanswer'] = 'Zeige die korrekten Antworten';
$string['waitfornextquestion'] = 'Zeit um die korrekten Antworten zu sehen.';
$string['clicktomoveon'] = 'Warte bis zum nächsten KLick.';

$string['pluginadministration'] = 'Plugin Administration';
$string['questionscategory'] = 'Kategorie für Zufallsfragen';
$string['categoryweight'] = 'Gewichtung der Kategorie (0 bis 100)';
$string['categoriesexplanation'] = 'Wenn du mehr als eine Kategorie auswählst, gib bitte auch eine Gewichtung an. Gewichtungen müssen NICHT zusammen 100 ergeben.';
$string['addanothercategory'] = 'Eine weitere Kategorie hinzufügen';
$string['questionscategorygroup'] = 'Kategorien für Zufallsfragen';
$string['nocategories'] = 'Es gibt noch keine Kategorien';
$string['important'] = 'Wichtig!';
$string['nomessage'] = 'Es gibt keine Nachrichten.';
$string['foundthesegames'] = 'Diese Spiele wurden gefunden:';
$string['noopengames'] = 'Es gibt noch keine offenen Spiele.';

$string['listofquestions'] = 'Alle Fragen im Quiz:';
$string['playera'] = 'Spieler/in A';
$string['playerb'] = 'Spieler/in B';
$string['playeraresults'] = 'Resultat A';
$string['playerbresults'] = 'Resultat B';
$string['action'] = 'Aktion';
$string['noquestions'] = 'Keine Fragen';
$string['question'] = 'Frage';
$string['warnings'] = 'Warnungen';
$string['status'] = 'Status';
$string['category'] = 'Kategorie';

$string['opengames'] = 'Offene Spiele';
$string['finishedgames'] = 'Beendete Spiele';
$string['highscores'] = 'Highscores';
$string['students'] = 'Studierende';
$string['questions'] = 'Fragen';

$string['questionid'] = 'ID';
$string['questiontext'] = 'Text';
$string['questiontype'] = 'Typ';
$string['questionimage'] = 'Bild';
$string['questiontextlength'] = 'Textlänge';
$string['questionstatus'] = 'Status';
$string['noquestions'] = 'Es gibt noch keine Fragen in diesem Quiz.';

$string['univiemooduell'] = 'Univie Mooduell';
$string['downloaduniviemoduell'] = 'Lade Deine App auf dein Handy und beginne sofort mit deinem Spiel!';
$string['univiemooduellappstore'] = 'Hier geht es zum Apple App Store:';
$string['univiemooduellplaystore'] = 'Hier geht es zum Google Play Store.';

$string['username'] = 'Name';
$string['gamesplayed'] = 'Gespielte Spiele';
$string['gameswon'] = 'Gewonnene Spiele';
$string['gameslost'] = 'Verlorene Spiele';
$string['score'] = 'Punkte';
$string['correctlyanswered'] = 'Korrekt';
$string['correctlyansweredpercentage'] = '% korrekt';

$string['notenoughquestions'] = 'Es gibt nicht genug Fragen in diesem Spiel. Füge der gewählten Fragenkategorie mehr Fragen hinzu oder wechsle die Kategorie.';
$string['nowarnings'] = 'Dein Spiel sieht gut aus, es gibt keine Warnungen.';
$string['questiontexttooshort'] = 'ID {$a}: Text der Frage ist zu kurz';
$string['questiontexttoolong'] = 'ID: {$a}: Text der Frage ist zu lang';
$string['wrongquestiontype'] = 'ID {$a}: Frage hat einen falschen Typ';
$string['questionhasnocorrectanswers'] = 'ID {$a}: Frage hat keine richtigen Antworten';

$string['addquestionstocategory'] = 'Fragen zur Kategorie {$a} hinzufügen';

$string['notok'] = 'Nicht OK';
$string['ok'] = 'OK';


$string['youwin'] = 'Du hast gegen {$a} gewonnen';
$string['youlose'] = 'Du hast gegen {$a} verloren';
$string['draw'] = 'Du hast gegen {$a} unentschieden gespielt';
$string['yourturn'] = 'Du bist dran gegen {$a}';
$string['challenged'] = '{$a} hat dich herausgefordert';