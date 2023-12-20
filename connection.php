<?php
    $con = mysqli_connect("localhost", "root", "", "todo");

    if(!$con){
        echo "Connection failed due to ". mysqli_connect_error();
    }
?>