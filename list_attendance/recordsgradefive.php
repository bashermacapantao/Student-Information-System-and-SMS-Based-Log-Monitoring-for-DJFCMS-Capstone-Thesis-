<?php

include 'modelgradefive.php';

$gradeV = new Gradefive();



if ( (!empty(isset($_POST['section'])) && !empty(isset($_POST['year']))) &&  (!empty(isset($_POST['from'])) && !empty(isset($_POST['to'])))) {
    
    $gradefivesection = $_POST['section'];
    $gradefiveyear = $_POST['year'];
    $gradefiveTo = $_POST['to'];
    $gradefiveFrom = $_POST['from'];

    $rows = $gradeV->fetchgradefive_filter_date($gradefivesection, $gradefiveyear,$gradefiveFrom,$gradefiveTo);
}
else if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradefivesection = $_POST['section'];
    $gradefiveyear = $_POST['year'];

    $rows = $gradeV->fetchgradefive_filter($gradefivesection, $gradefiveyear);
} else if (isset($_POST['section']) && empty($_POST['year'])) {
    $gradefivesection = $_POST['section'];

    $rows = $gradeV->fetchgradefive_section_filter($gradefivesection);
} else if (empty($_POST['section']) && isset($_POST['year'])) {
    $gradefiveyear = $_POST['year'];

    $rows = $gradeV->fetchgradefive_year_filter($gradefiveyear);
} else {
    $rows = $gradeV->fetchgradefive();
}
echo json_encode($rows);
