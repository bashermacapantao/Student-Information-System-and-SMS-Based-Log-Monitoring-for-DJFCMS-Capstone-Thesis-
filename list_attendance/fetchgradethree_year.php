<?php

include 'modelgradethree.php';


$gradeIII = new Gradethree();

$rows = $gradeIII->fetchgradethree_year();

echo json_encode($rows);