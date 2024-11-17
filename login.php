<?php 
include 'config.php';
USER_SESSION_CHECK("", "admin");

if(isset($_GET['ForgetPassword']) == "enable"){
	include 'modules/auth/forget.php';
} else {
	include 'modules/auth/login.php';
}
