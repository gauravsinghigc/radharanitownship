<style>
  a[class*="text-"]:not(.nav-link):not(.dropdown-item):not([role]):not(.navbar-caption) {
    background-image: none !important;
  }
</style>
<section class="footer3 cid-swlKRVy3sM" once="footers" id="footer3-8">
  <div class="container-fluid">
    <div class="media-container-row align-center mbr-white">
      <div class="row row-links">
        <ul class="foot-menu">
          <li class="foot-menu-item mbr-fonts-style display-8 text-decoration-none">
            <a class="text-white text-decoration-none" style="text-decoration: none !important;" href="<?php echo DOMAIN; ?>">Home</a>
          </li>
          <li class="foot-menu-item mbr-fonts-style display-8">
            <a class="text-white" href="<?php echo DOMAIN; ?>/app/about-us.php">About us</a>
          </li>
          <li class="foot-menu-item mbr-fonts-style display-8">
            <a class="text-white" href="<?php echo DOMAIN; ?>/app/services.php">Services</a>
          </li>
          <li class="foot-menu-item mbr-fonts-style display-8">
            <a class="text-white" href="<?php echo DOMAIN; ?>/app/projects.php">Projects</a>
          </li>
          <li class="foot-menu-item mbr-fonts-style display-8">
            <a class="text-white" href="<?php echo DOMAIN; ?>/app/career.php">Career</a>
          </li>
          <li class="foot-menu-item mbr-fonts-style display-8">
            <a class="text-white" href="<?php echo DOMAIN; ?>/app/contact-us.php">Contact Us</a>
          </li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <p class="display-8" style="font-size: 1rem !important;"><i class="fa fa-map-marker"></i>
            <?php echo CONFIG("APP_ADDRESS"); ?> | <i class="fa fa-phone"></i> <?php echo CONFIG("APP_PHONE"); ?></p>
        </div>
      </div>

      <div class="row row-copirayt">
        <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-8" style="font-size: 1rem !important;">
          © Copyright <?php echo DATE("Y"); ?> <?php echo CONFIG("APP_NAME"); ?>. All Rights Reserved.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="enquiry-form bg-light pb-3" style="position: fixed;
    bottom: 7.5rem;
    background-color: white !important;
    width: 70% !important;
    z-index: 1111111;
    right: 1%;
    min-width: 260px;
    max-width: 350px;
    box-shadow: 0px 0px 5px grey !important;
    display:none;" id="QueryForm">
  <div class="eqnuiry-form-area">
    <div class="heading p-3 pt-4 pb-3 bg-info text-white">
      <h3>Send your Queries</h3>
    </div>
    <div class="form p-3">
      <form class="form" action="../action/insert.php" method="POST">
        <div class="form-group mt-1 mb-1">
          <input type="text" name="FullName" class="form-control" required="" placeholder="Enter Your Full Name">
        </div>
        <div class="form-group mt-1 mb-1">
          <input type="text" name="phone" class="form-control" required="" placeholder="+91">
        </div>
        <div class="form-group mt-1 mb-1">
          <input type="text" name="email" class="form-control" placeholder="Email Id">
        </div>
        <div class="form-group mt-1 mb-1">
          <select class="form-control" name="type" required="">
            <option value="Residential Flat">Residential Flat</option>
            <option value="Residential plot">Residential plots</option>
            <option value="Commerical office">Commerical office</option>
            <option value="Commerical retail">Commerical retail</option>
            <option value="Hotels">Hotels</option>
          </select>
        </div>
        <div class="form-group mt-1 mb-1">
          <textarea type="text" name="message" class="form-control" placeholder="Enter Your Query" rows=2></textarea>
        </div>
        <div class="form-group mt-1 mb-1">
          <button type="submit" name="ContactForm" class="btn btn-sm btn-primary form-control">Send Query</button>
        </div>
      </form>
    </div>
  </div>
</section>

<a class="btn btn-primary" style="position: fixed;
    z-index: 1111111;
    bottom: 5rem;
    right: 0.2%;
    cursor:pointer;" onclick="ShowForm()" id="formtext">Have an Query?</a>
<script>
  function ShowForm() {
    var QueryForm = document.getElementById("QueryForm");
    if (QueryForm.style.display == "none") {
      QueryForm.style.display = "block";
      document.getElementById("formtext").innerHTML = "Close";
      document.getElementById("formtext").classList.remove("btn-primary");
      document.getElementById("formtext").classList.add("btn-danger");
    } else {
      QueryForm.style.display = "none";
      document.getElementById("formtext").innerHTML = "Have an Query?";
      document.getElementById("formtext").classList.remove("btn-danger");
      document.getElementById("formtext").classList.add("btn-primary");
    }
  }
</script>
<style type="text/css">
  .float {
    position: fixed !important;
    width: 40px;
    height: 40px;
    bottom: 0.5rem;
    right: 15px;
    background-color: red;
    color: #FFF;
    border-radius: 50%;
    text-align: center;
    font-size: 15px;
    box-shadow: 2px 2px 3px #999;
    z-index: 100;
  }

  .float_w {
    position: fixed;
    width: 13.5rem;
    bottom: 0.5rem;
    right: 0.5rem;
    color: #FFF;
    border-radius: 50%;
    text-align: center;
    font-size: 15px;
    z-index: 100;
  }

  .my-float {
    margin-top: 13px;
  }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="whatsapp://send?phone=91<?php echo CONFIG("APP_PHONE"); ?>&text=Hey <?php echo CONFIG("APP_NAME"); ?>" data-action="share/whatsapp/share" title="Share on whatsapp" class="float_w" target="_blank">
  <span>
    <img src="https://1.bp.blogspot.com/-VaIh0KD5xFM/X8kI4Ju4tfI/AAAAAAAAArI/kIq_P3PsvK8wP-3GnVghzydQWupXUsjkACLcBGAsYHQ/s16000/TVS-Whats-app-Chat.gif" class="my-float">
  </span>
</a>
<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: none;">
  <a href="https://mobirise.site/l" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
  <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Created with Mobirise - <a href="https://mobirise.site/k" style="color:#aaa;">Try it</a></p>
</section>