<!DOCTYPE html>
<html>

<head>
 <title>Install | GauravsinghigC</title>
 <?php HEADER_FILES("../");?>
 <?php MetaTags($P = array("default", "index")); ?>
</head>
<body style=" background-image: linear-gradient(299deg, #d8eefb, transparent);">
 <section class="container-fluid">
  <div class="row">
  	<div class="col-lg-12 col-md-12 col-sm-12 col-12 p-3">
     	<h5 class="heading"><i class="fa fa-download text-success"></i> Install App | GauravsinghigC</h5>
  	</div>
  </div>
 </section>
 <form action="../action/install.php" method="POST" class="container-fluid">
    	<div class="row">
    		 <div class="col-lg-4 col-md-4 col-sm-12 col-12">
    		<div class="form-group">
    			<h6 class="heading">User/Developer Details</h6>
    			<label>Developer/User Name</label>
    			<input type="text" name="DEV_NAME" value="" class="form-control" required="">
    		</div>
    		<div class="form-group">
    			<label>Support Mail Id</label>
    			<input type="email" name="RECEIVER_MAIL" value="" class="form-control" required="">
    		</div>
    		<div class="form-group">
    			<label>App Phone Number : <SMALL>admin/user phone</SMALL></label>
    			<input type="text" name="APP_PHONE" value="" class="form-control" required="">
    		</div>
            <div class="form-group">
                <label>Create Admin Username</label>
                <input type="text" name="Username" value="" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Create Admin Password</label>
                <input type="text" name="Password" value="" class="form-control" required="">
            </div>
    		<div class="form-group">
    			<label>Work Environment</label>
    			<select class="form-control" name="WORK_ENV" required="">
    				<option value="dev">Development</option>
    				<option value="prod">Production</option>
    			</select>
    			<p class="font-13 mt-1">separete log file generated for development and production. </p>
    		</div>
    	</div>
    	 <div class="col-lg-4 col-md-4 col-sm-12 col-12">
    		<div class="form-group">
    			<h6 class="heading">App Details</h6>
    			<label>App Name</label>
    			<input type="text" name="APP_NAME" value="" class="form-control" required="">
    		</div>
    		<div class="form-group">
    			<label>Domain</label>
    			<input type="text" name="DOMAIN" value="" class="form-control" required="">
    		</div>
    		<div class="form-group">
    			<label>Address</label>
    			<input type="text" name="APP_ADDRESS" value="" class="form-control" required="">
    		</div>
    		<div class="form-group">
    			<label>App Mail Id</label>
    			<input type="email" name="APP_MAIL_ID" value="" class="form-control" required="">
    		</div>
    		<div class="form-group">
    			<label>App Link (If have)</label>
    			<input type="text" name="DOWNLOAD_APP_LINK" value="" class="form-control" >
    		</div>
    	</div>
    	 <div class="col-lg-4 col-md-4 col-sm-12 col-12">
    		<div class="form-group">
    			<h6 class="heading">Database Settings</h6>
    			<label>Host Name</label>
    			<input type="text" name="DB_HOST" value="" class="form-control" required="">
    		</div>
    		<div class="form-group">
    			<label>Database Name</label>
    			<input type="text" name="DB_NAME" value="" class="form-control" >
    		</div>
    		<div class="form-group">
    			<label>DB Username</label>
    			<input type="text" name="DB_USERNAME" value="" class="form-control" >
    		</div>
    		<div class="form-group">
    			<label>DB Password</label>
    			<input type="text" name="DB_PASSWORD" value="" class="form-control" >
    		</div>
    		<div class="form-group">
    			<label>Database PORT</label>
    			<input type="text" name="DB_PORT" value="" class="form-control" >
    		</div>
    		<div class="form-group">
    			<button class="btn bg-success text-white btnp form-control" type="submit" name="AppInstallation">Install App <i class="fa fa-angle-right font-15"></i></button>
    		</div>
    	</div>
    </form>

 <?php FOOTER_FILES("../");?>
</body>

</html>