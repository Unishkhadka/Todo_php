<?php
include "connection.php";
if (isset($_POST["task"])) {
    $task = $_POST["task"];
    $sql = "INSERT into `todo`.`todo_list` (task) VALUES ('$task')";
    if ($con->query($sql) == true) {
        echo "Data inserted successfully!";
        header("Location: index.php");
    } else {
        echo "Error: " . $con->error;
    }
    $con->close();
}
?>
