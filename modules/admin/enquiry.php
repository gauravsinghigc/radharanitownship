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
                  <th>Full Name</th>
                  <th>Phone Number</th>
                  <th>Interested In</th>
                  <th>Received At</th>
                  <th>Status</th>
                  <th class="w-pr-15">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $Select = SELECT("SELECT * from equiries ORDER BY status ASC");
                if ($Select == true) {
                  $Count = 0;
                  while ($Fetch = mysqli_fetch_array($Select)) {
                    $Count++; ?>
                    <tr>
                      <td><?php echo $Count; ?></td>
                      <td><?php echo $Fetch['FullName']; ?></td>
                      <td><?php echo $Fetch['phone']; ?></td>
                      <td><?php echo $Fetch['type']; ?></td>
                      <td><?php echo $Fetch['createdat']; ?></td>
                      <td>
                        <?php if ($Fetch['status'] == "0") {
                          echo '<span class="btn btn-sm btn-info font-10">Unread</span>';
                        } else {
                          echo '<span class="btn btn-sm btn-success font-10">Read</span>';
                        } ?></span>
                      </td>
                      <td>
                        <a href="tel:<?php echo $Fetch['phone']; ?>" class="btn btn-sm btn-info">Call</a>
                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#view_enq<?php echo $Fetch['enquiryid']; ?>">View</a>

                        <div class="modal square fade" id="view_enq<?php echo $Fetch['enquiryid']; ?>">
                          <div class="modal-dialog square modal-lg">
                            <div class="modal-content square">
                              <div class="modal-header">
                                <h4 class="modal-title">Enquiry Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h5><b>Name</b> : <?php echo $Fetch['FullName']; ?></h5>
                                <h5><b>Phone</b> : <?php echo $Fetch['phone']; ?> : <a href="tel:<?php echo $Fetch['phone']; ?>" class="btn btn-sm btn-info">Call</a></h5>
                                <h5><b>Email</b> : <?php echo $Fetch['email']; ?></h5>
                                <h5><b>Interested In</b> : <?php echo $Fetch['type']; ?></h5>
                                <h5><b>Message</b> : <?php echo SECURE($Fetch['message'], "d"); ?></h5>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default square" data-dismiss="modal">Close</button>
                                  <a href="../action/delete.php?delete_enquiries=<?php echo SECURE("true", "e"); ?>&access_url=<?php echo SECURE(get_url(), "e"); ?>&control_id=<?php echo SECURE($Fetch['enquiryid'], "e"); ?>" class="btn btn-default sqaure"><i class="fa fa-trash text-danger"></i></a>
                                  <a href="../action/update.php?enquiry=<?php echo $Fetch['enquiryid']; ?>&status=<?php echo $Fetch['status']; ?>" Name="CreateServices" class="btn btn-primary square">Update Status</a>
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