<style>
  .carousel-caption {
    text-align: left !important;
    background: #2c61339c !important;
    padding: 4% !important;
    bottom: 10rem !important;
  }

  @media (max-width: 767px) {
    .cid-swlLsUSZnA .carousel-control {
      bottom: 33rem !important;
    }

    .carousel-caption {
      text-align: left !important;
      background: #2c61339c !important;
      padding: 4% !important;
      bottom: 25rem !important;
    }

  }

  .cid-swlLsUSZnA .carousel-control {
    width: 50px !important;
    height: 50px !important;
  }

  .mbr-fullscreen {
    min-height: fit-content !important;
  }

  .cid-swlLsUSZnA .carousel-control.carousel-control-next {
    margin-right: 0.5rem !important;
  }

  .cid-swlLsUSZnA .carousel-control.carousel-control-prev {
    margin-left: 0.5rem !important;
  }
</style>
<section class="slider1 cid-swlLsUSZnA mbr-fullscreen" id="slider1-9">
  <div class="carousel slide" id="swlOPsMLRV" data-ride="carousel" data-interval="4000">
    <ol class="carousel-indicators">
      <?php
      $SelectSlider = SELECT("SELECT * FROM sliders where Status='1'");
      $CountSliders = mysqli_num_rows($SelectSlider);
      $Count = 0;
      if ($CountSliders != 0) {
        while ($FetchSliders = mysqli_fetch_array($SelectSlider)) {
          if ($Count == 0) {
            $active = "active";
          } else {
            $active = "";
          } ?>
          <li data-slide-to="<?php echo $Count; ?>" class="<?php echo $active; ?>"></li>
      <?php $Count++;
        }
      }
      ?>
    </ol>
    <div class="carousel-inner">
      <?php
      $SelectSlider = SELECT("SELECT * FROM sliders where Status='1'");
      $CountSliders = mysqli_num_rows($SelectSlider);
      $Count = 0;
      if ($CountSliders != 0) {
        while ($FetchSliders = mysqli_fetch_array($SelectSlider)) {
          $Count++;
          if ($Count == 1) {
            $active = "active";
          } else {
            $active = "";
          } ?>

          <div class="carousel-item slider-image item <?php echo $active; ?>">
            <div class="item-wrapper">
              <img class="d-block w-100" src="<?php echo DOMAIN; ?>/storage/img/slider/<?php echo $FetchSliders['sliderimg']; ?>" alt='<?php echo $FetchSliders['slidertitle']; ?>' title='<?php echo $FetchSliders['slidertitle']; ?>'>
            </div>
          </div>
      <?php }
      }
      ?>

    </div>
    <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#swlOPsMLRV">
      <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#swlOPsMLRV">
      <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>