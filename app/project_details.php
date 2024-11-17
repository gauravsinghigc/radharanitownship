<?php
require '../config.php';
if (isset($_GET['id'])) {
  $Id = $_GET['id'];
  $_SESSION['ids'] = $Id;
} else {
  $Id = $_SESSION['ids'];
}
$SelectServices = SELECT("SELECT * FROM projects where Status='1' and ProjectsId='$Id'");
$CountServices = mysqli_num_rows($SelectServices);
$FetchServices = mysqli_fetch_array($SelectServices); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Gauravsinghigc, App Version <?php echo CONFIG("APP_VERSION"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title><?php echo $FetchServices['ProjectsTitle']; ?> | <?php echo CONFIG("APP_NAME"); ?></title>
  <?php include 'header_files.php'; ?>
  <style>
    p {
      font-size: calc(1.07rem + (1.2 - 1.07) * ((100vw - 20rem) / (48 - 20))) !important;
      line-height: calc(1.4 * (1.07rem + (1.2 - 1.07) * ((100vw - 20rem) / (48 - 20)))) !important;
    }
  </style>
</head>

<body>
  <?php include 'header.php'; ?>
  <section class="content5 cid-swlMFugAXk" id="content5-f">

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-11">
          <a href="<?php echo DOMAIN . "/storage/img/projects/" . $FetchServices['ProjectsImg']; ?>" target="blank">
            <img src="<?php echo DOMAIN . "/storage/img/projects/" . $FetchServices['ProjectsImg']; ?>" class="img-fluid">
          </a>

          <a href="<?php echo $FetchServices['ProjectsImg']; ?>" class="btn btn-primary btn-md mb-0" download="<?php echo $FetchServices['ProjectsImg']; ?>" target="blank">
            <i class="fa fa-download mr-1"></i> Download
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="content5">
    <div class="container-fluid">
      <div class="row pl-3 pr-3">
        <div class="col-md-11 col-11 text-justify d-block mx-auto pt-4 pb-5">
          <h3 class="mbr-section-title mbr-fonts-style mb-3 display-2 pt-4 pb-2">
            <strong><?php echo $FetchServices['ProjectsTitle']; ?> <br><small>By
                <?php echo CONFIG("APP_NAME"); ?></small></strong>
          </h3>
          <?php echo SECURE("" . $FetchServices['ProjectsDesc'] . "", "d"); ?>

        </div>
      </div>
    </div>
  </section>

  <?php
  include 'contact_query.php';
  include 'follow.php';
  ?>

  <?php
  include 'footer.php';
  include 'scripts.php'; ?>
</body>

</html>