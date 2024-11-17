<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 col-12">
          <h3 class="m-0">
            Edit Projects
          </h3>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <?php
  $Select = SELECT("SELECT * from projects where ProjectsId='" . $_GET['edit'] . "'");
  $Fetch = mysqli_fetch_array($Select); ?>
  <section class="container-fluid">
    <div class="row p-3 pt-0">
      <div class="card">
        <form action="../action/update.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="ServiceTitle"> Vertical title</label>
            <input type="text" name="ProjectsTitle" class="form-control" value="<?php echo $Fetch['ProjectsTitle']; ?>" required="">
          </div>
          <div class="form-group row">
            <div class="col-sm-8 col-8">
              <input type="text" name="C_ProjectsImg" value="<?php echo $Fetch['ProjectsImg']; ?>" class="form-control" hidden="">
              <label for="ServiceImg"> Projects Image</label>
              <input type="FILE" name="ProjectsImg" class="form-control">
            </div>
            <div class="col-sm-4 col-4">
              <img src="<?php echo DOMAIN; ?>/storage/img/projects/<?php echo $Fetch['ProjectsImg']; ?>" class="img-fluid w-pr-60">
            </div>
          </div>
          <div class=" form-group">
            <label for="ServiceDesc">Projects Description</label>
            <textarea name="ProjectsDesc" class="form-control" id="editor" rows="10"><?php echo SECURE("" . $Fetch['ProjectsDesc'] . "", "d"); ?></textarea>
          </div>
          <div class="modal-footer justify-content-right">
            <a href="?view=Projects" class="btn btn-secondary btn-md">
              Back to Projects
            </a>
            <button type="Submit" Name="UpdateProjects" value="<?php echo $Fetch['ProjectsId']; ?>" class="btn btn-primary square">Update Projects</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- /.card -->