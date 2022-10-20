<?php

include 'modelgradethree.php';


$gradeIII= new Gradethree();

$rows = $gradeIII->fetchgradethree_section();

echo json_encode($rows);