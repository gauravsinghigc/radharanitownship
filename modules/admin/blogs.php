<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 col-6">
          <h3 class="m-0">
            <?php if (isset($_GET['view']) or isset($_GET['view']) != null) {
              echo $_GET['view'];
            } else {
              echo "Dashboard";
            } ?>
          </h3>
        </div><!-- /.col -->
        <div class="col-sm-6 text-right col-6">
          <a href="#" class="btn btn-secondary btn-md" data-toggle="modal" data-target="#add_services">
            Add Blogs
          </a>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="container-fluid">
    <div class="row p-3">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>img</th>
                  <th>Service Name</th>
                  <th>CreatedAt</th>
                  <th class="w-pr-15">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $Select = SELECT("SELECT * from blogs");
                if ($Select == true) {
                  $Count = 0;
                  while ($Fetch = mysqli_fetch_array($Select)) {
                    $Count++; ?>
                    <tr>
                      <td><?php echo $Count; ?></td>
                      <td><img src="<?php echo DOMAIN . "/storage/img/blogs/" . $Fetch['blog_feature_image']; ?>" class="img-fluid w-px-20"></td>
                      <td><?php echo $Fetch['blog_title']; ?></td>
                      <td><?php echo $Fetch['blog_date']; ?></td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#view_services<?php echo $Fetch['blog_id']; ?>" class="btn btn-dark btn-sm square"><i class="fa fa-eye"></i></a>
                        <a href="?view=Blogs&edit=<?php echo $Fetch['blog_id']; ?>" class="btn btn-info btn-sm square"><i class="fa fa-edit"></i></a>
                        <a href="../action/delete.php?blogs=<?php echo $Fetch['blog_id']; ?>" class="btn btn-danger btn-sm square"><i class="fa fa-trash"></i></a>
                        <div class="modal square fade" id="view_services<?php echo $Fetch['blog_id']; ?>">
                          <div class="modal-dialog square modal-lg">
                            <div class="modal-content square">
                              <div class="modal-header">
                                <h4 class="modal-title">Blog Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h5><?php echo $Fetch['blog_title']; ?></h5>
                                <p><?php echo SECURE("" . htmlspecialchars_decode($Fetch['blog_description']) . "", "d"); ?></p>
                                <img src="<?php echo DOMAIN . "/storage/img/blogs/" . $Fetch['blog_feature_image']; ?>" class="img-fluid w-pr-50 d-block mx-auto"><br>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default square" data-dismiss="modal">Close</button>
                                  <a href="?view=blogs&edit=<?php echo $Fetch['blog_id']; ?>" Name="CreateServices" class="btn btn-primary square">Edit Blogs</a>
                                </div>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                      </td>
                    </tr>
                <?php }
                } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </section>
  <!-- /.card -->

  <div class="modal square fade" id="add_services">
    <div class="modal-dialog square modal-lg">
      <div class="modal-content square">
        <div class="modal-header">
          <h4 class="modal-title">Add Blog</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../action/insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="ServiceTitle"> Blog Title</label>
              <input type="text" name="blog_title" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="ServiceImg"> Feature Image Image</label>
              <input type="FILE" name="blog_feature_image" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="ServiceDesc">Blog Description</label>
              <textarea name="blog_description" class="form-control" id="editor" rows="7"></textarea>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default square" data-dismiss="modal">Close</button>
          <button type="Submit" Name="CreateBlogs" class="btn btn-primary square">Create Blog</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->