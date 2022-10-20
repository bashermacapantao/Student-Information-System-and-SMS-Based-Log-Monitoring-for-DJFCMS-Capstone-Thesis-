<?php

include 'modelgradeone.php';

$gradeI = new Gradeone();



if ( (!empty(isset($_POST['section'])) && !empty(isset($_POST['year']))) &&  (!empty(isset($_POST['from'])) && !empty(isset($_POST['to'])))) {
    
    $gradeonesection = $_POST['section'];
    $gradeoneyear = $_POST['year'];
    $gradeoneTo = $_POST['to'];
    $gradeoneFrom = $_POST['from'];

    $rows = $gradeI->fetchgradeone_filter_date($gradeonesection, $gradeoneyear,$gradeoneFrom,$gradeoneTo);
}
else if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradeonesection = $_POST['section'];
    $gradeoneyear = $_POST['year'];

    $rows = $gradeI->fetchgradeone_filter($gradeonesection, $gradeoneyear);
} else if (isset($_POST['section']) && empty($_POST['year'])) {
    $gradeonesection = $_POST['section'];

    $rows = $gradeI->fetchgradeone_section_filter($gradeonesection);
} else if (empty($_POST['section']) && isset($_POST['year'])) {
    $gradeoneyear = $_POST['year'];

    $rows = $gradeI->fetchgradeone_year_filter($gradeoneyear);
} else {
    $rows = $gradeI->fetchgradeone();
}

echo json_encode($rows);
