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
      <table id="example3" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>S.No</th>
         <th>Full Name</th>
         <th>Phone Number</th>
         <th>EMAIL ID</th>
         <th>Received At</th>
         <th>View CV</th>
         <th class="w-pr-15">Action</th>
        </tr>
       </thead>
       <tbody>
        <?php
        $Select = SELECT("SELECT * from resumes ORDER BY ResumeId DESC");
        if ($Select == true) {
         $Count = 0;
         while ($Fetch = mysqli_fetch_array($Select)) {
          $Count++; ?>
          <tr>
           <td><?php echo $Count; ?></td>
           <td><?php echo $Fetch['FullName']; ?></td>
           <td><?php echo $Fetch['PhoneNumber']; ?></td>
           <td><?php echo $Fetch['EmailId']; ?></td>
           <td><?php echo $Fetch['ReceivedAt']; ?></td>
           <td>
            <a href="<?php echo $DOMAIN; ?>/storage/<?php echo $Fetch['Attachement']; ?>"><i class="fa fa-link"></i></a>
           </td>
           <td>
            <a href="tel:<?php echo $Fetch['PhoneNumber']; ?>" class="btn btn-sm btn-info">Call</a>
            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#view_enq<?php echo $Fetch['ResumeId']; ?>">View</a>

            <div class="modal square fade" id="view_enq<?php echo $Fetch['ResumeId']; ?>">
             <div class="modal-dialog square modal-lg">
              <div class="modal-content square">
               <div class="modal-header">
                <h4 class="modal-title">CV Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
               </div>
               <div class="modal-body">
                <h5><b>Name</b> : <?php echo $Fetch['FullName']; ?></h5>
                <h5><b>Phone</b> : <?php echo $Fetch['PhoneNumber']; ?> : <a href="tel:<?php echo $Fetch['PhoneNumber']; ?>" class="btn btn-sm btn-info">Call</a></h5>
                <h5><b>Email</b> : <?php echo $Fetch['EmailId']; ?></h5>
                <h5><b>Subject</b> : <?php echo $Fetch['Subject']; ?></h5>
                <h5><b>Message</b> : <?php echo SECURE($Fetch['Message'], "d"); ?></h5>
                <div class="row">
                 <div class="col-md-12 text-center mb-3">
                  <a href="<?php echo $DOMAIN; ?>/storage/<?php echo $Fetch['Attachement']; ?>" target="_blank" class="btn btn-md btn-success">View Attachement</a>
                 </div>
                </div>
                <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-default square" data-dismiss="modal">Close</button>
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