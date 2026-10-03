<?php
session_start();
include("conn.php");

$username = $_POST['username'];
$password = $_POST['password'];

$check_user = "SELECT * FROM users WHERE username = '$username' && passworD = '$password'";
$query_check = mysqli_query($conn, $check_user);

if($row = mysqli_fetch_row($query_check)){
    $_SESSION['username'] =$_POST['username'];
    $_SESSION['name'] = $row[1];
    $_SESSION['family'] = $row[2];
    $_SESSION['email'] = $row[3];
    $_SESSION['mobile'] = $row[4];
    header("location: dashbord.php");
}else{
    header("location: login.php?login=fail");
}
?> 