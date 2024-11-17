<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">
            <?php if (isset($_GET['view']) or isset($_GET['view']) != null) {
              echo $_GET['view'];
            } else {
              echo "Dashboard";
            } ?>
          </h4>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="container-fluid">
    <div class="row p-3">
      <div class="col-lg-3 col-md-3 col-sm-4 col-4 p-2">
        <a href="?view=Projects">
          <div class="bg-info p-2 square">
            <h1><?php echo TOTAL("SELECT * FROM projects"); ?></h1>
            <p>Total Projects</p>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-4 col-4 p-2">
        <a href="?view=Services">
          <div class="bg-info-light p-2 square">
            <h1><?php echo TOTAL("SELECT * FROM services"); ?></h1>
            <p>Total Services</p>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-4 col-4 p-2">
        <a href="?view=Enquiry">
          <div class="bg-success p-2 square">
            <h1><?php echo TOTAL("SELECT * FROM equiries"); ?></h1>
            <p>Total Enquiries</p>
          </div>
        </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-4 col-4 p-2">
        <a href="?view=CV Received">
          <div class="bg-success p-2 square">
            <h1><?php echo TOTAL("SELECT * FROM resumes"); ?></h1>
            <p>Total CV Received</p>
          </div>
        </a>
      </div>



    </div>
  </section>