<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$nama_db = "crud-pw5";
$con = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);

if(!$con) {
    die('Database Connection Failed'.mysqli_connect_error());
}
?>