<!DOCTYPE html>
<?php

// Enter server and user authentication information
$servername = "localhost";
$username = "classicmodels_app";
$password = "usfdh_student";
$dbname = "classicmodels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// this template will be called by a script that supplies $sql

// Send query to server and store returned data in $result
$result = $conn->query($sql);
?>
