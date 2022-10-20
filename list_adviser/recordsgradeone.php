<?php

include 'modelgradeone.php';

$gradeI = new Gradeone();

if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradeonesection = $_POST['section'];
    $gradeoneyear = $_POST['year'];

    $rows = $gradeI->fetchgradeone_filter($gradeonesection, $gradeoneyear);
} elseif (isset($_POST['section']) && empty($_POST['year'])) {
    $gradeonesection = $_POST['section'];

    $rows = $gradeI->fetchgradeone_section_filter($gradeonesection);
} elseif (empty($_POST['section']) && isset($_POST['year'])) {
    $gradeoneyear = $_POST['year'];

    $rows = $gradeI->fetchgradeone_year_filter($gradeoneyear);
} else {
    $rows = $gradeI->fetchgradeone();
}

echo json_encode($rows);
