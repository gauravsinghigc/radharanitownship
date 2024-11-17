<div class='container-fluid'>
   <div class='row'>
    <div class='col-md-12 bg-light font-13 p-2 pt-0'>
<?php  
$errors = [];

$table1 = "CREATE TABLE activitytrack (
  ActivityId int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  ActivityName varchar(100) NOT NULL,
  ActivityDetails varchar(1000) NOT NULL,
  CreatedAt varchar(100) NOT NULL,
  UserInvolved varchar(10) NOT NULL
  )"; 

$table2 = "CREATE TABLE `configurations` (
  `ConfigurationId` int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `Data` varchar(100) NOT NULL,
  `Value` varchar(500) NOT NULL,
  `CreatedAt` varchar(100) NOT NULL,
  `UpdatedAt` varchar(100) NOT NULL,
  `Status` int(2) NOT NULL
)";

$table3 = "CREATE TABLE `loginlogs` (
  `LogId` int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `IpAddress` varchar(300) NOT NULL,
  `DeviceType` varchar(20) NOT NULL,
  `RequestTime` varchar(100) NOT NULL,
  `SystemDetails` varchar(1000) NOT NULL
)";

$table4 = "CREATE TABLE `users` (
  `UserId` int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `UserTypeId` int(10) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `UserStatus` int(2) NOT NULL,
  `CreatedAt` varchar(100) DEFAULT CURRENT_TIMESTAMP,
  `UpdatedAt` varchar(100) NOT NULL DEFAULT 'No Last Update',
  `UserProfile` varchar(1000) NOT NULL
)";

$table5 = "CREATE TABLE `usertypes` (
  `UserTypeId` int(10)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `UserTypeName` varchar(50) NOT NULL,
  `CreatedAt` varchar(100) NOT NULL,
  `UpdatedAt` varchar(100) NOT NULL,
  `AccessType` varchar(20) NOT NULL
)";

$tables = [$table1, $table2, $table3, $table4, $table5];


foreach($tables as $k => $sql){
    $query = mysqli_query($DBConnection, $sql);
    if(!$query) {
      if($k == 0) {
      $k = "Activity Tracks";
    } else if($k == 1) {
      $k = "Configurations";
    } else if($k == 2){
      $k = "LoginLogs";
    } else if($k == 3){
      $k = "Users";
    }else if($k == 4){
      $k = "UserTypes";
    }
    $errors[] = "
    <code><b class='text-black'>Create Table <span class='text-info'>$k</span> <i class='fa fa-angle-right'></i> <span class='text-danger'>Failed!</span> <span class='text-black'><i class='fa fa-angle-right'></i>  ($DBConnection->error)</span></code>";
  }  else {
        if($k == 0) {
      $k = "Activity Tracks";
    } else if($k== 1) {
      $k = "Configurations";
    } else if($k == 2){
      $k = "LoginLogs";
    } else if($k == 3){
      $k = "Users";
    }else if($k == 4){
      $k = "UserTypes";
    }
       $errors[] = "<code><b class='text-black'>Create Table <span class='text-info'>$k</span> <i class='fa fa-angle-right'></i> <span class='text-success'>Success!</span></code>";
     }
}


foreach($errors as $msg) {
   echo "$msg <br>";
}

$Configurations = "INSERT INTO configurations (Data, Value, CreatedAt, Status) VALUES
('APP_NAME', '$APP_NAME', '$CURRENT_DATE_TIME', '1'),
('APP_VERSION', '$APP_VERSION', '$CURRENT_DATE_TIME', '1'),
('DOMAIN', '$DOMAIN', '$CURRENT_DATE_TIME', '1'),
('DEV_NAME', '$DEV_NAME', '$CURRENT_DATE_TIME', '1'),
('APP_PHONE', '$APP_PHONE', '$CURRENT_DATE_TIME', '1'),
('APP_MAIL_ID', '$APP_MAIL_ID', '$CURRENT_DATE_TIME', '1'),
('SENDER_MAIL', '$SENDER_MAIL', '$CURRENT_DATE_TIME', '1'),
('RECEIVER_MAIL', '".$_POST['RECEIVER_MAIL']."', '$CURRENT_DATE_TIME', '1'),
('APP_ADDRESS', '$APP_ADDRESS', '$CURRENT_DATE_TIME', '1'),
('MAP_LINK', '$MAP_LINK', '$CURRENT_DATE_TIME', '1'),
('DOWNLOAD_APP_LINK', '$DOWNLOAD_APP_LINK', '$CURRENT_DATE_TIME', '1')";

$Users = "INSERT INTO users (UserId, UserTypeId, FullName, EmailId, Username, PhoneNumber, Password, UserStatus, CreatedAt, UpdatedAt, UserProfile) VALUES
(1, 1, '$DEV_NAME', '".$_POST['RECEIVER_MAIL']."', '$Username', '$APP_PHONE', '$Password', 1, '$CURRENT_DATE_TIME', 'No Last Update', 'user-icon.png')";

$UserType = "INSERT INTO usertypes (UserTypeId, UserTypeName, CreatedAt, UpdatedAt, AccessType) VALUES
(1, 'ADMINISTRATOR', '$CURRENT_DATE_TIME', '', 'all')";

mysqli_query($DBConnection, $Configurations);
mysqli_query($DBConnection, $Users);
$query = mysqli_query($DBConnection, $UserType);
if($query == true){
$filename = "../env.php";
$handle = fopen($filename, "w");
fwrite ($handle, $contents);
chmod($filename, 0777);
echo "<br>
<code>
<i class='fa fa-check-circle text-success'></i> Installed!
</code><br>
<a href='../login.php' class='btn btn-sm btn-info text-white'> Go to Login <i class='fa fa-angle-right'></i></a>";
} else {
  echo "<br>
  <code>
<i class='fa fa-warning text-danger'></i> Installation Failed!
</code><br>
<a href='../' class='btn btn-sm btn-info text-white'> Try Again <i class='fa fa-angle-right'></i></a>";
}
?>
 </div>
   </div>
   </div>