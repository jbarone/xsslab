<?php
$database   = $_ENV["MYSQL_DATABASE"];
$user       = $_ENV["MYSQL_USER"];
$password   = $_ENV["MYSQL_PASSWORD"];
$host       = "mysql";
$connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
?>
