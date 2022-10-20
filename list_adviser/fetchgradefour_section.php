<?php

include 'modelgradefour.php';


$gradeIV = new Gradefour();

$rows = $gradeIV->fetchgradefour_section();

echo json_encode($rows);