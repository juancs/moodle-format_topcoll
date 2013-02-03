<?php

/**
 * Collapsed Topics Information
 *
 * A topic based format that solves the issue of the 'Scroll of Death' when a course has many topics. All topics
 * except zero have a toggle that displays that topic. One or more topics can be displayed at any given time.
 * Toggles are persistent on a per browser session per course basis but can be made to persist longer by a small
 * code change. Full installation instructions, code adaptions and credits are included in the 'Readme.txt' file.
 *
 * @package    course/format
 * @subpackage topcoll
 * @version    See the value of '$plugin->version' in version.php.
 * @copyright  &copy; 2009-onwards G J Barnard in respect to modifications of standard topics format.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @link       http://docs.moodle.org/en/Collapsed_Topics_course_format
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
// Used by the Moodle Core for identifing the format and displaying in the list of formats for a course in its settings.
// Possibly legacy to be removed after Moodle 2.0 is stable.
$string['nametopcoll'] = 'Collapsed Topics';
$string['formattopcoll'] = 'Collapsed Topics';

// Used in format.php.
$string['topcolltoggle'] = 'Toggle';
$string['topcollsidewidth'] = '28px';

// Toggle all - Moodle Tracker CONTRIB-3190.
$string['topcollall'] = 'sections.';  // Leave as AMOS maintains only the latest translation - so previous versions are still supported.
$string['topcollopened'] = 'Open all';
$string['topcollclosed'] = 'Close all';

// Moodle 2.0 Enhancement - Moodle Tracker MDL-15252, MDL-21693 & MDL-22056 - http://docs.moodle.org/en/Development:Languages
$string['sectionname'] = 'Section';
$string['pluginname'] = 'Collapsed Topics';
$string['section0name'] = 'General';

// MDL-26105.
$string['page-course-view-topcoll'] = 'Any course main page in the collapsed topics format';
$string['page-course-view-topcoll-x'] = 'Any course page in the collapsed topics format';

// Moodle 2.3 Enhancement.
$string['hidefromothers'] = 'Hide section';
$string['showfromothers'] = 'Show section';
$string['currentsection'] = 'This section';
$string['markedthissection'] = 'This section is highlighted as the current section';
$string['markthissection'] = 'Highlight this section as the current section';

// Layout enhancement - Moodle Tracker CONTRIB-3378.
$string['formatsettings'] = 'Format reset settings'; // CONTRIB-3529.
$string['formatsettingsinformation'] = '<br />To reset the settings of the course format to the defaults, click on the icon to the right.';
$string['setlayout'] = 'Set layout';
$string['setlayout_default'] = 'Default';
$string['setlayout_no_toggle_section_x'] = 'No toggle section x';
$string['setlayout_no_section_no'] = 'No section number';
$string['setlayout_no_toggle_section_x_section_no'] = 'No toggle section x and section number';
$string['setlayout_no_toggle_word'] = 'No toggle word';
$string['setlayout_no_toggle_word_toggle_section_x'] = 'No toggle word and toggle section x';
$string['setlayout_no_toggle_word_toggle_section_x_section_no'] = 'No toggle word, toggle section x and section number';
$string['setlayoutelements'] = 'Set elements';
$string['setlayoutstructure'] = 'Set structure';
$string['setlayoutstructuretopic'] = 'Topic';
$string['setlayoutstructureweek'] = 'Week';
$string['setlayoutstructurelatweekfirst'] = 'Current Week First';
$string['setlayoutstructurecurrenttopicfirst'] = 'Current Topic First';
$string['setlayoutstructureday'] = 'Day';
$string['resetlayout'] = 'Reset layout'; //CONTRIB-3529.
$string['resetalllayout'] = 'Reset layouts for all Collapsed Topics courses';

// Colour enhancement - Moodle Tracker CONTRIB-3529.
$string['setcolour'] = 'Set colour';
$string['colourrule'] = "Please enter a valid RGB colour, six hexadecimal digits.";
$string['settoggleforegroundcolour'] = 'Toggle foreground';
$string['settogglebackgroundcolour'] = 'Toggle background';
$string['settogglebackgroundhovercolour'] = 'Toggle background hover';
$string['resetcolour'] = 'Reset colour';
$string['resetallcolour'] = 'Reset colours for all Collapsed Topics courses';

// Columns enhancement.
$string['setlayoutcolumns'] = 'Set columns';
$string['one'] = 'One';
$string['two'] = 'Two';
$string['three'] = 'Three';
$string['four'] = 'Four';
$string['setlayoutcolumnorientation'] = 'Set column orientation';
$string['columnvertical'] = 'Vertical';
$string['columnhorizontal'] = 'Horizontal';

// Temporary until MDL-34917 in core.
$string['maincoursepage'] = 'Main course page';

// Help.
$string['setlayoutelements_help'] = 'How much information about the toggles / sections you wish to be displayed.';
$string['setlayoutstructure_help'] = "The layout structure of the course.  You can choose between:

'Topics' - where each section is presented as a topic in section number order.

'Weeks' - where each section is presented as a week in ascending week order from the start date of the course.

'Current Week First' - which is the same as weeks but the current week is shown at the top and preceding weeks in decending order are displayed below except in editing mode where the structure is the same as 'Weeks'.

'Current Topic First' - which is the same as 'Topics' except that the current topic is shown at the top if it has been set.

'Day' - where each section is presented as a day in ascending day order from the start date of the course.";
$string['setlayout_help'] = 'Contains the settings to do with the layout of the format within the course.';
$string['resetlayout_help'] = 'Resets the layout to the default values in "/course/format/topcoll/tcconfig.php" so it will be the same as a course the first time it is in the Collapsed Topics format.';
$string['resetalllayout_help'] = 'Resets the layout to the default values in "/course/format/topcoll/tcconfig.php" for all courses so it will be the same as a course the first time it is in the Collapsed Topics format.';
// Moodle Tracker CONTRIB-3529
$string['setcolour_help'] = 'Contains the settings to do with the colour of the format within the course.';
$string['settoggleforegroundcolour_help'] = 'Sets the colour of the text on the toggle.';
$string['settogglebackgroundcolour_help'] = 'Sets the background of the toggle.';
$string['settogglebackgroundhovercolour_help'] = 'Sets the background of the toggle when the mouse moves over it.';
$string['resetcolour_help'] = 'Resets the colours to the default values in "/course/format/topcoll/tcconfig.php" so it will be the same as a course the first time it is in the Collapsed Topics format.';
$string['resetallcolour_help'] = 'Resets the colours to the default values in "/course/format/topcoll/tcconfig.php" for all courses so it will be the same as a course the first time it is in the Collapsed Topics format.';
// Columns enhancement
$string['setlayoutcolumns_help'] = 'How many columns to use.';
$string['setlayoutcolumnorientation_help'] =
'Vertical - Sections go top to bottom.

Horizontal - Sections go left to right.';

// Moodle 2.4 Course format refactoring - MDL-35218
$string['numbersections'] = 'Number of sections';
$string['ctreset'] = 'Collapsed Topics reset options';
$string['ctreset_help'] = 'Reset to Collapsed Topics defaults that are in the tcconfig.php file.';

// Toggle alignment - CONTRIB-4098
$string['settogglealignment'] = 'Set the toggle text alignment';
$string['settogglealignment_help'] = 'Sets the alignment of the text in the toggle.';
$string['left'] = 'Left';
$string['center'] = 'Centre';
$string['right'] = 'Right';
$string['resettogglealignment'] = 'Reset toggle alignment';
$string['resetalltogglealignment'] = 'Reset toggle alignments for all Collapsed Topics courses';
$string['resettogglealignment_help'] = 'Resets the toggle alignment to the default values in "/course/format/topcoll/tcconfig.php" so it will be the same as a course the first time it is in the Collapsed Topics format.';
$string['resetalltogglealignment_help'] = 'Resets the toggle alignment to the default values in "/course/format/topcoll/tcconfig.php" for all courses so it will be the same as a course the first time it is in the Collapsed Topics format.';

// Icon set enhancement.
$string['settoggleiconset'] = 'Set icon set';
$string['settoggleiconset_help'] = 'Sets the icon set of the toggle.';
$string['settoggleallhover'] = 'Set toggle all icon hover';
$string['settoggleallhover_help'] = 'Sets if the toggle all icons will change when the mouse moves over them.';
$string['arrow'] = 'Arrow';
$string['point'] = 'Point';
$string['power'] = 'Power';
$string['resettoggleiconset'] = 'Reset the toggle icon set';
$string['resetalltoggleiconset'] = 'Reset the toggle icon set for all Collapsed Topics courses';
$string['resettoggleiconset_help'] = 'Resets the toggle icon set and toggle all hover to the default values in "/course/format/topcoll/tcconfig.php" so it will be the same as a course the first time it is in the Collapsed Topics format.';
$string['resetalltoggleiconset_help'] = 'Resets the toggle icon set and toggle all hover to the default values in "/course/format/topcoll/tcconfig.php" for all courses so it will be the same as a course the first time it is in the Collapsed Topics format.';

// Site Administration -> Plugins -> Course formats -> Collapsed Topics or Manage course formats - Settings
$string['defaultcoursedisplay'] = 'Course display default';
$string['defaultcoursedisplay_desc'] = 'Either one of:

'.COURSE_DISPLAY_SINGLEPAGE.' => All sections on one page.

'.COURSE_DISPLAY_MULTIPAGE.'  => One section per page.

as defined by COURSE_DISPLAY_SINGLEPAGE and COURSE_DISPLAY_MULTIPAGE in moodlelib.php.';
$string['defaultlayoutelement'] = 'Default layout configuration';
$string['defaultlayoutelement_desc'] = "The numbers that represent the layout setting are:

1 => Default.

2 => No 'Topic x' / 'Week x' / 'Day x'.

3 => No section number.

4 => No 'Topic x' / 'Week x' / 'Day x' and no section number.

5 => No 'Toggle' word.

6 => No 'Toggle' word and no 'Topic x' / 'Week x' / 'Day x'.

7 => No 'Toggle' word, no 'Topic x' / 'Week x' / 'Day x' and no section number.

Default layout to use - used when a new Collapsed Topics course is created or an old one is accessed for the first time after installing this functionality.";

$string['defaultlayoutstructure'] = 'Default structure configuration';
$string['defaultlayoutstructure_desc'] = "The numbers that represent the structure setting are:

1 => Topic

2 => Week   

3 => Latest Week First 

4 => Current Topic First

5 => Day

Default structure to use - used when a new Collapsed Topics course is created or an old one is accessed for the first time after installing this functionality.";

$string['defaultlayoutcolumns'] = 'Default number of columns';
$string['defaultlayoutcolumns_desc'] = "Number of columns between 1 and 4.";

$string['defaultlayoutcolumnorientation'] = 'Default column orientation';
$string['defaultlayoutcolumnorientation_desc'] = "Default column orientation - 1 = vertical and 2 = horizontal.";

$string['defaulttgfgcolour'] = 'Default toggle foreground colour';
$string['defaulttgfgcolour_desc'] = "Toggle foreground colour in hexidecimal RGB without preceeding '#'.";

$string['defaulttgbgcolour'] = 'Default toggle background colour';
$string['defaulttgbgcolour_desc'] = "Toggle background colour in hexidecimal RGB without preceeding '#'.";

$string['defaulttgbghvrcolour'] = 'Default toggle background hover colour';
$string['defaulttgbghvrcolour_desc'] = "Toggle background hover colour in hexidecimal RGB without preceeding '#'.";

$string['defaulttogglepersistence'] = 'Toggle persistence';
$string['defaulttogglepersistence_desc'] = "1 = on, 0 = off.  You may wish to disable for an AJAX performance increase.

Note: If turning persistence off remove any rows containing 'topcoll_toggle_x' in the 'name' field
      of the 'user_preferences' table in the database.  Where the 'x' in 'topcoll_toggle_x' will be
      a course id.";

$string['defaulttogglealignment'] = 'Default toggle text alignment';
$string['defaulttogglealignment_desc'] = "1 = left, 2 = centre and 3 = right.";

$string['defaulttoggleiconset'] = 'Default toggle icon set';
$string['defaulttoggleiconset_desc'] = "arrow => Arrow icon set.

point => Point icon set.

power => Power icon set.";

$string['defaulttoggleallhover'] = 'Default toggle all icon hovers';
$string['defaulttoggleallhover_desc'] = "1 => No.

2 => Yes.";

?>
