<?php

include 'modelgradefour.php';

$gradeIV = new Gradefour();

if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradefoursection = $_POST['section'];
    $gradefouryear = $_POST['year'];

    $rows = $gradeIV->fetchgradefour_filter($gradefoursection, $gradefouryear);
} elseif (isset($_POST['section']) && empty($_POST['year'])) {
    $gradefoursection = $_POST['section'];

    $rows = $gradeIV->fetchgradefour_section_filter($gradefoursection);
} elseif (empty($_POST['section']) && isset($_POST['year'])) {
    $gradefouryear = $_POST['year'];

    $rows = $gradeIV->fetchgradefour_year_filter($gradefouryear);
} else {
    $rows = $gradeIV->fetchgradefour();
}

echo json_encode($rows);
