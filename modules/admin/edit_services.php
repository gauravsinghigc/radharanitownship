<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 col-12">
          <h3 class="m-0">
            Edit Services
          </h3>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <?php
  $Select = SELECT("SELECT * from services where ServicesId='" . $_GET['edit'] . "'");
  $Fetch = mysqli_fetch_array($Select); ?>
  <section class="container-fluid">
    <div class="row p-3 pt-0">
      <div class="card">
        <form action="../action/update.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="ServiceTitle"> Service Title</label>
            <input type="text" name="ServiceTitle" class="form-control" value="<?php echo $Fetch['ServiceTitle']; ?>" required="">
          </div>
          <div class="form-group row">
            <div class="col-sm-8 col-8">
              <input type="text" name="C_ServiceImg" value="<?php echo $Fetch['ServiceImg']; ?>" class="form-control" hidden="">
              <label for="ServiceImg"> Service Image</label>
              <input type="FILE" name="ServiceImg" class="form-control">
            </div>
            <div class="col-sm-4 col-4">
              <img src="<?php echo DOMAIN . "/storage/img/services/" . $Fetch['ServiceImg']; ?>" class="img-fluid w-pr-60">
            </div>
          </div>
          <div class=" form-group">
            <label for="ServiceDesc">Service Description</label>
            <textarea name="ServiceDesc" class="form-control" id="editor" rows="10"><?php echo SECURE("" . $Fetch['ServiceDesc'] . "", "d"); ?></textarea>
          </div>
          <div class="modal-footer justify-content-right">
            <a href="?view=Services" class="btn btn-secondary btn-md">
              Back to Services
            </a>
            <button type="Submit" Name="UpdateServices" value="<?php echo $Fetch['ServicesId']; ?>" class="btn btn-primary square">Update Service</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- /.card -->