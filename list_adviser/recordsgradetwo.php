<?php

include 'modelgradetwo.php';

$gradeII = new Gradetwo();

if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradetwosection = $_POST['section'];
    $gradetwoyear = $_POST['year'];

    $rows = $gradeII->fetchgradetwo_filter($gradetwosection, $gradetwoyear);
} elseif (isset($_POST['section']) && empty($_POST['year'])) {
    $gradetwosection = $_POST['section'];

    $rows = $gradeII->fetchgradetwo_section_filter($gradetwosection);
} elseif (empty($_POST['section']) && isset($_POST['year'])) {
    $gradetwoyear = $_POST['year'];

    $rows = $gradeII->fetchgradetwo_year_filter($gradetwoyear);
} else {
    $rows = $gradeII->fetchgradetwo();
}

echo json_encode($rows);
