<?php

include 'modelgradesix.php';

$gradeVI = new Gradesix();

if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradesixsection = $_POST['section'];
    $gradesixyear = $_POST['year'];

    $rows = $gradeVI->fetchgradesix_filter($gradesixsection, $gradesixyear);
} elseif (isset($_POST['section']) && empty($_POST['year'])) {
    $gradesixsection = $_POST['section'];

    $rows = $gradeVI->fetchgradesix_section_filter($gradesixsection);
} elseif (empty($_POST['section']) && isset($_POST['year'])) {
    $gradesixyear = $_POST['year'];

    $rows = $gradeVI->fetchgradesix_year_filter($gradesixyear);
} else {
    $rows = $gradeVI->fetchgradesix();
}

echo json_encode($rows);
