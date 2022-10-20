<?php

include 'modelgradefive.php';

$gradeV = new Gradefive();

if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradefivesection = $_POST['section'];
    $gradefiveyear = $_POST['year'];

    $rows = $gradeV->fetchgradefive_filter($gradefivesection, $gradefiveyear);
} elseif (isset($_POST['section']) && empty($_POST['year'])) {
    $gradefivesection = $_POST['section'];

    $rows = $gradeV->fetchgradefive_section_filter($gradefivesection);
} elseif (empty($_POST['section']) && isset($_POST['year'])) {
    $gradefiveyear = $_POST['year'];

    $rows = $gradeV->fetchgradefive_year_filter($gradefiveyear);
} else {
    $rows = $gradeV->fetchgradefive();
}

echo json_encode($rows);
