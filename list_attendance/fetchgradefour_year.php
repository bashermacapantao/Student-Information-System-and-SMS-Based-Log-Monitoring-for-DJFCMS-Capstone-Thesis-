<?php

include 'modelgradefour.php';


$gradeIV = new Gradefour();

$rows = $gradeIV->fetchgradefour_year();

echo json_encode($rows);