<?php

/*** 
  AIO (All In One) Config.php File for core php projects or php projects.
		This file contain all basic requirements for projects and it's configuration just include the file and call required function.
		Change have to done only at App configuration and Database configuration if required, else leave others.
		for css and js bootstrap, fontawseome cdn is all ready included in with HEADER_FILES() for css and FOOTER_FILES() for js.for custom css and js create a folder name as assets then in root dir then create css and js folder for custom files their, config file automatically include them at header or footer via header footer function.
		for cdn include the link of cdn in header footer array and that's it.
 */
//App Configurations
//Change configuration according to your need and project requirements

//Display Errors
ini_set("display_errors", 1);

ini_set("log_errors", 1);
date_default_timezone_set("Asia/Calcutta");
ini_set('error_log', dirname(__FILE__) . '/../logs/err_log_for_' . date("d_M_Y") . '.txt');

//session_start()
session_start();
ob_start();

//App Configurations
//Change configuration according to your need and project requirements


//check SSL is installed or not
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $link = "https";
else
  $link = "http";

// Here append the common URL characters.
$link .= "://";

//dir & domain setup
define("HOST", $HOST = $_SERVER['SERVER_NAME']);

//list of local hosts or servers
define("LOCAL_HOST", array("127.0.0.1", "192.168.1.7", "::1", "localhost", "192.168.1.9", "192.168.43.14", "192.168.1.10", "192.168.1.11", "192.168.1.5"));

//filter domain from local or live server
if (in_array("" . HOST . "", LOCAL_HOST)) {
  define("DOMAIN", $link . HOST . "/vectorproperty");
} else {
  define("DOMAIN", $link . HOST);
}

$APP_NAME = "Golardh Housing";
$DEV_NAME = "Navix Consultancy Services";
$DEV_URL = "http://navix.in/";
$DOMAIN = DOMAIN;
$APP_DOMAIN = $DOMAIN;
$ADMIN_DOMAIN = $DOMAIN . "/admin";
$DIR_IMG = $DOMAIN . "/storage/img";
$APP_PHONE = "9555565558";
$APP_MAIL_ID = "info@golardhhousing.in";
$SENDER_MAIL = "notification@golardhhousing.in";
$RECEIVER_MAIL = "gauravsinghigc@gmail.com";
$APP_ADDRESS = "";
$MAP_LINK = "";
$DOWNLOAD_APP_LINK = "";
$DB_OPTION = "true";
$Host = "localhost";
$User = "root";
$Pass = "";
$DataBase = "vectorpropertpvtltd";
$Port = "";
$WORK_ENV = "dev";


//DATABASE CONFIGURATION.
//For use DATABASE DB_OPTION=true or else left as it as in env.php file
if ($DB_OPTION == "true") {
  $con = mysqli_connect($Host, $User, $Pass, $DataBase);
  $DBConnection = $con;
  if ($DBConnection == true) {
    $DBStatus = "<i class='fa fa-check-circle text-success'></i> DataBase Connected!";
  } else {
    $DBStatus = "<i class='fa fa-warning text-danger'></i> Database Connection Failed!";
  }
} else {
  $DBStatus = "<i class='fa fa-times text-warning'></i> Database Not Used!";
}

//--########################################################################################
//--###############------------------Meta Tags------------------------######################
//--########################################################################################
//Enter new page or all page in the page array list then create a variable having name as page name in the array then create meta  list in the declared array whose name is mention in the page array list. make sure name must be same other wise it not shown 
$PAGE_NAME_FOR_META_DATA = array("default", "index", "aboutus");

//default meta tags for all pages
$default = array(
  //paste of type your meta tags below in the form or array like 'abec', 'syx', 'mno' formate
  '<meta charset="UTF-8">',
  '<meta http-equiv="X-UA-Compatible" content="IE=edge">',
  '<meta name="viewport" content="width=device-width, initial-scale=1.0">'
);

//index meta tags or main/home page tags
$index = array(
  //paste of type your meta tags below in the form or array like 'abec', 'syx', 'mno' formate
);

////Meta Tags
function MetaTags(array $P)
{
  global $PAGE_NAME_FOR_META_DATA;
  foreach ($P as $pages) {
    global $$pages;
    $page = $$pages;
    foreach ($page as $pagetags) {
      echo $pagetags;
    }
  }
}
//--########################################################################################
//--###############################---End of Tags -----------------#########################
//--########################################################################################

//Stylesheet / Bootstrap / Fontawesome  and all header files 
//Default Bootstrap stylesheet
$STYLESHEETS = array();

//Header scripts for header javascripts adding.
$HEADER_SCRIPTS = array(
  "https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"
);

//Js scripts / footer links and all footer files
//Default bootstrap scripts
$SCRIPTS = array();

//Include Header Files function 
//All Files of dir are included automatically just create any file in /assets/css/ folder and start coding... file will be automatically imported to all page where HEADER_FILE() are mentioned.
function HEADER_FILES($L = null)
{
  global $STYLESHEETS;

  $DOMAIN = DOMAIN;

  foreach ($STYLESHEETS as $style) {
    echo "
		<link rel='stylesheet' href='$style' />";
  }

  if ($L == "" or $L == NULL) {

    if ($handle = opendir('assets/css')) {
      while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
          echo "
		<link rel='stylesheet' type='text/css' href='$DOMAIN/assets/css/$entry' />";
        }
      }
      closedir($handle);
    }
  } else {
    if ($handle = opendir("$L/assets/css")) {
      while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
          echo "
		<link rel='stylesheet' type='text/css' href='$L/assets/css/$entry' />";
        }
      }
      closedir($handle);
    }
  }
}

//Include Header scripts Function
function HEADER_SCRIPTS()
{
  global $HEADER_SCRIPTS;

  foreach ($HEADER_SCRIPTS as $script) {
    echo "
	    <script src='$script'></script>";
  }
}

//Include Footer Files Function
//All Files of dir are included automatically just create any file in /assets/js/ folder and start coding... file will be automatically imported to all page where FOOTER_FILES() are mentioned.
function FOOTER_FILES($L = null)
{
  global $SCRIPTS;
  global $DOMAIN;

  foreach ($SCRIPTS as $script) {
    echo "
	<script src='$script'></script>";
  }

  if ($L == null) {
    if ($handle = opendir('assets/js')) {
      while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
          echo "
	<script src='$DOMAIN/assets/js/$entry' ></script>";
        }
      }
      closedir($handle);
    }
  } else {
    if ($handle = opendir("$L/assets/js")) {
      while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
          echo "
	<script src='$L/assets/js/$entry' ></script>";
        }
      }
      closedir($handle);
    }
  }
}

//Body Files
function BODY_FILES()
{
  global $DOMAIN;
  //Display msg
  if (isset($_SESSION['msg']) or isset($_SESSION['err']) or isset($_SESSION['alert']) or isset($_SESSION['info'])) {
    if (isset($_SESSION['msg'])) {
      $MsgDis = $_SESSION['msg'];
      $bg = "bg-success";
      $dis = "<i class='fa fa-check-circle font-20'></i> Success!";
      $tone = "alert_tone.mp3";
    } elseif (isset($_SESSION['err'])) {
      $MsgDis = $_SESSION['err'];
      $bg = "bg-danger";
      $dis = "<i class='fa fa-times font-20'></i> Failed!";
      $tone = "danger_alert.mp3";
    } elseif (isset($_SESSION['alert'])) {
      $MsgDis = $_SESSION['alert'];
      $bg = "bg-warning";
      $dis = "<i class='fa fa-warning font-20'></i> Warning!";
      $tone = "warning.mp3";
    } elseif (isset($_SESSION['info'])) {
      $MsgDis = $_SESSION['info'];
      $bg = "bg-info";
      $dis = "<i class='fa fa-bell font-20'></i> Info!";
      $tone = "info.mp3";
    }
    echo '    
<div class="text-black border-circle mb-4 square p-2 notification-box" id="MsgArea">
<audio controls autoplay hidden="">
          <source src="' . $DOMAIN . '/assets/data/tone/' . $tone . '" type="audio/ogg">
          <source src="' . $DOMAIN . '/assets/data/tone/' . $tone . '" type="audio/ogg">
</audio>
    <p class="mb-0">
     <h6 class="' . $bg . ' p-2 text-white" onclick="HideMsgNote()"> ' . $dis . '</h6>
          <span class="font-14">
            ' . $MsgDis . '
          </span><br><br>
            <a href="#" onclick="HideMsgNote()" class="text-grey text-decoration-none">Dismiss</a>
    </p>
    <script>
setTimeout(function() {
 $("#MsgArea").fadeOut("slow");
}, 4500);
</script>
</div>
<script>
function HideMsgNote() {
document.getElementById("MsgArea").style.display="none";
}
</script>
';
    unset($_SESSION['msg']);
    unset($_SESSION['err']);
    unset($_SESSION['alert']);
    unset($_SESSION['info']);
  } else {
    echo "";
  }

  //mention your tags for bodies
}

//IP_ADDRESS
function IP_ADDRESS()
{
  $ipaddress = '';
  if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
  else if (getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
  else if (getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
  else if (getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
  else if (getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
  else if (getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
  else
    $ipaddress = 'UNKNOWN';

  if ($ipaddress == "::1") {
    $ipaddress = "127.0.0.1";
  } else {
    $ipaddress = $ipaddress;
  }
  return $ipaddress;
}


//Get running url
function get_url()
{
  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
  else
    $url = "http://";
  // Append the host(domain name, ip) to the URL.
  $url .= $_SERVER['HTTP_HOST'];

  // Append the requested resource location to the URL
  $url .= $_SERVER['REQUEST_URI'];

  return $url;
}
//Include Current Running Url
function R_URL($url)
{
  echo "<input type='text' name='cr_url' value='$url' hidden='' />";
}

// Device Type 
function DeviceType()
{
  $deviceName = "";
  $userAgent = $_SERVER["HTTP_USER_AGENT"];
  $devicesTypes = array(
    "Computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
    "Tablet"   => array("tablet", "android", "ipad", "tablet.*firefox"),
    "Mobile"   => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
    "Bot"      => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")
  );
  foreach ($devicesTypes as $deviceType => $devices) {
    foreach ($devices as $device) {
      if (preg_match("/" . $device . "/i", $userAgent)) {
        $deviceName = $deviceType;
      }
    }
  }
  return ucfirst($deviceName);
}

//Send Mails 
function SendMail($Valid, $Subject, $Title, $Sendto, $MAIL_MSG)
{
  global $con;
  global $SENDING_OTP;
  global $store_mail_id;
  global $SENDER_MAIL;
  global $RECEIVER_MAIL;

  //Mail Variables 
  $EnableMail = $Valid;
  $Subject = $Subject;
  $Title = $Title;
  $SendByMail = $SENDER_MAIL;
  $ReplyToMail = $RECEIVER_MAIL;
  $Sendto = $Sendto;
  $MailingContent = $MAIL_MSG;


  //Device Details
  $ip_address = IP_ADDRESS();
  $device_type = DeviceType();
  date_default_timezone_set("Asia/Calcutta");
  $date_time_c = date("D d M, Y h:m:s a");
  $ipv6_n = php_uname('n');
  $ipv6_p = php_uname('p');
  $os = php_uname('s');
  $OS_release = php_uname('r');
  $OS_Version = php_uname('v');
  $System_Info = php_uname('m');
  $System_more_Info = $_SERVER['HTTP_USER_AGENT'];
  $device_Details = "<b>Date Time:</b> $date_time_c<br><b>Ip-Address :</b> $ip_address<br><b>Device Type :</b> $device_type<br><b>Host Name :</b> $ipv6_n<br><b> System Information :</b> $System_more_Info";

  if ($EnableMail == "true") {

    // Subject
    $subject = "$Subject";

    // Set Message
    $message = "
<style>
@import url('https://fonts.googleapis.com/css2?family=Commissioner&display=swap');
  html,
body, table, tr, th, td, h1, h2, h3, h4, h5, h6, p, span, div, section, b {
    font-family: 'Commissioner', sans-serif !important;
    font-size: 13px !important;
    text-align: justify !important;
    background-color: #d6fcd673 !important;
}
</style>
<div style='text-shadow: 0px 0px 0.2px grey;background-color: #d6fcd673 !important; max-width:900px !important;margin: auto;'>
$Title<BR>
$MailingContent
<hr>
<span style='font-size:11px;text-align:center;'>This is auto generated mail from $SendByMail. If you have any issue or find something incorrect in it than please contact us at $ReplyToMail</span>
</div>
";

    // Set From: header
    $from =  "notifications" . "<" . $SendByMail . ">";

    // Email Headers
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: " . $ReplyToMail . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    ini_set("sendmail_from", $store_mail_id); // for windows server
    mail($Sendto, $subject, $message, $headers);
  }
}

//More Requirements
$ip_address = IP_ADDRESS();
$IP_ADDRESS = $ip_address;
$device_type = DeviceType();
date_default_timezone_set("Asia/Calcutta");
$date_time_c = date("D d M, Y h:m:s a");
$CURRENT_DATE_TIME = $date_time_c;
$ipv6_n = php_uname('n');
$ipv6_p = php_uname('p');
$os = php_uname('s');
$OS_release = php_uname('r');
$OS_Version = php_uname('v');
$System_Info = php_uname('m');
$System_more_Info = $_SERVER['HTTP_USER_AGENT'];
$SYSTEM_CONFIGURATIONS = "SystemDetails --> [
    'DateTime' => '$date_time_c',
    'IpAddress' => '$ip_address',
    'DeviceType' => '$device_type',
    'Tpv6_P' => '$ipv6_p',
    'OS' => '$os',
    'OS_RELEASE' => '$OS_release',
    'OS_Version' =>'$OS_Version',
    'SystemType' => '$System_Info',
    'HostName' =>'$ipv6_n',
    'MoreDetails' => '$System_more_Info'
 ]
";

//For IMG Tags
function IMG($NAME, $FILE, $CLASS)
{
  global $DIR_IMG;
  echo "<img src='$DIR_IMG/$FILE' class='$CLASS img-fluid' alt='$NAME' title='$NAME'>";
}

//Generate Log file for the project
function CREATE_LOGS($TITLE, $ACTION)
{
  $TITLE = strtoupper($TITLE);
  global $IP_ADDRESS;
  global $SYSTEM_CONFIGURATIONS;

  //Check work environment
  global $WORK_ENV;

  //Separate file for daily logs and name as day month year
  $FileName = date("d_M_Y") . ".txt";
  $filename = "../logs/$WORK_ENV/$FileName";

  //Assing date time for logs
  $Date = date("D d M, Y");
  $Time = date("h:m A");

  //check previous logs is created for current day or not
  //if log is already is created of current day then open and update the logs
  if (file_exists("$filename")) {
    $filename = "../logs/$WORK_ENV/$FileName";
    $handle = fopen($filename, "rb");
    $contents = fread($handle, filesize($filename));
    fclose($handle);

    $Time = date("h:m A");
    $contents = $contents . "
----------------------- Entry At $Time ---------------------------------

=> $TITLE --> {
    $ACTION
}

$SYSTEM_CONFIGURATIONS
";
    $filename = "../logs/$WORK_ENV/$FileName";
    $handle = fopen($filename, "w");
    fwrite($handle, $contents);
    chmod($filename, 0777);

    //if no log created for current day then simply create a new log file
  } else {
    $contents = "
--------------------Acitivity Logs for $Date Used in $WORK_ENV Environment-------------------------------

=> Log File created for $Date which is start at $Time from " . $IP_ADDRESS . "
=> File Creation System Details (It should be same for all the log entry.
=> If any log is not same then maybe that entry/action is not from a authorised/know device.
=> Default System Configuration at Entry Time

$SYSTEM_CONFIGURATIONS

----------------------- Entry At $Time ---------------------------------

=> LOG_FILE_CREATED --> {
    Log File Generated
}

=> $TITLE --> {
    $ACTION
}

=> $SYSTEM_CONFIGURATIONS
";
    $filename = "../logs/$WORK_ENV/$FileName";
    $handle = fopen($filename, "w");
    fwrite($handle, $contents);
    chmod($filename, 0777);
  }
}

//Store User Activity in the data
function APP_ACTIVITY($Name, $Details, $User)
{
  global $DBConnection;
  if ($User == null) {
    $User = 0;
  } else {
    $User = $User;
  }
  $Sql = "INSERT INTO activitytrack (ActivityName, ActivityDetails, CreatedAt, UserInvolved) VALUES ('$Name', '$Details', CURRENT_TIMESTAMP, '$User')";

  $Query = mysqli_query($DBConnection, $Sql);
  if ($User != null or $User != "0") {
    $UserId = $User;
    $Select = "SELECT * FROM users where UserId='$UserId'";
    $query = mysqli_query($DBConnection, $Select);
    $Fetch = mysqli_fetch_array($query);
    $FullName = $Fetch['FullName'];
    $UserName = $Fetch['Username'];
    $UserTypeId = $Fetch['UserTypeId'];
    $FetchUsers = "SELECT * FROM usertypes where UserTypeId='$UserTypeId'";
    $Query = mysqli_query($DBConnection, $FetchUsers);
    $fetchT = mysqli_fetch_array($Query);
    $UserType = $fetchT['UserTypeName'];
  } else {
    $FullName = "Unknown";
    $UserName = "Unknown";
    $UserType = "Unknown";
  }
  CREATE_LOGS($TITLE = "$Name", $ACTION = "$Details
 USER_INVOLVED --> [
   FullName --> $FullName
   UserName --> $UserName
   UserType --> $UserType
 ]");
}

//function input html tag with bootstrap
function INPUT($Name, $Placeholder, $Value, $required, $h)
{
  if ($required == "true") {
    $required = "required=''";
  } else {
    $required = "";
  }

  if ($h == "1") {
    $h = "hidden='true'";
  } else {
    $h = "";
  }
  echo "<div class='form-group'>
       <input type='text' class='form-control' name='$Name' $h $required placeholder='$Placeholder'
        value='$Value' id='$Name'>
</div>";
}

//button tag
function BUTTON($Name, $Class, $Action, $Value, $Valid)
{
  if ($Valid == "1") {
    $required = "disabled=''";
  } else {
    $required = "";
  }
  echo "<div class='form-group'>
       <button type='submit' class='form-control $Class' name='$Name' value='$Value' id='$Name' $required>$Action</button>
</div>";
}

//Update function 
function UPDATE($SQL, $Page)
{
  global $DBConnection;
  $Update = "$SQL";
  $Query = mysqli_query($DBConnection, $Update);
  if ($Query == true) {
    header("location: $Page");
  } else {
    header("location: $Page");
  }
}

//Check function
function CHECK($SQL)
{
  global $DBConnection;
  $Check = "$SQL";
  $Query = mysqli_query($DBConnection, $Check);
  $auth = mysqli_num_rows($Query);
  global $auth;
  global $Query;
}

//Insert Data
function INSERT($tablename, array $INSERT)
{
  global $DBConnection;
  $tablename = $tablename;
  $Datatables = "";
  $TableValues = "";
  $tablerows = $INSERT;
  $arraycount = count($tablerows);
  $mainarray = $arraycount - 1;

  foreach ($tablerows as $key => $value) {
    global $$value;
  }


  foreach ($tablerows as $key => $value) {
    if ($key == $mainarray) {
      $TableValues .= "'" . $$value . "'";
    } else {
      $TableValues .= "'" . $$value . "', ";
    }
  }

  foreach ($tablerows as $key => $value) {
    if ($key == $mainarray) {
      $Datatables .= "$value";
    } else {
      $Datatables .= "$value, ";
    }
  }
  $InsertNewData = "INSERT INTO $tablename ($Datatables) VALUES ($TableValues)";
  $Query = mysqli_query($DBConnection, $InsertNewData);
  return $Query;
}

//Select Data
function SELECT($SQL)
{
  global $DBConnection;
  $SELECT = "$SQL";
  $QUERY = mysqli_query($DBConnection, $SELECT);
  return $QUERY;
}

//Count Data
function TOTAL($SQL)
{
  global $DBConnection;
  $SQL = "$SQL";
  $Query = mysqli_query($DBConnection, $SQL);
  $Count = mysqli_num_rows($Query);
  if ($Count == 0) {
    return "0";
  } else {
    return $Count;
  }
}

//Delete data
function DELETE($SQL)
{
  global $DBConnection;
  $DELETE = "$SQL";
  $QUERY = mysqli_query($DBConnection, $DELETE);
  return $QUERY;
}

//Error file 
function ERROR($msg, $dir)
{
  $Error = "Ooopsss Some Went wrong!";
  $Desc = "$msg";
  require "$dir";
}

//App Configuration
//configuration
function CONFIG($Data)
{
  global $DBConnection;
  $SELECT_configurations = "SELECT * FROM configurations where Data='$Data'";
  $QUERY_configurations = mysqli_query($DBConnection, $SELECT_configurations);
  $Configurations = mysqli_fetch_array($QUERY_configurations);
  $Value = $Configurations['Value'];
  return $Value;
}

//User SESSION
function USER_SESSION_CHECK($dir, $dir2)
{
  if (empty($_SESSION['UserId'])) {
    header("location: $dir");
  } else {
    header("location: $dir2");
  }
}

//Get user data
function auth($Data)
{
  global $DBConnection;
  if (isset($_SESSION['UserId'])) {
    $UserId = $_SESSION['UserId'];
    $SQL = "SELECT * FROM users where UserId='$UserId'";
    $Query = mysqli_query($DBConnection, $SQL);
    $Fetch = mysqli_fetch_array($Query);
    $Data = $Fetch["$Data"];
    $value = $Data;
  } else {
    $value = "Unknown";
  }
  return $value;
}

//Get userType data
function UserType($Data)
{
  global $DBConnection;
  if (isset($_SESSION['UserId'])) {
    $UserId = $_SESSION['UserId'];
    $SQL = "SELECT * FROM users where UserId='$UserId'";
    $Query = mysqli_query($DBConnection, $SQL);
    $Fetch = mysqli_fetch_array($Query);
    $Data = $Fetch["UserTypeId"];
    $Sql = "SELECT * FROM usertypes where UserTypeId='$Data'";
    $Query = mysqli_query($DBConnection, $Sql);
    $Fetch = mysqli_fetch_array($Query);
    $UserTypeData = $Fetch["$Data"];
    $value = $UserTypeData;
  } else {
    $value = "Unknown";
  }
  return $value;
}

//secure
function SECURE($string, $action = 'e')
{
  // you may change these values to your own
  $secret_key = 'my_simple_secret_key';
  $secret_iv = 'my_simple_secret_iv';

  $output = false;
  $encrypt_method = "AES-256-CBC";
  $key = hash('sha256', $secret_key);
  $iv = substr(hash('sha256', $secret_iv), 0, 16);

  if ($action == 'e') {
    $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
  } else if ($action == 'd') {
    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
  }

  return $output;
}

//Status View
function STATUS($action, $id, $status)
{
  if ($status == "1") {
    $s = "Active";
    $b = "bg-success";
  } else {
    $s = "Inactive";
    $b = "bg-danger";
  }

  echo "<a href='../action/update.php?$action=true&id=$id&status=$status' class='btn btn-sm $b square'>$s</a>";
}


//Upload files
function UPLOAD_FILES($dir, $checkfile = false, $pre, $ref, $NewFile, array $allowedfiles = null)
{

  $pre = str_replace(" ", "_", $pre);
  $ref = str_replace(" ", "_", $ref);

  //check if directory exists
  if ($checkfile == true) {
    if (file_exists("$dir/$checkfile")) {
      unlink("$dir/$checkfile");
    }
  }

  //check if directory exists
  if (!file_exists("$dir/")) {
    mkdir("$dir/", 0777, true);
  }

  //files allowed by default
  $Folder = "$dir/";
  $temp = explode(".", $_FILES["$NewFile"]["name"]);
  $Uploadedfile = $_FILES["$NewFile"]["name"];
  $UploadFileType = pathinfo($Uploadedfile, PATHINFO_EXTENSION);

  //check files allowed for upload
  if ($allowedfiles == null) {

    //files allowed by default
    $allowedfiles = array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'zip', 'rar', 'gz', 'tar', '7z');

    //check files allowed for upload
    if (!in_array($UploadFileType, $allowedfiles)) {
      return false;

      //files allowed by default
    } else {
      $newfilename = "$pre" . "_" . $ref . "_" . date("d_M_Y_h_m_s_") . rand(0, 99999999999) . '_' . '.' . end($temp);
      move_uploaded_file($_FILES["$NewFile"]['tmp_name'], $Folder . $newfilename);
      return $newfilename;
    }

    //files allowed by user
  } else {

    //check files allowed for upload
    if (!in_array($UploadFileType, $allowedfiles)) {
      return false;

      //files allowed by default
    } else {
      $newfilename = "$pre" . "_" . $ref . "_" . date("d_M_Y_h_m_s_") . rand(0, 99999999999) . '_' . '.' . end($temp);
      move_uploaded_file($_FILES["$NewFile"]['tmp_name'], $Folder . $newfilename);
      return $newfilename;
    }
  }
}

//upload multiple files
function UploadMultipleFiles($UploadDir, $FileFieldName, $SaveInto)
{
  $total_count = count($_FILES["$FileFieldName"]['name']);
  if ($total_count == 0) {
    for ($i = 0; $i < $total_count; $i++) {
      $FileName = $_FILES["$FileFieldName"]['name'][$i];
      //$ProImageType = $_FILES["$FileFieldName"]['type'][$i];
      //$ProImageSize = $_FILES["$FileFieldName"]['size'][$i];
      $ProImageTmpName = $_FILES["$FileFieldName"]['tmp_name'][$i];
      //$ProImageError = $_FILES["$FileFieldName"]['error'][$i];
      $ProImageExt = pathinfo($FileName, PATHINFO_EXTENSION);

      $FileName = "$FileFieldName" . "_" . $i . date("d_m_Y_h_m_s_a_") . "." . $ProImageExt;
      $ProImagePath = $UploadDir . $FileName;
      $FileFieldName = $FileName;

      if ($ProImageExt == 'jpg' || $ProImageExt == 'jpeg' || $ProImageExt == 'png' || $ProImageExt == 'gif' || $ProImageExt == 'bmp' || $ProImageExt == 'pdf') {
        if (!file_exists("$UploadDir/")) {
          mkdir("$UploadDir/", 0777, true);
        }
        move_uploaded_file($ProImageTmpName, $ProImagePath);
        $SaveImages = $SaveInto;
      } else {
        $SaveImages = false;
      }
    }
    return $SaveImages;
  } else {
    return null;
  }
}
