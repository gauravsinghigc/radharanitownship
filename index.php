<?php
require 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Gauravsinghigc, App Version <?php echo CONFIG("APP_VERSION"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Home | <?php echo CONFIG("APP_NAME"); ?></title>
  <?php include 'app/header_files.php'; ?>
</head>

<body>
  <?php BODY_FILES(); ?>
  <?php include 'app/header.php';
  include 'app/slider.php';
  include 'app/intro.php';
  include 'app/ver_section.php';
  include 'app/pro_section.php';
  include 'app/serv_section.php';
  include 'app/blog_section.php';
  include 'app/contact_query.php';
  include 'app/follow.php';
  ?>

  <?php
  include 'app/footer.php';
  include 'app/scripts.php'; ?>
</body>

</html>