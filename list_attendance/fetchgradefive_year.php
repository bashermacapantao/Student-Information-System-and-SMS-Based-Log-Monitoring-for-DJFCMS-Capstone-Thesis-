<?php

include 'modelgradefive.php';


$gradeV = new Gradefive();

$rows = $gradeV->fetchgradefive_year();

echo json_encode($rows);