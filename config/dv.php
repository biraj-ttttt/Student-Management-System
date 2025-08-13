<?php

$server = "localhost";
$username ="root";
$password = "";
$databae = "bks1";

$conn = mysqli_connect($server, $username, $password, $databae);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
}