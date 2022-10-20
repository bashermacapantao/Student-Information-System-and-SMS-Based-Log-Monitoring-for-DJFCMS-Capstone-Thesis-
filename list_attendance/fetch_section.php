<?php

include 'model.php';

$model = new Model();

$rows = $model->fetch_section();

echo json_encode($rows);

    // ##########################################################################################

// Grade One           Grade One               Grade One

