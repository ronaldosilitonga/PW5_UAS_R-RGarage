<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location: ../dashboard/dashboard.php");
}

include("../database-connection.php");
$username = "";
$password = "";
$err = "";

if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    if ($username == '' or $password == '') {
        $err .= "<li>Silakan masukkan username dan password</li>";
    }
    if (empty($err)) {
        $sql1 = "select * from admin where username = '$username'";
        $q1 = mysqli_query($con, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if ($r1['password'] != md5($password)) {
            $err .= "<li>Akun tidak ditemukan</li>";
        }
    }

    if (empty($err)) {
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_akses'] = $akses;
        header("location: ../dashboard/dashboard.php");
        exit();
    }
}

if (isset($_POST['back'])) {
    header("location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Admin Login</title>
</head>
<body>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <div class="logo"></div>
    <div class="login-block">
        <form action="" method="post">
            <h1>Login</h1>
            <input type="text" name="username" placeholder="Username" id="username" />
            <input type="password" name="password" placeholder="Password" id="password" />
            <button type="submit" name="login" value="submit">Submit</button> 
            <button type="submit" name="back" value="submit">Back</button> 
        </form>
        </div>
</body>
</html>