
<?php

include 'model.php';

$model = new Model();



if ( (!empty(isset($_POST['section'])) && !empty(isset($_POST['year']))) &&  (!empty(isset($_POST['from'])) && !empty(isset($_POST['to'])))) {
    
    $section = $_POST['section'];
    $year = $_POST['year'];
    $To = $_POST['to'];
    $From = $_POST['from'];

    $rows = $model->fetch_filter_date($section, $year,$From,$To);
}
else if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $section = $_POST['section'];
    $year = $_POST['year'];

    $rows = $model->fetch_filter($section, $year);
} else if (isset($_POST['section']) && empty($_POST['year'])) {
    $section = $_POST['section'];

    $rows = $model->fetch_section_filter($section);
} else if (empty($_POST['section']) && isset($_POST['year'])) {
    $year = $_POST['year'];

    $rows = $model->fetch_year_filter($year);
} else {
    $rows = $model->fetch();
}

echo json_encode($rows);
