<?php
header('Content-Type: application/json');
date_default_timezone_set('America/Fortaleza'); 

$response = array(
    'datetime' => date('Y-m-d H:i:s')
);

echo json_encode($response);
?>
