<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 col-12">
          <h3 class="m-0">
            Edit Blogs
          </h3>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <?php
  $Select = SELECT("SELECT * from blogs where blog_id='" . $_GET['edit'] . "'");
  $Fetch = mysqli_fetch_array($Select); ?>
  <section class="container-fluid">
    <div class="row p-3 pt-0">
      <div class="card">
        <form action="../action/update.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="ServiceTitle"> Blog Title</label>
            <input type="text" name="blog_title" class="form-control" value="<?php echo $Fetch['blog_title']; ?>" required="">
          </div>
          <div class="form-group row">
            <div class="col-sm-8 col-8">
              <input type="text" name="C_ServiceImg" value="<?php echo $Fetch['blog_feature_image']; ?>" class="form-control" hidden="">
              <label for="ServiceImg"> Feature Image</label>
              <input type="FILE" name="blog_feature_image" class="form-control">
            </div>
            <div class="col-sm-4 col-4">
              <img src="<?php echo DOMAIN . "/storage/img/blogs/" . $Fetch['blog_feature_image']; ?>" class="img-fluid w-pr-60">
            </div>
          </div>
          <div class=" form-group">
            <label for="ServiceDesc">Blogs Description</label>
            <textarea name="blog_description" class="form-control" id="editor" rows="10"><?php echo SECURE("" . $Fetch['blog_description'] . "", "d"); ?></textarea>
          </div>
          <div class="modal-footer justify-content-right">
            <a href="?view=Blogs" class="btn btn-secondary btn-md">
              Back to Blogs
            </a>
            <button type="Submit" Name="UpdateBlogs" value="<?php echo $Fetch['blog_id']; ?>" class="btn btn-primary square">Update Blogs</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- /.card -->