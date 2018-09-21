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
					     <style type="text/css">
					    	.navbar-header {
					    		margin-top: -50%;
					    	}
					    	#bs-example-navbar-collapse-1 {
					    		margin-top: 2%;
					    	}
					    </style>
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
					        <li><a class="menu" href="index.php" >Home</a></li>
					        <li><a class="menu active" href="exercise.php">exercises</a></li>
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


		<!-- exercises section -->
		<style type="text/css">
			.exercise-caption {
				width: 100vw;
				background: cover;

			}
			#about {
				background-repeat: no-repeat;
			}
		</style>
<section class="about text-center" id="about">
		<br>
			<div class="row">
				<h2>exercises</h2>
				<h4>Physical Medicine and Rehabilitation Division</h4>
				</div>

				<div class="exercises-caption clearfix" id="bgA">
						<div class="col-md-3" id="wc">
							<br>
						<br>
						
					<center><h1 class="Text"><u>WELCOME:</u></h1></center>
					<?php
					/*
								$u_image = $_SESSION['login_user'];
										$query = "SELECT * FROM users_tbl where uid = '$u_image' or Email = '$u_image'";
										$result = mysqli_query($conn, $query);
										while ($row = mysqli_fetch_array($result)) 
										{
											echo '
												<tr>
													<td>
													<center><img src="data:image/jpeg;base64,'.base64_encode($row['img_blob']).'" height="160" width="160" class="img" /></center> 
													
													</td>
												</tr>
											';
										}
										*/	
										$patient_pix = $_SESSION['login_user'];
										$query = "SELECT PatientUsername,PatientImage FROM patientstbl where PatientUsername = '$patient_pix' or Patient_Email = '$patient_pix'";
										$result = mysqli_query($conn, $query);
											while ($row = mysqli_fetch_array($result)) 
											{
											$pix1 = $row['PatientImage'];										
											echo '
												<tr>
													<td>
													<center><img src="'.$pix1.'" class="img" height="160" width="160" "></center>													
													</td>
												</tr>	
											';
											}
									?>
					<center><h4 class="Text">

							<?php

 										$u_FNLN = $_SESSION['login_user'];

										$query = "SELECT * FROM patientstbl where PatientUsername = '$u_FNLN' or Patient_Email = '$u_FNLN'";
										$result = mysqli_query($conn, $query);
										while ($row = mysqli_fetch_array($result)) 
										{
											$u_fn = $row['PatientFirstName'];
											$u_ln = $row['PatientLastName'];
											echo $u_fn . " " . $u_ln;											
										}
               				?>


					</h4></center>
					<style type="text/css">
						.changePwd a:hover{
							font-weight: bolder;
							border-bottom: solid 2px blue;
						}
					</style>
					<div class="changePwd"><center><a href="changePwd.php"><font size="5" color="blue">Change Password</font></button></a></center></div>
					<hr>


         			<center><h1><u>ASSIGNED BY:</u></h1></center>

						<div class="logInBox">
						<?php
						/*
										$query = "SELECT PT_ID, PTimage FROM pt_tbl where PT_ID = '101'";
										$result = mysqli_query($conn, $query);
											while ($row = mysqli_fetch_array($result)) 
											{
												$PT_img = base64_encode($row['PTimage']);
												echo '
													<tr>
														<td>
														<center><img src="data:image/jpeg;base64,'.$PT_img.'" height="160" width="160" class="img" /></center>								
														</td>
													</tr><br>
												';
											}
						*/		
										$pt_pix = $_SESSION['login_user'];
										$query = "SELECT PT_Image FROM patientstbl where PatientUsername = '$pt_pix' or Patient_Email = '$pt_pix'";
										$result = mysqli_query($conn, $query);
											while ($row = mysqli_fetch_array($result)) 
											{
											/*	$PT_img = base64_encode($row['PTimage']);
												echo '
													<tr>
														<td>
														<center><img src="data:image/jpeg;base64,'.$PT_img.'" height="160" width="160" class="img" /></center>								
														</td>
													</tr><br>
												';
											*/	
												$pix = $row['PT_Image'];										
											echo '
												<tr>
													<td>
													<center><img src="'.$pix.'" class="img" height="160" width="160" "></center>													
													</td>
												</tr>	
											';
											}
									?>
					<center><h4 class="Text">

					<?php
					/*
					$u_TP = $_SESSION['login_user'];
					$query = "SELECT * from users_tbl A right join pt_tbl B on 'A.PT_ID' = 'B.PT_ID' limit 1";
						$result = mysqli_query($conn, $query);	
						
						while($row = mysqli_fetch_array($result)) 
						{
							$PT_FN = $row['PTFirstName'];
							$PT_LN = $row['PTLastName'];
							$PT_Title = $row['PositionTitle'];
							echo $PT_FN . " " . $PT_LN . "<br>" ;
							echo '<font size="5" color="green">' . $PT_Title . '</font><br>';												
						}	
					*/
					$u_TP = $_SESSION['login_user'];
					$query = "SELECT PatientUsername, PT_LN, PT_FN, PT_Position from patientstbl where PatientUsername = '$u_TP' or Patient_Email = '$u_TP'";
						$result = mysqli_query($conn, $query);	
						
						while($row = mysqli_fetch_array($result)) 
						{
							$PT_FN = $row['PT_FN'];
							$PT_LN = $row['PT_LN'];
							$PT_Title = $row['PT_Position'];
							echo $PT_FN . " " . $PT_LN . "<br>" ;
							echo '<font size="5" color="green">' . $PT_Title . '</font><br>';												
						}						
					?>
					</h4></center>





						
				</div>
						<div class="info-detail">					
						</div>
					</div>
					<br>
					<div class="col-md-9 row-md-0  contact-form">
						
						<h1><u>Given Exercises</u></h1>
						<form class="form1">
							<div class="row">
								<div class="col-md-13">
								<?php
								$u_pic = $_SESSION['login_user'];
								$query = "SELECT ExercisePic FROM patientexercises where Patient_ID = '$u_pic' or Email = '$u_pic'";
										$result = mysqli_query($conn, $query);
										while ($row = mysqli_fetch_array($result)) 
										{
											$pix = $row['ExercisePic'];										
											echo '
												<tr>
													<td>
													<img src="'.$pix.'" class="img" height="160" width="160" class="img" style="margin-right: 5px; margin-bottom:7px;">												
													</td>
												</tr>	
											';
										}
									?>	
								</div>
							</div>
						</form>
					</div>
					
					<div class="col-md-9 contact-form">
						<br>
					<br>
					<br>
					<br>
					</div>
					<div class="col-md-9 contact-form">
						<h1><u> Assigned Video</u></h1>
						<form class="embed-responsive-item-responsive-4by3">

								<?php
								$u_vid = $_SESSION['login_user'];
										$query = "SELECT ExerciseVid FROM exercisevids where Patient_ID = '$u_vid' or Email = '$u_vid'";
										$result = mysqli_query($conn, $query);


										while ($row = mysqli_fetch_array($result)) 
										{
											$vidz = $row['ExerciseVid'];
											echo '
												<tr>
													<td>
														<iframe allowfullscreen src="'.$vidz.'"
														class="embed-responsive-item">								
														</iframe>
													</td>	
												</tr>
											';
										}
									?>		
							</iframe>
						</form>
					</div>
					<div class="exercises-caption clearfix"></div>
						<br>
						<br>
					<div class="exercises-caption clearfix"></div>

	</section><!-- end of exercises section -->


	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<center><p>&copy;Philippine Heart Center All right reserved</p></center>
				</div>
			</div>
		</div>
	</footer>

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>