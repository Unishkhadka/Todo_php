<?php
include "connection.php";
$id = $_GET['id'];
mysqli_query($con, "DELETE from todo_list where id=$id");
header("Location: index.php");
?>