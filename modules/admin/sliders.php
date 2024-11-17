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
          <a href="#" class="btn btn-secondary btn-md" data-toggle="modal" data-target="#add_slider">
            Add Slider
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
                  <th>Slider Name</th>
                  <th>CreatedAt</th>
                  <th>LastUpdated</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $Select = SELECT("SELECT * from sliders");
                if ($Select == true) {
                  $Count = 0;
                  while ($Fetch = mysqli_fetch_array($Select)) {
                    $Count++; ?>
                    <tr>
                      <td><?php echo $Count; ?></td>
                      <td><img src="<?php echo $Fetch['sliderimg']; ?>" class="img-fluid w-px-20"></td>
                      <td><?php echo $Fetch['slidertitle']; ?></td>
                      <td><?php echo $Fetch['CreatedAt']; ?></td>
                      <td><?php echo $Fetch['UpdatedAt']; ?></td>
                      <td>
                        <?php STATUS("updateslider", "" . $Fetch['sliderid'] . "", "" . $Fetch['Status'] . ""); ?>
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#view_slider<?php echo $Fetch['sliderid']; ?>" class="btn btn-dark btn-sm square"><i class="fa fa-eye"></i></a>
                        <a href="?view=Sliders&edit=<?php echo $Fetch['sliderid']; ?>" class="btn btn-info btn-sm square"><i class="fa fa-edit"></i></a>
                        <a href="../action/delete.php?Sliders=<?php echo $Fetch['sliderid']; ?>" class="btn btn-danger btn-sm square"><i class="fa fa-trash"></i></a>
                        <div class="modal square fade" id="view_slider<?php echo $Fetch['sliderid']; ?>">
                          <div class="modal-dialog square modal-lg">
                            <div class="modal-content square">
                              <div class="modal-header">
                                <h4 class="modal-title">Slider Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h5><?php echo $Fetch['slidertitle']; ?></h5><br>
                                <p><?php echo SECURE("" . strip_tags($Fetch['sliderdesc']) . "", "d"); ?></p>
                                <img src="<?php echo DOMAIN; ?>/storage/img/slider/<?php echo $Fetch['sliderimg']; ?>" class="img-fluid w-pr-50 d-block mx-auto"><br>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default square" data-dismiss="modal">Close</button>
                                  <a href="?view=Sliders&edit=<?php echo $Fetch['sliderid']; ?>" Name="CreateServices" class="btn btn-primary square">Edit Slider</a>
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

  <div class="modal square fade" id="add_slider">
    <div class="modal-dialog square modal-lg">
      <div class="modal-content square">
        <div class="modal-header">
          <h4 class="modal-title">Add Slider</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../action/insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="ServiceTitle"> Slider Title</label>
              <input type="text" name="slidertitle" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="ServiceImg"> Slider Image</label>
              <input type="FILE" name="sliderimg" class="form-control" required="">
            </div>
            <div class="form-group">
              <label for="ServiceDesc">Slider Description</label>
              <textarea name="sliderdesc" class="form-control" id="editor" rows="7"></textarea>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default square" data-dismiss="modal">Close</button>
          <button type="Submit" Name="CreateSlider" class="btn btn-primary square">Create Slider</button>
          </form>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->