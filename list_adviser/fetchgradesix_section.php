<?php

include 'modelgradesix.php';


$gradevI = new Gradesix();

$rows = $gradevI->fetchgradesix_section();

echo json_encode($rows);