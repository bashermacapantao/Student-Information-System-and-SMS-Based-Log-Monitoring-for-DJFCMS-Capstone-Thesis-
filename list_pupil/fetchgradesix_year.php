<?php

include 'modelgradesix.php';


$gradeVI = new Gradesix();

$rows = $gradeVI->fetchgradesix_year();

echo json_encode($rows);