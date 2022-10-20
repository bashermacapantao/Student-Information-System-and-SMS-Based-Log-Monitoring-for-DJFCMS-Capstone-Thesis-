<?php

include 'modelgradetwo.php';

$gradeII = new Gradetwo();



if ( (!empty(isset($_POST['section'])) && !empty(isset($_POST['year']))) &&  (!empty(isset($_POST['from'])) && !empty(isset($_POST['to'])))) {
    
    $gradetwosection = $_POST['section'];
    $gradetwoyear = $_POST['year'];
    $gradetwoTo = $_POST['to'];
    $gradetwoFrom = $_POST['from'];

    $rows = $gradeII->fetchgradetwo_filter_date($gradetwosection, $gradetwoyear,$gradetwoFrom,$gradetwoTo);
}
else if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradetwosection = $_POST['section'];
    $gradetwoyear = $_POST['year'];

    $rows = $gradeII->fetchgradetwo_filter($gradetwosection, $gradetwoyear);
} else if (isset($_POST['section']) && empty($_POST['year'])) {
    $gradetwosection = $_POST['section'];

    $rows = $gradeII->fetchgradetwo_section_filter($gradetwosection);
} else if (empty($_POST['section']) && isset($_POST['year'])) {
    $gradetwoyear = $_POST['year'];

    $rows = $gradeII->fetchgradetwo_year_filter($gradetwoyear);
} else {
    $rows = $gradeII->fetchgradetwo();
}


echo json_encode($rows);
