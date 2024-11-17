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
 <title>Career | <?php echo CONFIG("APP_NAME"); ?></title>
 <?php include 'header_files.php'; ?>
 <style>
  p {
   font-size: calc(1.07rem + (1.2 - 1.07) * ((100vw - 20rem) / (48 - 20))) !important;
   line-height: calc(1.4 * (1.07rem + (1.2 - 1.07) * ((100vw - 20rem) / (48 - 20)))) !important;
  }
 </style>
</head>

<body>
 <?php include 'header.php';
 BODY_FILES(); ?>
 <section class="content4 cid-swlOyo6IEd" id="content4-q" style="background-image:url('<?php echo CONFIG("DOMAIN"); ?>/app/img/Portfolio-Career.jpg');">
  <div class="container">
   <div class="row">
    <div class="title col-md-12 col-lg-12" style="padding: 3%;">

    </div>
   </div>
  </div>
 </section>

 <section class="form5 cid-swlOvWpUck">
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-12 text-center">
     <h3 class="mbr-section-title mbr-fonts-style align-left mb-4 display-2">
      <strong>Work With Us | <?php echo CONFIG("APP_NAME"); ?></strong>
     </h3>
     <h4 class="mbr-section-subtitle align-left mbr-fonts-style mb-0 display-5">
      We are continuesly looking for talented people to join our team. If you are interested in joining our team, please fill the form below.
     </h4>
    </div>
   </div>
  </div>
 </section>

 <section class="form5 cid-swlOvWpUck pt-0" id="form5-p">
  <div class="container">
   <div class="row justify-content-center mt-0">
    <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
     <h1>Submit Your CV</h1>
     <p>Hiring are always open, Submit your CV. We will contact you as soon as possible!</p>
     <hr>
     <form action="../action/insert.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="cr_url" value="<?php echo get_url(); ?>">
      <div class="form-group">
       <label>Full Name</label>
       <input type="text" name="FullName" class="form-control" required="">
      </div>
      <div class="form-group">
       <label>Phone Number</label>
       <input type="phone" name="PhoneNumber" class="form-control" required="">
      </div>
      <div class="form-group">
       <label>Eamil-ID</label>
       <input type="email" name="EmailId" class="form-control" required="">
      </div>
      <div class="form-group">
       <label>Subject</label>
       <input type="text" name="Subject" class="form-control" required="">
      </div>
      <div class="form-group">
       <label>Message</label>
       <textarea name="Message" rows="5" class="form-control"></textarea>
      </div>
      <div class="form-group">
       <label>Upload CV</label>
       <input name="Attachement" type="FILE" accept="" class="form-control" required="">
      </div>
      <div class="form-group m-t-10">
       <button type="submit" name="SubmitCVDetails" class="btn btn-lg btn-success" value="Submit Enquiry">Submit Details</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </section>
 <?php
 include 'follow.php';
 ?>

 <?php
 include 'footer.php';
 include 'scripts.php'; ?>
</body>

</html>