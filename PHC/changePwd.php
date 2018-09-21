<?php
include 'session.php';
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Physical Medicine and Rehabilitation Divition</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 header-logo">
					<br>
					<a href="index.html"><img src="img/logo2.png" alt="" class="img-responsive logo" height="120" width="120"></a>
				</div>
				<div class="row-md-0">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu" href="index.php" >home</a></li>
					        <li><a class="menu" href="exercise.php">exercises</a></li>
					        <li><a class="menu" href="service.php">services </a></li>
					        <li><a class="menu" href="about.php">about us</a></li>
					        <li class="nav-item ">
					        	<li class="nav-item ">

         					 <!-- Button trigger modal -->
							<div class="modalMarg">
         				<!-- Button trigger modal -->
							<button id="modalMargin" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  								<i class="fa fa-bell">Announcement</i>
							</button>	</div>
							<style type="text/css">
								.modalMarg button{
									margin-left: 55%;
									margin-top: 4%;
								}
							</style>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Announcement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	
                        	<center><p class="title mb-0">ADMIN</p></center>
                        	<center><p class="text-muted " style="font-size: 13px">Physical Medicine and Rehabilitation Divition</p></center>
                   		 
        <?php include 'announcementCode.php' ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        					</li>
					        <li><a class="menu" href=""></a></li>
					        <li><a class="menu" href=""></a></li>
					        <li><a class="menu" href=""></a></li>
					        <li><a class="menu" href="logout.php">logout</a></li>
					      </ul>
					    </div><!-- /navbar-collapse -->

					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->
	<section class="changepass" id="changepass">
		<div class="exercises-caption clearfix">

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<h1 align="center"><u><font size="9">Change Password</font></u></h1>
				<br>
		<form method="post">
						<div class="form-group">
							<label><font size="6">Enter Current Password</font></label>
							<input type="password" name="currentPwd" class="form-control" placeholder="Enter Current Password">
						</div>
						<div class="form-group">
							<label><font size="6">Enter New Password</font></label>
							<input type="password" name="newPwd" class="form-control" placeholder="Enter New Password" maxlength="20">
						</div>
						<div class="form-group">
							<label><font size="6">Re-enter New Password</font></label>
							<input type="password" name="confirmPwd" class="form-control" placeholder="Re-enter New Password" maxlength="20">
						</div>
						<center><button name="changePass" class="btn btn-success"><font size="6"> Submit </font></button></center><div class="col-md-4 col-sm-4 col-xs-12"></div>	


		</div>

	</div>
	<?php

					if(isset($_POST['changePass']))
					{
					$cur_pass = mysqli_real_escape_string($conn, $_POST['currentPwd']);
					$new_pass = mysqli_real_escape_string($conn, $_POST['newPwd']);
					$confirm_pass = mysqli_real_escape_string($conn, $_POST['confirmPwd']);

						$u_pwd = $_SESSION['login_user'];
						$query = "SELECT * FROM patientstbl where PatientUsername = '$u_pwd'";
						$result = mysqli_query($conn, $query);
						
						while ($row = mysqli_fetch_array($result)) 
						{
							$get_pass = $row['PatientPassword'];
						}

						if ($cur_pass == $get_pass) 
						{
							if(strlen($new_pass) > 6)
							{		
								if ($confirm_pass == $new_pass) {
									if($updatePwdQuery = mysqli_query($conn, "UPDATE patientstbl SET PatientPassword = '".$new_pass."' WHERE PatientUsername = '".$u_pwd."' "))//new password query
									{
										echo '<center><font size="5" color="green">Password Changed!!!</font></center>';
										
									}
								}
								else
								{
									echo '<center><font size="5" color="red">New password do not match</font></center>';
									
								}
							}
							else
							{
								echo '<center><font size="5" color="red">New password must be longer than 6 characters</center>';
								
							}
						}
						else
						{
							echo '<center><font size="5" color="red">Your current password do not match with your real password</font></center>';
							
						}
					}

					?>
	<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
		<br><br>
	</div> 
					</form>

</div>

</div>
			
</div>
</section>



	<!-- footer starts here -->
	<?php include 'footer.php';