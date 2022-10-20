<?php

include 'model.php';

$model = new Model();

$rows = $model->fetch_year();

echo json_encode($rows);

    // ##########################################################################################

// Grade One           Grade One               Grade One

