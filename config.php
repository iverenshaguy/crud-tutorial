<?php
/*
 * Database Config And Connection
 */
$server  = "localhost";
$db_user = "root";
$db_pass = "mysql";
$db_name = "crud-tutorial";
// Create connection
$connection = mysqli_connect($server, $db_user, $db_pass, $db_name);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}