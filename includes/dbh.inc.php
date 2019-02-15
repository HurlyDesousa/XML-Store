<?php
//Prologue of dbh.inc.php:
//This page is in an includes folder an runs only php code. It establishes the database conection.


$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "xmlrecordingshop";


$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);


if (!$conn) {
die("Connection failed: ".mysqli_connect_error());
}
