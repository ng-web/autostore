<?php

$databaseHost = 'localhost';
$databaseName = 'autostore';
$databaseUserName = 'root';
$databasePassword = '';

$conn = new mysqli($databaseHost, $databaseUserName, $databasePassword, $databaseName);

//Check Connection
if ($conn -> connect_errno){
    echo "Failed to connect to Database " . $conn -> connect_error;
    exit();
}