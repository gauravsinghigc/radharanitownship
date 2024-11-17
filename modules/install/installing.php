<!DOCTYPE html>
<html>
<head>
	<title>Installing...</title>
	<?php HEADER_FILES("..");?>
	<?php MetaTags($P = array("default", "index")); ?>
</head>
<body style="background-color: #edeff1;">
<section class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12 pl-0 pr-0 square">
			<img src="../assets/data/install.gif" class="w-pr-10">
		<div class="bg-light p-2 square pb-0" id="typetext">
			<code class="font-11">
			<span><i class="fa fa-spinner fa-spin text-success "></i> Installing...</span><br>
			<span>Setup Environment Variables 
				<i class="fa fa-angle-right"></i> <span class='text-success'> Success!</span></span><br>
			<span>Setup Files & Folder <i class="fa fa-angle-right"></i> <span class='text-success'> Success!</span></span><br>
			<span> Setup Database <i class="fa fa-angle-right"></i> </span>
		</code>
		</div>
		</div>
	</div>
</section> 
<?php FOOTER_FILES("..");?>
</body>
</html>