<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .input{
    margin: auto;
    width: 50%;
    height: 40px;
    font-size: 1.2rem;
    border-radius: 10px;
    margin-top: 20px;
    padding-left: 20px;
}
    </style>
  </head>
  <body>
  <?php
      include "common/connection.php";
      $id= $_GET["id"];
      $sql = "select * from todo_list where Task_id = $id";
      $result = mysqli_query($con, $sql);
      while($row=mysqli_fetch_assoc($result)){
            $task = $row['task'];
            $id = $row['Task_id']; 
      }
      // $task_sql = mysqli_query($con,"select * from todo_list where id = $id");
      // // $result = $con->query($task_sql);
      // $task = $task_sql['task'];
      // echo $task;
            ?>
    <form action="" method="post">
        <div class="container">
        <input value="<?php echo $task;?>" class="input" type="text" name="updated_task">
        <input type="hidden" name="hidden_id" value="<?php echo $id;?>">
        <input type="submit" name="updated" value="Update" class="btn btn-primary">   
    </div>
    </form>
  </body>
</html>

<?php
  if(isset($_POST['updated'])){
    echo "Posted";
    $id = $_POST['hidden_id'];
    $updated_task = $_POST['updated_task'];
    echo $id;
    $sql = "UPDATE todo_list SET task='$updated_task' WHERE Task_id = $id";
    $result = mysqli_query($con, $sql);

    if($result){
      echo "
        <script>
          alert('Updated successfully!!');
        </script>
      ";
      header("Location:index.php");
    }
  }
?>

