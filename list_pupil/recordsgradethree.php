<?php

include 'modelgradethree.php';

$gradeIII = new Gradethree();

if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradethreesection = $_POST['section'];
    $gradethreeyear = $_POST['year'];

    $rows = $gradeIII->fetchgradethree_filter($gradethreesection, $gradethreeyear);
} elseif (isset($_POST['section']) && empty($_POST['year'])) {
    $gradethreesection = $_POST['section'];

    $rows = $gradeI->fetchgradethree_section_filter($gradethreesection);
} elseif (empty($_POST['section']) && isset($_POST['year'])) {
    $gradethreeyear = $_POST['year'];

    $rows = $gradeIII->fetchgradethree_year_filter($gradethreeyear);
} else {
    $rows = $gradeIII->fetchgradethree();
}

echo json_encode($rows);
