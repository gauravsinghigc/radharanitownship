<?php
require '../config.php';
USER_SESSION_CHECK("../login.php", ""); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php if (isset($_GET['view']) or isset($_GET['view']) != null) {
      echo $_GET['view'];
    } else {
      echo "Dashboard";
    } ?> |
    <?php echo CONFIG("APP_NAME"); ?></title>
  <?php HEADER_FILES("..");
  HEADER_SCRIPTS(); ?>
  <?php require '../modules/admin/header_files.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <?php BODY_FILES(); ?>
  <div class="wrapper">
    <?php
    require '../modules/admin/loader.php';
    require '../modules/admin/top_navbar.php';
    require '../modules/admin/left_sidebar.php';
    ?>
    <?php

    //get all url request for page access
    if (isset($_GET['view'])) {

      //profile
      if ($_GET['view'] == "Profile") {
        include '../modules/admin/profile.php';

        //services
      } elseif ($_GET['view'] == "Services") {
        if (isset($_GET['edit'])) {
          include '../modules/admin/edit_services.php';
        } else {
          include '../modules/admin/services.php';
        }

        //projects
      } elseif ($_GET['view'] == "Projects") {
        if (isset($_GET['edit'])) {
          include '../modules/admin/edit_projects.php';
        } else {
          include '../modules/admin/projects.php';
        }

        //homepage
      } elseif ($_GET['view'] == "HomePage") {
        include '../modules/admin/homepage.php';

        //company profile
      } elseif ($_GET['view'] == "CompanyProfile") {
        include '../modules/admin/companyprofile.php';

        //sliders
      } elseif ($_GET['view'] == "Sliders") {
        if (isset($_GET['edit'])) {
          include '../modules/admin/edit_sliders.php';
        } else {
          include '../modules/admin/sliders.php';
        }

        //contact details
      } else if ($_GET['view'] == "ContactDetails") {
        include "../modules/admin/contacts.php";

        //social account settings
      } else if ($_GET['view'] == "Social Links") {
        include "../modules/admin/links.php";

        //enquiries
      } else if ($_GET['view'] == "Enquiry") {
        include '../modules/admin/enquiry.php';

        //erros or page not found!
      } elseif ($_GET['view'] == null or $_GET['view'] == "") {
        ERROR("Page Not Found!", "../modules/error.php");

        //cv received pages
      } else if ($_GET['view'] == "CV Received") {
        include '../modules/admin/cv_received.php';

        //blogs
      } else if ($_GET['view'] == "Blogs") {
        if (isset($_GET['edit'])) {
          include '../modules/admin/edit_blogs.php';
        } else {
          include '../modules/admin/blogs.php';
        }

        //verticales
      } else if ($_GET['view'] == "Veritcals") {
        if (isset($_GET['edit'])) {
          include '../modules/admin/edit_verticales.php';
        } else {
          include '../modules/admin/verticales.php';
        }

        //page not found!
      } else {
        ERROR("Page Not Found!", "../modules/error.php");
      }

      //dashboard
    } else {
      include '../modules/admin/dashboard.php';
    }

    //include all footr files
    require '../modules/admin/footer.php';
    require '../modules/admin/footer_files.php';
    ?>
    <?php FOOTER_FILES(".."); ?>
</body>

</html>