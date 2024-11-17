<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6 col-6">
          <h3 class="m-0">
            <?php if(isset($_GET['view']) or isset($_GET['view']) != null){ echo $_GET['view']; } else {echo "Dashboard";} ?>
          </h3>
        </div><!-- /.col -->
        <div class="col-sm-6 text-right col-6">
          <a href="#" class="btn btn-secondary btn-md" data-toggle="modal" data-target="#add_link">
            Add New Link
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
                  <th>ICON</th>
                  <th>Profile Name</th>
                  <th>test link</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
   $Select = SELECT("SELECT * from sociallinks");
   if($Select == true){
    $Count = 0;
    while($Fetch = mysqli_fetch_array($Select)){
     $Count++; ?>
                <tr>
                  <td><?php echo $Count;?></td>
                  <td><span class="btn btn-info btn-md text-white"><i
                        class="fa <?php echo $Fetch['icon'];?> text-white"></i></span></td>
                  <td><?php echo $Fetch['title'];?></td>
                  <td><a href="<?php echo $Fetch['url'];?>" class="btn btn-sm btn-secondary">Open Link</a></td>
                  <td>
                    <?php STATUS("updatesociallink", "".$Fetch['linkid']."", "".$Fetch['status']."");?>
                  </td>
                  <td>
                    <a href="<?php echo $Fetch['url'];?>" class="btn btn-dark btn-sm square" target="blank"><i
                        class="fa fa-share"></i></a>
                    <a href="#" class="btn btn-info btn-sm square" data-toggle="modal"
                      data-target="#update_link<?php echo $Fetch['linkid'];?>"><i class="fa fa-edit"></i></a>
                    <a href="../action/delete.php?sociallinks=<?php echo $Fetch['linkid'];?>"
                      class="btn btn-danger btn-sm square"><i class="fa fa-trash"></i></a>
                    <div class="modal square fade" id="update_link<?php echo $Fetch['linkid'];?>">
                      <div class="modal-dialog square modal-lg">
                        <div class="modal-content square">
                          <div class="modal-header">
                            <h4 class="modal-title">Update Social Links</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="../action/update.php" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                <label for="ServiceTitle"> Profile Title</label>
                                <input type="text" name="title" value="<?php echo $Fetch['title'];?>"
                                  class="form-control" required="">
                              </div>
                              <div class="form-group">
                                <label for="ServiceImg">Account Icon</label>
                                <span class="btn btn-md btn-info square"><i
                                    class="fa <?php echo $Fetch['icon'];?>"></i></span>
                              </div>
                              <div class="form-group">
                                <label for="ServiceDesc">Profile Link <small>paste your profiel link
                                    here</small></label>
                                <input name="url" class="form-control" required="" value="<?php echo $Fetch['url'];?>"
                                  placeholder="http://">
                              </div>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default square" data-dismiss="modal">Close</button>
                            <button type="Submit" Name="updateSocialLink" class="btn btn-primary square"
                              value="<?php echo $Fetch['linkid'];?>">Update Link</button>
                            </form>
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

<div class="modal square fade" id="add_link">
  <div class="modal-dialog square modal-lg">
    <div class="modal-content square">
      <div class="modal-header">
        <h4 class="modal-title">Add Social Links</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../action/insert.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="ServiceTitle"> Profile Title</label>
            <input type="text" name="title" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="ServiceImg">Account Selection</label>
            <select class="form-control" name="icon">
              <option value="fa-facebook">facebook</option>
              <option value="fa-twitter">Twitter</option>
              <option value="fa-instagram">Instagram</option>
              <option value="fa-youtube">Youtube</option>
              <option value="fa-snapchat">Snapchat</option>
              <option value="fa-whatsapp">Whatsapp</option>
              <option value="fa-phone">Phone</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ServiceDesc">Profile Link <small>paste your profiel link here</small></label>
            <input name="link" class="form-control" required="" placeholder="http://">
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default square" data-dismiss="modal">Close</button>
        <button type="Submit" Name="CreateSocialLink" class="btn btn-primary square">Create Link</button>
        </form>
      </div>
    </div>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
