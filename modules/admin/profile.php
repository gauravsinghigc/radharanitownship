<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">
            <?php if(isset($_GET['view']) or isset($_GET['view']) != null){ echo $_GET['view']; } else {echo "Dashboard";} ?>
          </h4>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-lg-4 col-sm-6 col-12">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                  src="<?php echo $DOMAIN;?>storage/img/<?php echo auth('UserProfile');?>"
                  alt="<?php echo auth('FullName');?>" title="<?php echo auth('FullName');?>">
              </div>

              <h3 class="profile-username text-center"><?php echo auth('FullName');?></h3>

              <p class="text-muted text-center"><?php echo UserType("UserTypeName");?></p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>FullName</b> <a class="float-right"><?php echo auth('FullName');?></a>
                </li>
                <li class="list-group-item">
                  <b>Email Id</b> <a class="float-right"><?php echo auth('EmailId');?></a>
                </li>
                <li class="list-group-item">
                  <b>Phone Number</b> <a class="float-right"><?php echo auth('PhoneNumber');?></a>
                </li>
                <li class="list-group-item">
                  <b>Username</b> <a class="float-right"><?php echo auth('Username');?></a>
                </li>
                <li class="list-group-item">
                  <b>Password</b> <a class="float-right"><?php echo auth('Password');?></a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->

        <div class="col-md-8 col-lg-8 col-sm-6 col-12">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Profile Settings</a>
                </li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="settings">
                  <form class="form-horizontal" action="../action/update.php" method="POST">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo auth('FullName');?>" name="FullName" class="form-control"
                          id="inputName" placeholder="Full Name" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-3 col-form-label">Email Id</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail" name="EmailId"
                          value="<?php echo auth('EmailId');?>" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-3 col-form-label">Phone Number</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputName2" name="PhoneNumber"
                          value="<?php echo auth('PhoneNumber');?>" required="" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-3 col-form-label">Username</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputName2" value="<?php echo auth('Username');?>"
                          required="" name="Username" placeholder="Userame">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputSkills" name="Password"
                          value="<?php echo auth('Password');?>" required="" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-success" name="UpdateProfile"
                          value="<?php echo auth('UserId');?>">Update Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
