<?php
include "common/connection.php";
session_start();
    $Uid = $_SESSION['Uid'];
$result = $con->query("SELECT * from todo_list where User_Id='$Uid'");

echo "<table class='table'>";
echo "
    <thead>
        <tr> 
            <th>Task</th>
            <th>Action</th> 
        </tr>
    </thead>
    <tbody>";

while ($row = $result->fetch_assoc()) {
    echo "
        <tr>
            <td>" . $row['task'] . "</td>
            <td>
                <a href='delete.php?id=" . $row['Task_id'] . "' class='btn btn-danger'>Delete</a>
                <a href='update.php?id=" . $row['Task_id'] ."' class='btn btn-primary' id='update''>Update</a>

            </td>
        </tr>";
}

echo "
    </tbody>
</table>";
$con->close();
?>
