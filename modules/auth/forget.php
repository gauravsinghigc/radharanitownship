<!DOCTYPE html>
<html>

<head>
  <title>Recover Password | <?php echo CONFIG("APP_NAME"); ?></title>
  <?php HEADER_FILES(""); ?>
  <?php MetaTags($P = array("default", "index")); ?>
</head>

<body style="background-image: url('<?php echo $DOMAIN; ?>/assets/data/login-bg.gif');" class="bg-dark">
  <?php BODY_FILES(); ?>
  <section class="container-fluid pt-3">
    <div class="row pt-5">
      <div class="col-lg-4 col-md-6 col-sm-8 col-10 square bg-light d-block mx-auto shadow-sm p-3 mt-5">
        <h4 class="text-center mb-0 mt-4"><?php echo CONFIG("APP_NAME"); ?></h4>
        <h6 class="text-center mt-2">Admin Panel | Recover Password</h6>
        <hr>
        <form class="form p-2 mt-2" action="action/auth.php" method="POST">
          <div class="form-group">
            <p>Enter your registered mail id. we will sent Password Reset link on your registered mail id.</p>
          </div>
          <div class="form-group">
            <input type="email" name="EmailId" value="" oninput="CheckInputs()" class="form-control" required="" placeholder="Enter Your Mail Id">
          </div>
          <div class="form-group">
            <button type="submit" name="ForgetPassword" onclick="LoginClick()" id="LoginAction" class="btn btn-block bg-info form-control text-white square btn-p">Recover Password</button>
          </div>
          <div class="form-group w-100 text-right">
            <a href="?" class="bgn btn-link text-grey text-decoration-none">Know Password? Login Now</a>
          </div>
          <div class="form-group text-center">
            <p class="font-13 text-center text-black">
              Copyrighted &copy; All Right are Reserved by <?php echo CONFIG("APP_NAME"); ?><br><br>
              <span class="text-grey">Powered By <a href="<?php echo $DEV_URL; ?>" class="text-decoration-none text-grey"><?php echo $DEV_NAME; ?></a></span>
            </p>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php FOOTER_FILES(""); ?>
</body>

</html>