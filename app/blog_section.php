<section class="features5 cid-swlM0m3RmZ" id="features6-e">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12 text-center pb-4">
        <h1 class="heading card-title">Latest Blogs</h1>
        <p>Reallywalla provided up to date news and updates</p>
      </div>
      <?php
      $SelectServices = SELECT("SELECT * FROM blogs ORDER BY blog_id DESC limit 6");
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