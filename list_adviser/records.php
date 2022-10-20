<?php

include 'model.php';

$model = new Model();

if (isset($_POST['section']) && isset($_POST['year']) && !empty($_POST['section']) && !empty($_POST['year'])) {
    $section = $_POST['section'];
    $year = $_POST['year'];

    $rows = $model->fetch_filter($section, $year);
} elseif (isset($_POST['section']) && empty($_POST['year'])) {
    $section = $_POST['section'];

    $rows = $model->fetch_section_filter($section);
} elseif (empty($_POST['section']) && isset($_POST['year'])) {
    $year = $_POST['year'];

    $rows = $model->fetch_year_filter($year);
} else {
    $rows = $model->fetch();
}

echo json_encode($rows);

    // ##########################################################################################

// Grade One           Grade One               Grade One

