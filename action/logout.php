<?php 
require '../config.php';
session_start();
$UserId = $_SESSION['UserId'];
APP_ACTIVITY($Name="USER_LOGOUT", $Details = "Logout Successfully!", $User = "$UserId");
session_destroy();
session_start();
$_SESSION['info'] = "Logout Successfully!";
header("location: ../login.php");
