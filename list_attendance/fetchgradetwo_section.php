<?php

include 'modelgradetwo.php';


$gradeII = new Gradetwo();

$rows = $gradeII->fetchgradetwo_section();

echo json_encode($rows);