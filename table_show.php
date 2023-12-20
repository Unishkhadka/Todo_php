<?php
include "connection.php";
$result = $con->query("SELECT * from todo_list");

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
                <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
                <a href='update.php?id=" . $row['id'] ."' class='btn btn-primary' id='update''>Update</a>

            </td>
        </tr>";
}

echo "
    </tbody>
</table>";
$con->close();
?>
