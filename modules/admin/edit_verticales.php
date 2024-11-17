<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 col-12">
          <h3 class="m-0">
            Edit Verticales
          </h3>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <?php
  $Select = SELECT("SELECT * from verticales where vertical_id='" . $_GET['edit'] . "'");
  $Fetch = mysqli_fetch_array($Select); ?>
  <section class="container-fluid">
    <div class="row p-3 pt-0">
      <div class="card">
        <form action="../action/update.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="ServiceTitle">Title</label>
            <input type="text" name="vertical_name" class="form-control" value="<?php echo $Fetch['vertical_name']; ?>" required="">
          </div>
          <div class="form-group row">
            <div class="col-sm-8 col-8">
              <input type="text" name="C_ServiceImg" value="<?php echo $Fetch['vertical_image']; ?>" class="form-control" hidden="">
              <label for="ServiceImg">Image</label>
              <input type="FILE" name="vertical_image" class="form-control">
            </div>
            <div class="col-sm-4 col-4">
              <img src="<?php echo DOMAIN . "/storage/img/verticales/" . $Fetch['vertical_image']; ?>" class="img-fluid w-pr-60">
            </div>
          </div>
          <div class=" form-group">
            <label for="ServiceDesc">Description</label>
            <textarea name="vertical_descriptions" class="form-control" id="editor" rows="10"><?php echo SECURE("" . $Fetch['vertical_descriptions'] . "", "d"); ?></textarea>
          </div>
          <div class="modal-footer justify-content-right">
            <a href="?view=Veritcals" class="btn btn-secondary btn-md">
              Back to Verticales
            </a>
            <button type="Submit" Name="UpdateVerticales" value="<?php echo $Fetch['vertical_id']; ?>" class="btn btn-primary square">Update Verticales</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- /.card -->