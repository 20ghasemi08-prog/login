<?php
include("navbar.php");
$id = $_GET['id'];
include("conn.php");
$sql = "DELETE FROM personnel where id = $id";
mysqli_query($conn, $sql);
header("location: list.php?delete=success");
?>