<?php
include "common/connection.php";
session_start();
$Uid = $_SESSION['Uid'];
if (!isset($Uid)){
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #659DBD;">
  <?php
  include "common/logout_html.php";
  ?>
  <div class="container">
    <form action="add.php" method="post" class="text-center"> <!-- Added text-center class here -->
      <div class="container">
        <input name="task" class="input" type="text" placeholder="Enter the task...">
        <button type="submit" class="btn btn-primary">Add Task</button>
      </div>
    </form>
    <div class="table container">
      <?php
      include "table_show.php"
      ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>