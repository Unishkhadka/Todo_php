<?php
include "common/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password != $cpassword){
        echo "Password and Confirm Password doesn't match.";
    }
    elseif(strlen($password) < 8){
        echo "Password is too short";
    }
    else{
    $sql = "INSERT INTO `todo`.`User`(`Username`, `Email`, `Password`) VALUES ('$user_name','$email','$password')";
    $result = $con->query($sql);

    if ($result) {
        echo "User inserted successfully!";
        header("Location: login.php");
    } else {
        echo "Error: " . $con->error;
    }}
}
?>
