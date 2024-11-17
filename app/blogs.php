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
  <title>Blogs | <?php echo CONFIG("APP_NAME"); ?></title>
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
  <section class="content5 cid-swlMFugAXk" id="content5-f" style="background-image:url('img/slider-background1.jpg') !important;">

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-11">
          <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
            <strong>Blogs | <?php echo CONFIG("APP_NAME"); ?></strong>
          </h3>
        </div>
      </div>
    </div>
  </section>
  <section class="features5 cid-swlM0m3RmZ" id="features6-e">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12 text-center pb-4">
          <h1 class="heading card-title">Latest Blogs</h1>
          <p>Reallywalla provided up to date news and updates</p>
        </div>
        <?php
        $SelectServices = SELECT("SELECT * FROM blogs ORDER BY blog_id DESC");
        $CountServices = mysqli_num_rows($SelectServices);
        if ($CountServices != 0) {
          while ($FetchServices = mysqli_fetch_array($SelectServices)) { ?>

            <div class="card col-12 col-lg-6 mb-3 mt-3">
              <div class="card-wrapper mbr-flex">
                <div class="card-box align-left">
                  <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                    <strong><?php echo $FetchServices['blog_title']; ?></strong>
                  </h5>
                  <p class="mbr-text mbr-fonts-style mb-3 display-4">
                    <?php
                    $ServiceDetails = $FetchServices['blog_description'];
                    $ReqDetails = SECURE("" . $ServiceDetails . "", "d");
                    echo  substr("$ReqDetails", 0, 150) . "..."; ?>
                  </p>
                  <div class="mbr-section-btn">
                    <a href="blog_details.php?id=<?php echo $FetchServices['blog_id']; ?>" class="btn btn-primary display-4">Know More...</a>
                  </div>
                </div>
                <div class="img-wrapper img2 align-center" style="background-image:url('<?php echo $FetchServices['blog_feature_image']; ?>');">
                  <img src="<?php echo DOMAIN . "/storage/img/blogs/" . $FetchServices['blog_feature_image']; ?>">
                </div>
              </div>
            </div>

        <?php }
        } ?>



      </div>
    </div>
  </section>
  <?php
  include 'contact_form.php';
  include 'follow.php';
  ?>

  <?php
  include 'footer.php';
  include 'scripts.php'; ?>
</body>

</html>