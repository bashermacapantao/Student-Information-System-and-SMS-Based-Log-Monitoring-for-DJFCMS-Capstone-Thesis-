<?php

include 'modelgradeone.php';


$gradeI = new Gradeone();

$rows = $gradeI->fetchgradeone_section();

echo json_encode($rows);