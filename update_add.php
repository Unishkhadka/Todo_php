<?php
    include "connection.php";
    $id = $_GET["id"];
    $new_task = $_GET["task"];
    $sql = "UPDATE todo_list SET task=$new_task WHERE id = $id";
    mysql_query($con, $sql);
    header("Location: index.php");  
    $con->close();
?>