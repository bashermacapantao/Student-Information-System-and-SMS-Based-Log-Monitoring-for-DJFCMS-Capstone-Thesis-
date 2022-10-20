<?php

include 'modelgradefour.php';

$gradeIV = new Gradefour();



if ( (!empty(isset($_POST['section'])) && !empty(isset($_POST['year']))) &&  (!empty(isset($_POST['from'])) && !empty(isset($_POST['to'])))) {
    
    $gradefoursection = $_POST['section'];
    $gradefouryear = $_POST['year'];
    $gradefourTo = $_POST['to'];
    $gradefourFrom = $_POST['from'];

    $rows = $gradeIV->fetchgradefour_filter_date($gradefoursection, $gradefouryear,$gradefourFrom,$gradefourTo);
}
else if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradefoursection = $_POST['section'];
    $gradefouryear = $_POST['year'];

    $rows = $gradeIV->fetchgradefour_filter($gradefoursection, $gradefouryear);
} else if (isset($_POST['section']) && empty($_POST['year'])) {
    $gradefoursection = $_POST['section'];

    $rows = $gradeIV->fetchgradefour_section_filter($gradefoursection);
} else if (empty($_POST['section']) && isset($_POST['year'])) {
    $gradefouryear = $_POST['year'];

    $rows = $gradeIV->fetchgradefour_year_filter($gradefouryear);
} else {
    $rows = $gradeIV->fetchgradefour();
}
echo json_encode($rows);
