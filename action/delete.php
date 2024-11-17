<?php
require '../config.php';

if (isset($_GET['services'])) {
	$ServicesId = $_GET['services'];
	$SQL = DELETE("DELETE FROM services where ServicesId='$ServicesId'");
	if ($SQL == true) {
		$_SESSION['msg'] = "Service Deleted!";
		header("location: ../admin/?view=Services");
	} else {
		$_SESSION['err'] = "Unable to Delete Service!";
		header("location: ../admin/?view=Services");
	}
} else if (isset($_GET['projects'])) {
	$ProjectsId = $_GET['projects'];
	$SQL = DELETE("DELETE FROM projects where ProjectsId='$ProjectsId'");
	if ($SQL == true) {
		$_SESSION['msg'] = "Project Deleted!";
		header("location: ../admin/?view=Projects");
	} else {
		$_SESSION['err'] = "Unable to Delete Project!";
		header("location: ../admin/?view=Projects");
	}
} else if (isset($_GET['Sliders'])) {
	$sliderid = $_GET['Sliders'];
	$SQL = DELETE("DELETE FROM sliders where sliderid='$sliderid'");
	if ($SQL == true) {
		$_SESSION['msg'] = "Slider is Deleted!";
		header("location: ../admin/?view=Sliders");
	} else {
		$_SESSION['err'] = "Unable to Delete Slider!";
		header("location: ../admin/?view=Sliders");
	}
} else if (isset($_GET['sociallinks'])) {
	$linkid = $_GET['sociallinks'];
	$DELETE = DELETE("DELETE FROM sociallinks where linkid='$linkid'");
	if ($DELETE == TRUE) {
		$_SESSION['msg'] = "Social Account link is Removed from the website successfully!";
		header("location: ../admin/?view=Social Links");
	} else {
		$_SESSION['err'] = "Unable to remove socail link from the websites";
		header("location: ../admin/?view=Social Links");
	}

	//delete eqnuiries
} else if (isset($_GET['delete_enquiries'])) {
	$delete_enquiries = SECURE($_GET['delete_enquiries'], "d");

	//check request validations
	if ($delete_enquiries == true) {
		$access_url = SECURE($_GET['access_url'], "d");
		$control_id = SECURE($_GET['control_id'], "d");
		$Delete = DELETE("DELETE FROM equiries where enquiryid='$control_id'");
		if ($Delete == TRUE) {
			$_SESSION['msg'] = "Enquiry is Deleted!";
			header("location: $access_url");
		} else {
			$_SESSION['err'] = "Unable to Delete Enquiry!";
			header("location: $access_url");
		}
	} else {
		$_SESSION['err'] = "Invalid Request!";
		header("location: $access_url");
	}

	//delete blogs
} elseif (isset($_GET['blogs'])) {
	$blog_id = $_GET['blogs'];
	$SQL = DELETE("DELETE FROM blogs where blog_id='$blog_id'");
	if ($SQL == true) {
		$_SESSION['msg'] = "Blog is Deleted!";
		header("location: ../admin/?view=Blogs");
	} else {
		$_SESSION['err'] = "Unable to delete verticales!";
		header("location: ../admin/?view=Blogs");
	}

	//delete Veritcals
} elseif (isset($_GET['Veritcals'])) {
	$vertical_id = $_GET['Veritcals'];
	$SQL = DELETE("DELETE FROM verticales where vertical_id='$vertical_id'");
	if ($SQL == true) {
		$_SESSION['msg'] = "Vertical is Deleted!";
		header("location: ../admin/?view=Blogs");
	} else {
		$_SESSION['err'] = "Unable to delete verticale!";
		header("location: ../admin/?view=Veritcals");
	}
}
