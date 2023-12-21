<?php
include "common/connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * from user WHERE Email='$email' AND Password='$password'";
    $result = $con->query($sql);

    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)) {
                $Uid = $row['User_id'];
                session_start();
                $_SESSION['Uid']=$Uid;
                header("Location: index.php");
            }
        }
    }
    else{
        echo "No user found.";
    }
    // while ($row = mysqli_fetch_assoc($result)) {
    //     if ($email == $row['Email'] && $password == $row['Password']) {
    //         $email = $row['Email'];
    //         $password = $row['Password'];
    //         $sql = "SELECT User_id from user WHERE Email='$email' && Password='$password'";
    //         $sql = $con->query($sql);
            // while ($row = mysqli_fetch_assoc($sql)) {
            //     $Uid = $row['User_id'];
            //     session_start();
            //     $_SESSION['Uid']=$Uid;
            // }
    //         header("Location = index.php");
    //     } else {
    //         header("Location: login.php");
    //     }
    // }

