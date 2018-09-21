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
					        <li><a class="menu" href="index.php" >home</a></li>
					        <li><a class="menu" href="exercise.php">exercises</a></li>
					        <li><a class="menu" href="service.php">services </a></li>
					        <li><a class="menu active" href="about.php">about us</a></li>
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


	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<br>
				<h2>about us</h2>
				<h4>Physical Medicine and Rehabilitation Division</h4>
				<h4>The Physical Medicine and Rehabilitation Division (PMRD) is responsible for providing therapeutic services in the fields of physical therapy, occupational therapy, wellness and health promotion and electrodiagnosis. The aim of the PMRD is to develop the fullest physical, social, vocational, avocational, educational and psychological potential of persons with disabilities ranging from the neurologic to the musculoskeletal, from the pediatric to the geriatric. The PMRD staff is made up of a qualified and experienced team of five(5) Consultant Physiatrists, nine (9) Physical Therapists, a Sports Scientist, a Physical Therapy Technician, a Laboratory Aide and a Clerk. Total number of graduates of certified training programs (clinical affiliation of PT interns from UST, UP, UE, FEU and PLM) from April 2000 to April 2008 are 1, 088.</h4>
				<img src="img/rehab.jpg" alt=""/>
				<div class="col-md-6 col-sm-4">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>P</h1>
							</div>
							<h3>Our Mission</h3>
							<p>Driven by our shared desire to improve the health status of the Filipino people we, the PHILIPPINE HEART CENTER, shall provide comprehensive cardiovascular care enhanced by education and research that is accessible to all.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-4">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive"  alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>M</h1>
							</div>
							<h3>Our Vision</h3>
							<p>The PHILIPPINE HEART CENTER is the leader in upholding the highest standards of cardiovascular care, a self-reliant institution responsive to the health needs of the Filipino people.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-4">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive"  alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>R</h1>
							</div>
							<h3>Our Objectives</h3>
							<p>To provide compassionate and expert patient care.
								To provide world-class education and training.
								To conduct Internationally-acclaimed research.
								To responsibly disseminate scientific and lay information to the public.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-4">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" alt="">
						</div>
						<div class="about-details">
						<div class="pentagon-text">	
							<h1>D</h1>
						</div>
							<h3>Our Values</h3>
							<p>We believe that by sharing the following values, we shall remain true to our Mission:  
								<br>
								<br>
							</p>
						</div>				
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->
		<br>
		<br>
		<br>
		<div class="">
                <div class="col-md-6 col-sm-4">
                    <div class="CONTACT">
                        <center><h2 class="tm-about-title-3 tm-yellow-text">CONTACT INFORMATION</h2>
                        <h4 class="tm-about-description-3"><li><i class="fa fa-calendar">-</i><span>Monday - Saturday:</span> 8:00 AM to 4:00 PM</li></h4>
                            <h4><li><i class="fa fa-map-marker"></i>-<span>Address:</span> East Avenue Quezon City, Philippines 1100 </li></h4>
                            <h4><li><i class="fa fa-phone">-	</i><span>Local Numbers:</span> 3802 to 3804</li></h4></center>
                    </div>
                </div>
               <div class="col-md-6 col-sm-4">
                    <div class="CONTACT">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="476" height="309" id="gmap_canvas" src="https://maps.google.com/maps?q=philippine%20heat%20center%20East%20Avenue%20Quezon%20City%2C%20Philippines%201100&t=k&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:309px;width:476px;}.gmap_canvas {overflow:hidden;background:none!important;height:309px;width:476px;}</style></div>
                    </div>
                </div>
            </div>



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