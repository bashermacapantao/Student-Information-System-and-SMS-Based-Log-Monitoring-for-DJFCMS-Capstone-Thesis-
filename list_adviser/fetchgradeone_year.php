<?php

include 'modelgradeone.php';


$gradeI = new Gradeone();

$rows = $gradeI->fetchgradeone_year();

echo json_encode($rows);