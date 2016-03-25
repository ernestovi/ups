<?php  // $Id: view.php,v 1.6.2.3 2009/04/17 22:06:25 skodak Exp $

/**
 * Cette page affiche une instance de profileplus
 *
 * @author  Nadine Noël <n.noel@arml-idf.org>
 * @version $Id: view.php,v 1.6.2.3 2009/04/17 22:06:25 skodak Exp $
 * @package mod/profileplus
 */

/// (Replace profileplus with the name of your module and remove this line)

require_once(dirname(dirname(dirname(__FILE__))).'/config.php');
require_once(dirname(__FILE__).'/lib.php');

$id = optional_param('id', 0, PARAM_INT); // course_module ID, or
$a  = optional_param('a', 0, PARAM_INT);  // profileplus instance ID

if ($id) {
    if (! $cm = get_coursemodule_from_id('profileplus', $id)) {
        error('Course Module ID was incorrect');
    }

    if (! $course = get_record('course', 'id', $cm->course)) {
        error('Course is misconfigured');
    }

    if (! $profileplus = get_record('profileplus', 'id', $cm->instance)) {
        error('Course module is incorrect');
    }

} else if ($a) {
    if (! $profileplus = get_record('profileplus', 'id', $a)) {
        error('Course module is incorrect');
    }
    if (! $course = get_record('course', 'id', $profileplus->course)) {
        error('Course is misconfigured');
    }
    if (! $cm = get_coursemodule_from_instance('profileplus', $profileplus->id, $course->id)) {
        error('Course Module ID was incorrect');
    }

} else {
    error('You must specify a course_module ID or an instance ID');
}

require_login($course, true, $cm);

add_to_log($course->id, "profileplus", "view", "view.php?id=$cm->id", "$profileplus->id");

/// Print the page header
$strprofilepluss = get_string('modulenameplural', 'profileplus');
$strprofileplus  = get_string('modulename', 'profileplus');

$navlinks = array();
$navlinks[] = array('name' => $strprofilepluss, 'link' => "index.php?id=$course->id", 'type' => 'activity');
$navlinks[] = array('name' => format_string($profileplus->name), 'link' => '', 'type' => 'activityinstance');

$navigation = build_navigation($navlinks);

print_header_simple(format_string($profileplus->name), '', $navigation, '', '', true,
              update_module_button($cm->id, $course->id, $strprofileplus), navmenu($course, $cm));

/// Print the main part of the page

echo 'YOUR CODE GOES HERE';


/// Finish the page
print_footer($course);

?>
