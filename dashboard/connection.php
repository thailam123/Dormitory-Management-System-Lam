<?php
$sname = "db";
$uname = "root";
$password = "";
mysqli_connect('db', 'root', '');
$conn = mysqli_connect($sname, $uname, $password, 'DMS');
?>
<!-- if(!$conn)
{
    echo "Connection failed!";
} -->