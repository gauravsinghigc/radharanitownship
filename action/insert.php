<?php
require '../config.php';

if (isset($_POST['CreateServices'])) {
  $ServiceTitle = $_POST['ServiceTitle'];
  $ServiceDesc = SECURE("" . $_POST['ServiceDesc'] . "", "e");
  $ServiceImg = UPLOAD_FILES("../storage/img/services", "null", $ServiceTitle, "service", "ServiceImg");
  $CreatedAt = date("Y-m-d");
  $Status = "1";
  $INSERT = INSERT("services", ["ServiceTitle", "ServiceImg", "ServiceDesc", "CreatedAt", "Status"]);

  if ($INSERT == true) {
    $_SESSION['msg'] = "$ServiceTitle is created successfully!";
    APP_ACTIVITY($Name = "NEW_SERVICES_ENTRY", $Details = "SAVED -> $INSERT", $User = "$UserId");
    header("location: ../admin/?view=Services");
  } else {
    $_SESSION['err'] = "$ServiceTitle : Service Creation Failed!";
    APP_ACTIVITY($Name = "NEW_SERVICES_ENTRY", $Details = "FAILED -> $INSERT", $User = "$UserId");
    header("location: ../admin/?view=Services");
  }
} else if (isset($_POST['CreateProjects'])) {
  $ProjectsTitle = $_POST['ProjectsTitle'];
  $ProjectsDesc = SECURE("" . $_POST['ProjectsDesc'] . "", "e");
  $ProjectsImg = UPLOAD_FILES("../storage/img/projects", "null", $ProjectsTitle, "Projects", "ProjectsImg");
  $CreatedAt = date("Y-m-d");
  $Status = "1";
  $INSERT = INSERT("projects", ["ProjectsTitle", "ProjectsImg", "ProjectsDesc", "CreatedAt", "Status"]);

  if ($INSERT == true) {
    $_SESSION['msg'] = "$ProjectsTitle is created successfully!";
    APP_ACTIVITY($Name = "NEW_PROJECT_ENTRY", $Details = "SAVED -> $INSERT", $User = "$UserId");
    header("location: ../admin/?view=Projects");
  } else {
    $_SESSION['err'] = "$ProjectsTitle : Project Creation Failed!";
    APP_ACTIVITY($Name = "NEW_PROJECT_ENTRY", $Details = "FAILED -> $INSERT", $User = "$UserId");
    header("location: ../admin/?view=Projects");
  }
} else if (isset($_POST['CreateSlider'])) {
  $slidertitle = $_POST['slidertitle'];
  $sliderdesc = SECURE("" . $_POST['sliderdesc'] . "", "e");
  $sliderimg = UPLOAD_FILES("../storage/img/slider", "null", $slidertitle, "Slider", "sliderimg");
  $CreatedAt = date("Y-m-d");
  $Status = "1";
  $INSERT = INSERT("sliders", ["slidertitle", "sliderimg", "sliderdesc", "CreatedAt", "Status"]);

  if ($INSERT == true) {
    $_SESSION['msg'] = "$slidertitle is created successfully!";
    APP_ACTIVITY($Name = "NEW_SLIDER_ENTRY", $Details = "SAVED -> $INSERT", $User = "1");
    header("location: ../admin/?view=Sliders");
  } else {
    $_SESSION['err'] = "$slidertitle : Slider Creation Failed!";
    APP_ACTIVITY($Name = "NEW_SLIDER_ENTRY", $Details = "FAILED -> $INSERT", $User = "1");
    header("location: ../admin/?view=Sliders");
  }
} else if (isset($_POST['CreateSocialLink'])) {
  $title = $_POST['title'];
  $icon = $_POST['icon'];
  $url = $_POST['link'];
  $status = "1";
  $INSERT = INSERT("sociallinks", ["title", "icon", "url", "status"]);
  if ($INSERT == true) {
    $_SESSION['info'] = "$title link is created and attached to website successfully!";
    APP_ACTIVITY("NEW_SOCIAL_ACCOUNT", "$title->$icon->$link->$status", "1");
    header("location: ../admin/?view=Social Links");
  } else {
    $_SESSION['alert'] = "$title link is not created!";
    APP_ACTIVITY("NEW_SOCIAL_ACCOUNT_FAILED", "$title->$icon->$link->$status", "1");
    header("location: ../admin/?view=Social Links");
  }
} else if (isset($_POST['ContactForm'])) {
  $FullName = $_POST['FullName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $type = $_POST['type'];
  $message = SECURE("" . $_POST['message'] . "", "e");
  $FORM_TYPE = $_POST['ContactForm'];
  $createdat = date("d M, Y");
  $status = "0";
  $INSERT = INSERT("equiries", ["type", "FullName", "email", "phone", "message", "createdat", "status"]);
  if ($INSERT == true) {
    $_SESSION['msg'] = "Thanking You for contacting Us. We received your details and contact you soon!";
    APP_ACTIVITY("NEW_FORM_SUBMITED", "SENT->$INSERT", "1");
    header("location: ../app/index.php");
  } else {
    $_SESSION['err'] = "Unable to send your details! Please try again after some time.";
    APP_ACTIVITY("NEW_FORM_SUBMITED", "FAILED->$INSERT", "1");
    header("location: ../app/index.php");
  }

  //save submitted form : SubmitCVDetails
} else if (isset($_POST['SubmitCVDetails'])) {
  $FullName = $_POST['FullName'];
  $EmailId = $_POST['EmailId'];
  $PhoneNumber = $_POST['PhoneNumber'];
  $Subject = $_POST['Subject'];
  $Message = SECURE($_POST['Message'], "e");
  $Message2 = SECURE($_POST['Message'], "e");
  $ReceivedAt = date("d M Y");
  $cr_url = $_POST['cr_url'];

  //upload attachements
  $RefrenceID = rand(1111111, 999999999) . "/" . date("dmY");
  $Folder = "../storage/attachements/$RefrenceID/";

  $Attachement = UPLOAD_FILES($Folder, "null", "Attachement", "CV", "Attachement");

  //save cv details
  $Save = INSERT("resumes", ["FullName", "EmailId", "PhoneNumber", "Subject", "Message", "ReceivedAt", "Attachement"]);
  if ($Save == true) {
    $_SESSION['msg'] = "Thanking You for contacting Us. We received your details and contact you soon!";
    APP_ACTIVITY("NEW_CV_SUBMITED", "SENT->$Save", "1");

    //sent details on mail
    //file details on mail
    $tmp_name    = $_FILES['Attachement']['tmp_name']; // get the temporary file name of the file on the server
    $name        = $_FILES['Attachement']['name'];  // get the name of the file
    $size        = $_FILES['Attachement']['size'];  // get size of the file for size validation
    $type        = $_FILES['Attachement']['type'];  // get type of the file
    $error       = $_FILES['Attachement']['error']; // get the error (if any)
    $content     = file_get_contents($tmp_name);    // put the content of the file into a variable

    //validate form field for attaching the file
    if ($file_error > 0) {
      die('Upload error or No files uploaded');
    }

    //read from the uploaded file & base64_encode content
    $handle = fopen($tmp_name, "r");  // set the file handle only for reading the file
    $content = fread($handle, $size); // reading the file
    fclose($handle);                  // close upon completion

    $encoded_content = chunk_split(base64_encode($content));

    $boundary = md5("random"); // define boundary with a md5 hashed value

    //get mail variables from the DB or config file
    $from_email = CONFIG("SENDER_EMAIL");
    $RECEIVER_MAIL = CONFIG("RECEIVER_MAIL");
    $reply_to_email = $EmailId;

    //header
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
    $headers .= "From:" . $from_email . "\r\n"; // Sender Email
    $headers .= "Reply-To: " . $reply_to_email . "\r\n"; // Email address to reach back
    $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary

    //plain text
    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";

    //generate msg
    $Message = "Dear," . CONFIG("APP_NAME") . "\r\n\r\n";
    $Message .= "$FullName submitted their CV on $ReceivedAt please check and reply him/her as soon as possible.\r\n";
    $Message .= "
  Name : $FullName \r\n
  EmailId : $EmailId \r\n
  PhoneNumber : $PhoneNumber\r\n
  Subject : $Subject\r\n
  Message : " . SECURE($Message2, "d") . "\r\n
 \r\n\r\n
  --
  This is an auto generated mail. Replying to this email mail result in reply to the person who submitted CV.";

    $body .= chunk_split(base64_encode($Message));

    //attachment
    $body .= "--$boundary\r\n";
    $body .= "Content-Type: $type; name=" . $name . "\r\n";
    $body .= "Content-Disposition: attachment; filename=" . $name . "\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
    $body .= $encoded_content; // Attaching the encoded file with email

    $Subject = $Subject . "@$RefrenceID : $RecievedAt";

    $sentMailResult = mail($RECEIVER_MAIL, $Subject, $body, $headers);

    if ($sentMailResult == true) {
      $_SESSION['msg'] = "Thanking You for contacting Us. We received your details and contact you soon!";
      APP_ACTIVITY("NEW_CV_SUBMITED", "SENT->$Save", "1");
      header("location: $cr_url");
    } else {
      $_SESSION['err'] = "Unable to send your details! Please try again after some time.";
      APP_ACTIVITY("NEW_CV_SUBMITED", "FAILED->$Save", "1");
      header("location: $cr_url");
    }
  } else {
    $_SESSION['err'] = "Unable to send your details! Please try again after some time.";
    APP_ACTIVITY("NEW_CV_SUBMITED", "FAILED->$Save", "1");
    header("location: $cr_url");
  }

  //save blogs
} elseif (isset($_POST['CreateBlogs'])) {
  $blog_title = $_POST['blog_title'];
  $blog_description = SECURE("" . $_POST['blog_description'] . "", "e");
  $blog_feature_image = UPLOAD_FILES("../storage/img/blogs", "null", $blog_title, "blogs", "blog_feature_image");
  $blog_date = date("Y-m-d");
  $INSERT = INSERT("blogs", ["blog_title", "blog_feature_image", "blog_description", "blog_date"]);

  if ($INSERT == true) {
    $_SESSION['msg'] = "$blog_title is created successfully!";
    APP_ACTIVITY($Name = "NEW_BLOG_ENTRY", $Details = "SAVED -> $INSERT", $User = "$UserId");
    header("location: ../admin/?view=Blogs");
  } else {
    $_SESSION['err'] = "$blog_title : Service Creation Failed!";
    APP_ACTIVITY($Name = "NEW_BLOG_ENTRY", $Details = "FAILED -> $INSERT", $User = "$UserId");
    header("location: ../admin/?view=Blogs");
  }

  //create verticales
} elseif (isset($_POST['CreateVerticales'])) {
  $vertical_name = $_POST['vertical_name'];
  $vertical_descriptions = SECURE("" . $_POST['vertical_descriptions'] . "", "e");
  $vertical_image = UPLOAD_FILES("../storage/img/verticales", "null", $vertical_name, "blogs", "vertical_image");
  $created_at = date("Y-m-d");
  $INSERT = INSERT("verticales", ["vertical_name", "vertical_image", "vertical_descriptions", "created_at"]);

  if ($INSERT == true) {
    $_SESSION['msg'] = "$vertical_name is created successfully!";
    APP_ACTIVITY($Name = "NEW_BLOG_ENTRY", $Details = "SAVED -> $INSERT", $User = "$UserId");
    header("location: ../admin/?view=Veritcals");
  } else {
    $_SESSION['err'] = "$vertical_name : Service Creation Failed!";
    APP_ACTIVITY($Name = "NEW_BLOG_ENTRY", $Details = "FAILED -> $INSERT", $User = "$UserId");
    header("location: ../admin/?view=Veritcals");
  }
}
