<?php

include 'modelgradefive.php';


$gradeV = new Gradefive();

$rows = $gradeV->fetchgradefive_section();

echo json_encode($rows);