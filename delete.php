<?php
include "common/connection.php";
$id = $_GET['id'];
mysqli_query($con, "DELETE from todo_list where Task_id=$id");
header("Location: index.php");
?>