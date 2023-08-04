<?php

$servername ='localhost';
$username = 'root';
$password = '';
$dbname = "npc_database"; 


header('Content-Type:application/json');




$data = [
    'todaysales' => (time() %1000) * 3,
    'weeksales'=> (time() %1000) * 3,
    'monthsales'=> (time() %1000) * 3
];
echo json_encode($data);

?>