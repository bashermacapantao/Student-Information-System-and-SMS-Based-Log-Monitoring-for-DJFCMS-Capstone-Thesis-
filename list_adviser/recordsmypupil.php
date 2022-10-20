<?php

include 'modelmypupil.php';

$list = new Mypupil();

if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $mypupilsection = $_POST['section'];
    $mypupilyear = $_POST['year'];

    $rows = $lisy->fetchmypupil_filter($mypupilsection, $mypupilyear);
} elseif (isset($_POST['section']) && empty($_POST['year'])) {
    $mypupilsection = $_POST['section'];

    $rows = $gradeI->fetchmypupil_section_filter($mypupilsection);
} elseif (empty($_POST['section']) && isset($_POST['year'])) {
    $mypupilyear = $_POST['year'];

    $rows = $gradeI->fetchmypupil_year_filter($mypupilyear);
} else {
    $rows = $gradeI->fetchmypupil();
}

echo json_encode($rows);
