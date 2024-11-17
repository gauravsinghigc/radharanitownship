<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 col-12">
          <h3 class="m-0">
            About Us Page
          </h3>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <?php 
 $Select = SELECT("SELECT * from pages where PagesId='2'");
 $Fetch = mysqli_fetch_array($Select); ?>
  <section class="container-fluid">
    <div class="row p-3 pt-0">
      <div class="card">
        <form action="../action/update.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="ServiceTitle"> Page Title</label>
            <input type="text" name="PageTitle" class="form-control" value="<?php echo $Fetch['PageTitle'];?>"
              readonly="">
          </div>
          <div class="form-group row">
            <div class=" form-group">
              <label for="PageDesc">Page Description</label>
              <textarea name="PageDesc" class="form-control" id="editor"
                rows="10"><?php echo SECURE("".$Fetch['PageDesc']."", "d");?></textarea>
            </div>
            <div class="modal-footer justify-content-right">
              <button type="Submit" Name="UpdatePage" value="<?php echo $Fetch['PagesId'];?>"
                class="btn btn-primary square">Update Page</button>
            </div>
        </form>
      </div>
    </div>
  </section>
  <!-- /.card -->
