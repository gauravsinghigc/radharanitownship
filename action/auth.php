<?php 
require '../config.php';

if(isset($_POST['LoginRequest'])){
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$Query = SELECT("SELECT * FROM users where Username='$Username' and Password='$Password'");
	$Count = mysqli_num_rows($Query);
	if($Count != 0){
			$FETCH = mysqli_fetch_array($Query);
			$UserStatus = $FETCH['UserStatus'];
			$FullName = $FETCH['FullName'];
			if($UserStatus == 1){
				$_SESSION['UserId'] = $UserId = $FETCH['UserId'];
				$_SESSION['msg'] = "Welcome, <b>$FullName</b>. You are login Successfully!<br>Have a Nice Day!";
				APP_ACTIVITY($Name="LOGIN_REQUEST_SUCCESS", $Details = "SUCCESS -> Username : $Username and Password : $Password", $User = "$UserId");
				header("location: ../admin");
			} else {
				$_SESSION['alert'] = "Your Account is Inactive. Please contact to administrator Now!";
				APP_ACTIVITY($Name="LOGIN_REQUEST_INACTIVE", $Details = "INACTIVE_ACCOUNT -> Account is inactive having Username : $Username and Password : $Password", $User = "$UserId");
				header("location: ../login.php");
			}
		} else {
			$_SESSION['err'] = "Username & Password are Incorrect!";
			APP_ACTIVITY($Name="LOGIN_REQUEST_FAILED", $Details = "FAILED ->Incorrect Username and Password. Username : $Username and Password : $Password", $User = "$UserId");
				header("location: ../login.php");
		}
} else if(isset($_POST['ForgetPassword'])){
	$EmailId = $_POST['EmailId'];
	$QUERY = SELECT("SELECT * FROM users where EmailId='$EmailId'");
	$Count = mysqli_num_rows($QUERY);
	if($Count != 0){
		$FETCH = mysqli_fetch_array($QUERY);
		$UserId = $FETCH['UserId'];
		//Mail setup for Password Recovery Link Send

		//end mail
		APP_ACTIVITY($Name="PASSWORD_RECOVER_REQUEST", $Details = "USER_FOUND -> EmailId : $EmailId", $User = "$UserId");
		$_SESSION['msg'] = "Please check your mail <b>$EmailId</b>. Password reset link is sent to your mail id.";
		header("location: ../login.php?ForgetPassword=enable");
	} else {
		APP_ACTIVITY($Name="PASSWORD_RECOVER_REQUEST", $Details = "NO_USER_FOUND -> EmailId : $EmailId", $User = "0");
		$_SESSION['alert'] = "No User Found with <b>'$EmailId'</b> Please enter your registered mail id.";
		header("location: ../login.php?ForgetPassword=enable");
	}
}
