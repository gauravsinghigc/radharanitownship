<?php 
include '../config.php';

if(env("APP_STATUS") == "INSTALLED"){
if(file_exists("../modules/install/installation_exits.php")){
    require '../modules/install/installation_exits.php';
    } else {
    ERROR("Installation Currupted!", "../modules/error.php");
}
} else  {
  if(file_exists("../modules/install/installation_form.php")){
    require '../modules/install/installation_form.php';
    } else {
   ERROR("Installation Form Not Found!", "../modules/error.php");
}  
}
?>
