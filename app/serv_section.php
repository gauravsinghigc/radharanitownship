<section class="features5 cid-swlM0m3RmZ" id="features6-e">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12 text-center pb-4">
        <h1 class="heading card-title">Our Services</h1>
        <p>RealtyWalla is one of India’s leading Residential Sales & Space leasing company<br>
          specializing in diverse service-portfolios including :</p>
      </div>
      <?php
      $SelectServices = SELECT("SELECT * FROM services where Status='1'");
      $CountServices = mysqli_num_rows($SelectServices);
      if ($CountServices != 0) {
        while ($FetchServices = mysqli_fetch_array($SelectServices)) { ?>

          <div class="card col-12 col-lg-6 mb-3 mt-3">
            <div class="card-wrapper mbr-flex">
              <div class="card-box align-left">
                <h5 class="card-title mbr-fonts-style align-left mb-3 display-5">
                  <strong><?php echo $FetchServices['ServiceTitle']; ?></strong>
                </h5>
                <p class="mbr-text mbr-fonts-style mb-3 display-4">
                  <?php
                  $ServiceDetails = $FetchServices['ServiceDesc'];
                  $ReqDetails = SECURE("" . $ServiceDetails . "", "d");
                  echo  substr("$ReqDetails", 0, 150) . "..."; ?>
                </p>
                <div class="mbr-section-btn">
                  <a href="service_details.php?id=<?php echo $FetchServices['ServicesId']; ?>" class="btn btn-primary display-4">Know More...</a>
                </div>
              </div>
              <div class="img-wrapper img2 align-center" style="background-image:url('<?php echo $FetchServices['ServiceImg']; ?>');">
                <img src="<?php echo DOMAIN . "/storage/img/services/" . $FetchServices['ServiceImg']; ?>">
              </div>
            </div>
          </div>

      <?php }
      } ?>



    </div>
  </div>
</section>