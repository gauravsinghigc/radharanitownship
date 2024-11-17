<?php 
require '../config.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Gauravsinghigc, App Version <?php echo CONFIG("APP_VERSION");?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Services | <?php echo CONFIG("APP_NAME");?></title>
  <?php include 'header_files.php';?>
  <style>
  p {
    font-size: calc(1.07rem + (1.2 - 1.07) * ((100vw - 20rem) / (48 - 20))) !important;
    line-height: calc(1.4 * (1.07rem + (1.2 - 1.07) * ((100vw - 20rem) / (48 - 20)))) !important;
  }

  </style>
</head>

<body>
  <?php include 'header.php'; ?>
  <section class="content5 cid-swlMFugAXk" id="content5-f"
    style="background-image:url('img/slider-background1.jpg') !important;">

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-11">
          <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
            <strong>Services | <?php echo CONFIG("APP_NAME");?></strong>
          </h3>
        </div>
      </div>
    </div>
  </section>

  <?php
include 'serv_section.php';
include 'contact_form.php';
include 'follow.php';
?>

  <?php 
include 'footer.php';
include 'scripts.php';?>
</body>

</html>
