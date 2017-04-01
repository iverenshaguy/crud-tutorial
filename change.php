<?php

include 'config.php';

$id = $_REQUEST['id'];
$newname = $_REQUEST['newname'];
$newemail = $_REQUEST['newemail'];
$newpassword = $_REQUEST['newpassword'];


mysqli_query($connection, "UPDATE users SET name='$newname', email= '$newemail', pwd='$newpassword'
WHERE userid='$id'");

echo "Success!";

mysqli_close($connection);

include('links.php');