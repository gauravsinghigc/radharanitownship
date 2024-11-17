<section class="features5 cid-swlM0m3RmZ" id="features6-e">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12 text-center pb-4">
        <h1 class="heading card-title">Our Verticals</h1>
        <p>
          RealtyWalla.com is a real estate platform that provides listings,<br> property management, and market analysis for buyers, sellers, and investors.
        </p>
      </div>
      <?php
      $SelectServices = SELECT("SELECT * FROM verticales ORDER BY vertical_id  ASC");
      $CountServices = mysqli_num_rows($SelectServices);
      if ($CountServices != 0) {
        while ($FetchServices = mysqli_fetch_array($SelectServices)) { ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="bg-light p-2">
              <div class="img-fluid">
                <img src="<?php echo DOMAIN . "/storage/img/verticales/" .  $FetchServices['vertical_image']; ?>" style="height: 13.7rem;">
              </div>
              <div class="" style="height: 16.5rem !important;overflow: hidden;">
                <h2 class="pt-3 pb-3 display-6"><strong><?php echo $FetchServices['vertical_name']; ?></strong></h2>
                <p class="mbr-text mbr-fonts-style mb-3 display-4">
                  <?php
                  $ServiceDetails = $FetchServices['vertical_descriptions'];
                  $ReqDetails = SECURE("" . $ServiceDetails . "", "d");
                  echo  $ReqDetails; ?>
                </p>
              </div>
              <div class="mbr-section-btn hidden">
                <a href="project_details.php?id=<?php echo $FetchServices['ProjectsId']; ?>" class="btn btn-primary display-4">View Project</a>
              </div>
            </div>
          </div>
      <?php }
      } ?>

    </div>
  </div>
</section>