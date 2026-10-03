<?php
include("conn.php");
$name = $_POST['name'];
$family = $_POST['family'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$password = $_POST['password'];

$search_user = "SELECT * FROM users where username = '$username' && password = '$password'";
$query_search = mysqli_query($conn, $search_user);

if($row = mysqli_fetch_row($query_search)){
    echo "hast";
}
else{
$insert_user = "INSERT INTO users (name, family, email, mobile, username, password)
VALUES('$name', '$family', '$email', '$mobile', '$username', '$password')";
$query = mysqli_query($conn, $insert_user);
echo "user inserrt";
}       
?>

