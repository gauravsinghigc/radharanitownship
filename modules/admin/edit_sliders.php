<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 col-12">
          <h3 class="m-0">
            Edit Slider
          </h3>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <?php
  $Select = SELECT("SELECT * from sliders where sliderid='" . $_GET['edit'] . "'");
  $Fetch = mysqli_fetch_array($Select); ?>
  <section class="container-fluid">
    <div class="row p-3 pt-0">
      <div class="card">
        <form action="../action/update.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="ServiceTitle"> Slider Title</label>
            <input type="text" name="slidertitle" class="form-control" value="<?php echo $Fetch['slidertitle']; ?>" required="">
          </div>
          <div class="form-group row">
            <div class="col-sm-8 col-8">
              <input type="text" name="C_sliderimg" value="<?php echo $Fetch['sliderimg']; ?>" class="form-control" hidden="">
              <label for="ServiceImg"> Slider Image</label>
              <input type="FILE" name="sliderimg" class="form-control">
            </div>
            <div class="col-sm-4 col-4">
              <img src="<?php echo DOMAIN; ?>/storage/img/slider/<?php echo $Fetch['sliderimg']; ?>" class="img-fluid w-pr-60">
            </div>
          </div>
          <div class="form-group">
            <label for="sliderdesc">Slider Description</label>
            <textarea name="sliderdesc" class="form-control" id="editor" rows="10"><?php echo SECURE("" . $Fetch['sliderdesc'] . "", "d"); ?></textarea>
          </div>
          <div class="modal-footer justify-content-right">
            <a href="?view=Sliders" class="btn btn-secondary btn-md">
              Back to Sliders
            </a>
            <button type="Submit" Name="UpdateSliders" value="<?php echo $Fetch['sliderid']; ?>" class="btn btn-primary square">Update Slider</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- /.card -->