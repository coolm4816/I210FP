<?php

$host = "localhost:3306";
$login = "phpuser";
$password = "phpuser";
$database = "retrogame";
$tblGames = "games";
$tblPlatform = "platform";
$tblUser = "users";

$conn = @new mysqli($host, $login, $password, $database);

if ($conn->connect_errno) {
    $error = $conn->connect_error;
    header("Location: error.php?m=$error");
    die();
}