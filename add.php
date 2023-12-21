<?php
include "common/connection.php";
if (isset($_POST["task"])) {
    $task = $_POST["task"];
    session_start();
    $Uid = $_SESSION['Uid'];
    $sql = "INSERT into `todo_list` (task, User_id) VALUES ('$task','$Uid')";
    if ($con->query($sql) == true) {
        echo "Data inserted successfully!";
        header("Location: index.php");
    } else {
        echo "Error: " . $con->error;
    }
    $con->close();
}
?>
