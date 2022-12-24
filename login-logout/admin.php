<?php 
session_start();
if(!isset($_SESSION['session_username'])){
    header("location: login.php");
    exit();
} else {
    header("location: .../");
}
print_r($_SESSION);
print_r($_COOKIE);

?>