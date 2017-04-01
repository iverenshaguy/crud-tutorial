<?php

include 'config.php';

//Check connection
if($connection->connect_error) {
  die("COnnection failed:".$connection->connect_error);
}
$allUsers = mysqli_query($connection,"SELECT * FROM users");