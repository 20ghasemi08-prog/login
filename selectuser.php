<?php
include("conn.php");
$select_user = "SELECT * FROM users where id = 3";
$query = mysqli_query($conn, $select_user);
$row = mysqli_fetch_row($query);
echo $row['3'];
?>