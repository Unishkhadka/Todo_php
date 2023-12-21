<?php
include "common/connection.php";
session_start();
$Uid = $_SESSION['Uid'];
if (isset($Uid)) {
  header("Location: index_html.php");
} else {
  header("Location: login.php");
}
