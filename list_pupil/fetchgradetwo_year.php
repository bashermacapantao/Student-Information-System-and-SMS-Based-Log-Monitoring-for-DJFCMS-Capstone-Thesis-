<?php

include 'modelgradetwo.php';


$gradeII = new Gradetwo();

$rows = $gradeII->fetchgradetwo_year();

echo json_encode($rows);