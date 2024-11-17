<?php
require '../config.php';
if (isset($_POST['UpdateProfile'])) {
	$UserId = $_POST['UpdateProfile'];
	$FullName = $_POST['FullName'];
	$EmailId = $_POST['EmailId'];
	$PhoneNumber = $_POST['PhoneNumber'];
	$EmailId = $_POST['EmailId'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$UpdatedAt = $CURRENT_DATE_TIME;
	APP_ACTIVITY($Name = "PROFILE_UPDATE", $Details = "SUCCESS -> FullName:$FullName, EmailId: $EmailId, PhoneNumber: $PhoneNumber, Username : $Username and Password : $Password", $User = "$UserId");
	$_SESSION['info'] = "$FullName, your profile is Updated Successfully!";
	UPDATE("UPDATE users SET FullName='$FullName', EmailId='$EmailId', PhoneNumber='$PhoneNumber', Username ='$Username', Password='$Password' where UserId=$UserId", "../admin/?view=Profile");
} else if (isset($_GET['updateservices'])) {
	$ServicesId = $_GET['id'];
	$Status = $_GET['status'];
	$UpdatedAt = date("d M, Y");
	if ($Status == "0") {
		$Status = "1";
		$news = "Active!";
	} else {
		$Status = "0";
		$news = "Inactive!";
	}
	APP_ACTIVITY($Name = "SERVICE_STATUS_UPDATE", $Details = "CHANGED -> $Status", $User = "$UserId");
	$_SESSION['info'] = "Service is $news";
	UPDATE("UPDATE services SET Status='$Status', UpdatedAt='$UpdatedAt' where ServicesId='$ServicesId'", "../admin/?view=Services");
} else if (isset($_POST['UpdateServices'])) {
	$ServicesId = $_POST['UpdateServices'];
	$ServiceTitle = $_POST['ServiceTitle'];
	$SeviceDesc = SECURE("" . $_POST['ServiceDesc'] . "", "e");

	if ($_FILES['ServiceImg']['name'] == null) {
		$ServiceImg = $_POST['C_ServiceImg'];
	} else {
		unlink("" . $_POST['C_ServiceImg'] . "");
		$ServiceImg = UPLOAD_FILES("../storage/img/services", "null", "ServiceImage", "Image", "ServiceImg");
	}

	APP_ACTIVITY($Name = "SERVICE_DETAILS_UPDATED", $Details = "Updated", $User = "1");
	$_SESSION['info'] = "$ServiceTitle is Updated Successfully!";
	UPDATE("UPDATE services SET ServiceTitle='$ServiceTitle', ServiceImg='$ServiceImg', ServiceDesc='$SeviceDesc' where ServicesId='$ServicesId'", "../admin/?view=Services");
} else if (isset($_POST['UpdateProjects'])) {
	$ProjectsId = $_POST['UpdateProjects'];
	$ProjectsTitle = $_POST['ProjectsTitle'];
	$ProjectsDesc = SECURE("" . $_POST['ProjectsDesc'] . "", "e");

	if ($_FILES['ProjectsImg']['name'] == null) {
		$ProjectsImg = $_POST['C_ProjectsImg'];
	} else {
		unlink("" . $_POST['C_ProjectsImg'] . "");
		$ProjectsImg = UPLOAD_FILES("../storage/img/projects", null, "Project", "Img", "ProjectsImg");
	}

	APP_ACTIVITY($Name = "PROJECTS_DETAILS_UPDATED", $Details = "Updated", $User = "1");
	$_SESSION['info'] = "$ProjectsTitle is Updated Successfully!";
	UPDATE("UPDATE projects SET ProjectsTitle='$ProjectsTitle', ProjectsImg='$ProjectsImg', ProjectsDesc='$ProjectsDesc' where ProjectsId='$ProjectsId'", "../admin/?view=Projects");
} else if (isset($_GET['updateprojects'])) {
	$ProjectsId = $_GET['id'];
	$Status = $_GET['status'];
	$UpdatedAt = date("d M, Y");
	if ($Status == "0") {
		$Status = "1";
		$news = "Active!";
	} else {
		$Status = "0";
		$news = "Inactive!";
	}
	APP_ACTIVITY($Name = "Projects_STATUS_UPDATE", $Details = "CHANGED -> $Status", $User = "1");
	$_SESSION['info'] = "Projects is $news";
	UPDATE("UPDATE projects SET Status='$Status', UpdatedAt='$UpdatedAt' where ProjectsId='$ProjectsId'", "../admin/?view=Projects");
} else if (isset($_POST['UpdatePage'])) {
	$PagesId = $_POST['UpdatePage'];
	$PageTitle = $_POST['PageTitle'];
	$PageDesc = SECURE("" . $_POST['PageDesc'] . "", "e");
	$UpdatedAt = date("d M, Y");
	APP_ACTIVITY($Name = "PAGE_DETAILS_UPDATED", $Details = "$PageDesc", $User = "1");
	$_SESSION['info'] = "$PageTitle is Updated Successfully!";
	UPDATE("UPDATE pages SET PageTitle='$PageTitle', PageDesc='$PageDesc', UpdatedAt='$UpdatedAt' where PagesId='$PagesId'", "../admin/?view=$PageTitle");
} else if (isset($_POST['UpdateSliders'])) {
	$sliderid = $_POST['UpdateSliders'];
	$slidertitle = $_POST['slidertitle'];
	$sliderdesc = SECURE("" . $_POST['sliderdesc'] . "", "e");
	if ($_FILES['sliderimg']['name'] == null) {
		$sliderimg = $_POST['C_sliderimg'];
	} else {
		unlink("" . $_POST['C_sliderimg'] . "");
		$sliderimg = UPLOAD_FILES("../storage/img/slider", null, "Slider", "Img", "sliderimg");
	}
	APP_ACTIVITY($Name = "SLIDER_DETAILS_UPDATED", $Details = "Updated", $User = "1");
	$_SESSION['info'] = "$slidertitle is Updated Successfully!";
	UPDATE("UPDATE sliders SET slidertitle='$slidertitle', sliderimg='$sliderimg', sliderdesc='$sliderdesc' where sliderid='$sliderid'", "../admin/?view=Sliders");
} else if (isset($_POST['UpdateConfiguration'])) {
	$ConfigurationId = $_POST['UpdateConfiguration'];
	$Data = $_POST['Data'];
	$Value = $_POST['Value'];
	$UpdatedAt = DATE("d M , Y");
	APP_ACTIVITY("CONFIGURATION_UPDATED", "$Data-> $Value is updated.", "1");
	$_SESSION['info'] = "$Data is updated successfully, new $Data is $Value";

	UPDATE("UPDATE configurations SET Data='$Data', Value ='$Value' where ConfigurationId='$ConfigurationId'", "../admin/?view=ContactDetails");
} else if (isset($_GET['updateslider'])) {
	$sliderid = $_GET['id'];
	$Status = $_GET['status'];
	$UpdatedAt = date("d M, Y");
	if ($Status == "0") {
		$Status = "1";
		$news = "Active!";
	} else {
		$Status = "0";
		$news = "Inactive!";
	}
	APP_ACTIVITY($Name = "SLIDER_STATUS_UPDATED", $Details = "CHANGED -> $Status", $User = "1");
	$_SESSION['info'] = "Slider is now $news";
	UPDATE("UPDATE sliders SET Status='$Status', UpdatedAt='$UpdatedAt' where sliderid='$sliderid'", "../admin/?view=Sliders");
} else if (isset($_GET['updatesociallink'])) {
	$linkid = $_GET['id'];
	$Status = $_GET['status'];
	if ($Status == "0") {
		$Status = "1";
		$news = "Active!";
	} else {
		$Status = "0";
		$news = "Inactive!";
	}
	APP_ACTIVITY($Name = "SOCIAL_ACCOUNT_STATUS_UPDATED", $Details = "CHANGED -> $Status", $User = "1");
	$_SESSION['info'] = "Social account  is now $news";
	UPDATE("UPDATE sociallinks SET status='$Status' where linkid='$linkid'", "../admin/?view=Social Links");
} else if (isset($_POST['updateSocialLink'])) {
	$title = $_POST['title'];
	$linkid = $_POST['updateSocialLink'];
	$url = $_POST['url'];
	$_SESSION['msg'] = "$title is Updated Successfully!";
	UPDATE("UPDATE sociallinks SET title='$title', url='$url' where linkid='$linkid'", "../admin/?view=Social Links");
} else if (isset($_GET['enquiry'])) {
	$id = $_GET['enquiry'];
	$Status = $_GET['status'];
	if ($Status == "0") {
		$Status = "1";
		$news = "Read!";
	} else {
		$Status = "0";
		$news = "Unread!";
	}
	$_SESSION['msg'] = "Message is $news Now";
	UPDATE("UPDATE equiries SET status='$Status' where enquiryid='$id'", "../admin/?view=Enquiry");

	//update blogs
} elseif (isset($_POST['UpdateBlogs'])) {
	$blog_id  = $_POST['UpdateBlogs'];
	$blog_title = $_POST['blog_title'];
	$blog_description = SECURE("" . $_POST['blog_description'] . "", "e");

	if ($_FILES['blog_feature_image']['name'] == null) {
		$blog_feature_image = $_POST['C_ServiceImg'];
	} else {
		unlink("" . $_POST['C_ServiceImg'] . "");
		$blog_feature_image = UPLOAD_FILES("../storage/img/blogs", "null", "blog_feature_image", "Image", "blog_feature_image");
	}

	APP_ACTIVITY($Name = "SERVICE_DETAILS_UPDATED", $Details = "Updated", $User = "1");
	$_SESSION['info'] = "$ServiceTitle is Updated Successfully!";
	UPDATE("UPDATE blogs SET blog_title='$blog_title', blog_feature_image='$blog_feature_image', blog_description='$blog_description' where blog_id='$blog_id'", "../admin/?view=Blogs");

	//update verticales
} elseif (isset($_POST['UpdateVerticales'])) {
	$vertical_id  = $_POST['UpdateVerticales'];
	$vertical_name = $_POST['vertical_name'];
	$vertical_descriptions = SECURE("" . $_POST['vertical_descriptions'] . "", "e");

	if ($_FILES['vertical_image']['name'] == null) {
		$vertical_image = $_POST['C_ServiceImg'];
	} else {
		unlink("" . $_POST['C_ServiceImg'] . "");
		$vertical_image = UPLOAD_FILES("../storage/img/verticales", "null", "$vertical_name", "Image", "vertical_image");
	}

	APP_ACTIVITY($Name = "SERVICE_DETAILS_UPDATED", $Details = "Updated", $User = "1");
	$_SESSION['info'] = "$vertical_name is Updated Successfully!";
	UPDATE("UPDATE verticales SET vertical_name='$vertical_name', vertical_image='$vertical_image', vertical_descriptions='$vertical_descriptions' where vertical_id='$vertical_id'", "../admin/?view=Veritcals");
}
