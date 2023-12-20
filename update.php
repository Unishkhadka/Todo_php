<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <?php
      include "connection.php";
      $id= $_GET["id"];
      $task = $_GET["task"];
    ?>
    <form action="/unish/todo/update_add.php" method="post">
        <div class="container">
        <input value="<?php echo $task;?>" class="input" type="text" placeholder="Enter the task...">
        <button type="submit" class="btn btn-primary">Update</button>    
    </div>
    </form>
  </body>
</html>