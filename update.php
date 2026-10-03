<?php
include("conn.php");
$id = $_POST['id'];
$firstname = $_POST['First_Name'];
$lastname = $_POST['Last_Name'];
$email = $_POST['Email'];
$phonenumber = $_POST['Phone_number'];
$city = $_POST['City'];

$sql = "UPDATE personnel SET 
first_name = '$firstname',
last_name = '$lastname',
email = '$email',
phone_number = '$phonenumber',
city = '$city' 
where id = $id";

mysqli_query($conn, $sql);
header("location: list.php?update=success");
?>