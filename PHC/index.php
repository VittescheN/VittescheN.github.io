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
					        <li><a class="menu active" href="index.php" >home</a></li>
					        <li><a class="menu" href="exercise.php">exercises</a></li>
					        <li><a class="menu" href="service.php">services </a></li>
					        <li><a class="menu" href="about.php">about us</a></li>
					        <li class="nav-item ">
					        	<li class="nav-item ">
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
	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide-1.jpg" alt="">
			                <div class="carousel-caption">
			                	<br>
			                	<br>
			                	<br>
			                	<br>
		               			<h1>step to recover</h1>
		               			<p>Physical Medicine and Rehabilitation Division</p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-2.jpg" alt="">
			                <div class="carousel-caption">
			                	<br>
			                	<br>
			                	<br>
			                	<br>
		               			<h1>step to recover</h1>
		               			<p>Physical Medicine and Rehabilitation Division</p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-3.jpg" alt="">
			                <div class="carousel-caption">
			                	<br>
			                	<br>
			                	<br>
			                	<br>
		               			<h1>step to recover</h1>
		               			<p>Physical Medicine and Rehabilitation Division</p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide-4.jpg" alt="">
			                <div class="carousel-caption">
			                	<br>
			                	<br>
			                	<br>
			                	<br>
		               			<h1>step to recover</h1>
		               			<p>Physical Medicine and Rehabilitation Division</p>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->


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