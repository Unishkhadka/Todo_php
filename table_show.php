<?php
include "common/connection.php";
session_start();
$Uid = $_SESSION['Uid'];
$result = $con->query("SELECT * from todo_list where User_Id='$Uid'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your TODO List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5 d-flex justify-content-center"> <!-- Added styles for horizontal centering -->
        <table class='table table-bordered table-info' style="width:60%;">
            <thead class='table-dark'>
                <tr>
                    <th>
                        <h3 class="text-center">Task</h3>
                    </th>
                    <th>
                        <h3 class="text-center">Action</h3>
                    </th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "
            <tr>
                <td class='text-center'><h5>" . $row['task'] . "</h5></td>
                <td class='text-center'>
                    <a href='delete.php?id=" . $row['Task_id'] . "' class='btn btn-danger me-2'>Delete</a>
                    <a href='update.php?id=" . $row['Task_id'] . "' class='btn btn-primary mw-2' id='update'>Update</a>
                </td>
            </tr>";
                }
                ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<?php
$con->close();
?>