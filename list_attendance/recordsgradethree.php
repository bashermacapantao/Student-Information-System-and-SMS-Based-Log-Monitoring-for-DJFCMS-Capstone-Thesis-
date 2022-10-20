<?php

include 'modelgradethree.php';

$gradeIII = new Gradethree();



if ( (!empty(isset($_POST['section'])) && !empty(isset($_POST['year']))) &&  (!empty(isset($_POST['from'])) && !empty(isset($_POST['to'])))) {
    
    $gradethreesection = $_POST['section'];
    $gradethreeyear = $_POST['year'];
    $gradethreeTo = $_POST['to'];
    $gradethreeFrom = $_POST['from'];

    $rows = $gradeIII->fetchgradethree_filter_date($gradethreesection, $gradethreeyear,$gradethreeFrom,$gradethreeTo);
}
else if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradethreesection = $_POST['section'];
    $gradethreeyear = $_POST['year'];

    $rows = $gradeIII->fetchgradethree_filter($gradethreesection, $gradethreeyear);
} else if (isset($_POST['section']) && empty($_POST['year'])) {
    $gradethreesection = $_POST['section'];

    $rows = $gradeIII->fetchgradethree_section_filter($gradethreesection);
} else if (empty($_POST['section']) && isset($_POST['year'])) {
    $gradethreeyear = $_POST['year'];

    $rows = $gradeIII->fetchgradethree_year_filter($gradethreeyear);
} else {
    $rows = $gradeIII->fetchgradethree();
}
echo json_encode($rows);
