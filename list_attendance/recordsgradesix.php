<?php

include 'modelgradesix.php';

$gradeVI = new Gradesix();



if ( (!empty(isset($_POST['section'])) && !empty(isset($_POST['year']))) &&  (!empty(isset($_POST['from'])) && !empty(isset($_POST['to'])))) {
    
    $gradesixsection = $_POST['section'];
    $gradesixyear = $_POST['year'];
    $gradesixTo = $_POST['to'];
    $gradesixFrom = $_POST['from'];

    $rows = $gradeVI->fetchgradesix_filter_date($gradesixsection, $gradesixyear,$gradesixFrom,$gradesixTo);
}
else if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $gradesixsection = $_POST['section'];
    $gradesixyear = $_POST['year'];

    $rows = $gradeVI->fetchgradesix_filter($gradesixsection, $gradesixyear);
} else if (isset($_POST['section']) && empty($_POST['year'])) {
    $gradesixsection = $_POST['section'];

    $rows = $gradeVI->fetchgradesix_section_filter($gradesixsection);
} else if (empty($_POST['section']) && isset($_POST['year'])) {
    $gradesixyear = $_POST['year'];

    $rows = $gradeVI->fetchgradesix_year_filter($gradesixyear);
} else {
    $rows = $gradeVI->fetchgradesix();
}
echo json_encode($rows);
