<?php
require '../config.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Gauravsinghigc, App Version <?php echo CONFIG("APP_VERSION"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Home | <?php echo CONFIG("APP_NAME"); ?></title>
  <?php include 'header_files.php'; ?>
</head>

<body>
  <?php BODY_FILES(); ?>
  <?php include 'header.php';
  include 'slider.php';
  include 'intro.php';
  include 'serv_section.php';
  include 'contact_query.php';
  include 'follow.php';
  ?>

  <?php
  include 'footer.php';
  include 'scripts.php'; ?>
</body>

</html>