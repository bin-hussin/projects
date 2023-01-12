<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$port = "3306";

$con = new mysqli($servername, $username, $password, $dbname, $port);

if ($con->error) {
    echo $con->error;
}

if ($con->connect_error) {
    die("Error connecting to server" . $con->coonect_error);
} else {
   // echo "Connecting to server";
}