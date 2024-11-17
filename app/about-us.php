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
  <title>About Us | <?php echo CONFIG("APP_NAME"); ?></title>
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
  <section class="content5 cid-swlMFugAXk" id="content5-f" style="background-image: url('img/contact-us-background.png');padding-top: 4rem;">

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12 pl-1 pr-1 mt-5">
          <div style="padding-top:3rem !important;background-color: #2c5d2c47;" class="p-3">
            <h3 class="mbr-section-title text-white mbr-fonts-style mb-2 display-2">
              <strong>About | <?php echo CONFIG("APP_NAME"); ?></strong>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="content5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-12 text-justify pt-4">
          <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">
            Company Profile
          </h4>
          <p class="mbr-text mbr-fonts-style display-7">
            <?php
            $Select = SELECT("SELECT * FROM pages where PageTitle='CompanyProfile'");
            $Fetch = mysqli_fetch_array($Select);
            $HomePageIntro = $Fetch['PageDesc'];
            echo SECURE("$HomePageIntro", "d"); ?>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">
            Why <?php echo CONFIG("APP_NAME"); ?>
          </h4>
        </div>

        <div class="col-md-3">
          <h4>Analysis</h4>
          <ul>
            <li> Understand the client – Business Objectives</li>
            <li> Regulatory issues of real estate and new notifications</li>
            <li> Client perception and needs – Location / Accessibility / Pricing</li>
            <li> Analysis of Demand vs. Supply - Price forecast, infrastructure
              bottlenecks, catchments</li>
            <li> Understand competencies and standards – Building/ Project Specification</li>
          </ul>
        </div>

        <div class='col-md-3'>
          <h4>Create & Develop</h4>
          <ul>
            <li>  Market Research</li>
            <li>  Propose Properties as per the analysis</li>
            <li>  Dedicate resources – team</li>
            <li>  Budget Parameters – Pricing v/s Supply</li>
            <li>  Define Timelines – Construction Schedule</li>
          </ul>
        </div>

        <div class='col-md-3'>
          <h4>IMPLEMENT</h4>
          <ul>
            <li>Site inspections</li>
            <li>Short-listing the Properties</li>
            <li>Negotiation as per the client’s Term Sheet</li>
            <li>Meet Budget Parameters & Timelines of the Client</li>
            <li>Deliver measurable results</li>
          </ul>
        </div>

        <div class='col-md-3'>
          <h4>MONITOR & EVALUATE</h4>
          <ul>
            <li> Documentation check list : Title check, Ownership proofs</li>
            <li> Assisting in Registration and procuring of stamp papers</li>
            <li> Monitoring the landlord’s deliverables till the date of possession</li>
            <li> Maintain relations between/ with the client and the landlord</li>
            <li> Client feedback & responses</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">GEOGRAPHICAL REACH</h4>
        </div>

        <div class="col-md-12">
          <img src="<?php echo DOMAIN; ?>/storage/reach.png" class='img-fluid'>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5 mt-5">WE ARE KNOWN FOR</h4>
        </div>
        <div class="col-md-12">
          <ul>
            <li> Up-to-date information on property developers and
              market trends.</li>
            <li> Customized solutions according to variations in client’s
              needs and objectives</li>
            <li> Widespread and well-informed network</li>
            <li> Rendering consistent and professional service at every stage</li>
            <li> Complete support for legal formalities, including title
              deed and lease documentation</li>

          </ul>
        </div>
      </div>

      <div class="row">
        <div class='col-md-12 text-center'>
          <h4 class="mbr-section-subtitle mbr-fonts-style mb-0 display-5 mt-5">
            LEADERSHIP COMMITMENT
          </h4>
          <p class="mb-5">
            The driving force behind RealtyWalla ’vision, growth, unsurpassed
            services and transparent approach
          </p>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-3 col-xs-4 col-4">
              <img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" class="img-fluid">
            </div>
            <div class="col-md-9 col-xs-8 col-8">
              <h4>Mr. VAIBHAV SHUKLA</h4>
              <p>Vaibhav is having 10+ years of experience in
                real estate sectors, his area of expertise is to
                work with Co-live companies for B2B
                business and hotel industry as well, also
                deal with office space clients as well.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-3 col-xs-4 col-4">
              <img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" class="img-fluid">
            </div>
            <div class="col-md-9 col-xs-8 col-8">
              <h4>Mr. MUKUL KUMAR</h4>
              <p>
                Mukul is having 16+ years of professional
                experience in real estate sector only, he has
                worked with company like
                allcheckdeals.com(Naukri.com venture). 99acres,
                Proptiger, Nestaway, Squareyards, Eqaro at Sr.
                level, He is an MBA from IMS Dehradun.
              </p>
            </div>
          </div>
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
  include 'scripts.php'; ?>
</body>

</html>