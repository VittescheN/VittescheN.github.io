<?php 
include 'loginCode.php';
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Login</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet">
	
	<script src="js/modernizr.js"></script>
	<style type="text/css">
	

	
#Log{
		padding: 60px 40px;
		margin-top: 30px;
		margin-bottom: 0px;
		-webkit-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
		-moz-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
		box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
	}
	img{
		width: 300px;
		margin: auto;
	}
	
	h1{
    color: black;
    text-align: center;
    font-size: 25px;
    font-weight: bolder;
    margin-top: -20px;
	}
	label{
		font-size: 25px;
		color: black;
	}

	</style>

</head>
<body>
	<div id="background">
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<form id="Log" method="post">
					<h1>Physical Medicine and Rehabilitation Divition</h1>
					<img class="img img-responsive" src="img/logo2.png">
					<div class="form-group">
						<label>Username/E-mail</label>
						<input type="text" class="form-control" placeholder="Username/E-mail" name="uid" maxlength="40">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="Password" class="form-control" placeholder="Password" name="upwd" maxlength="20">
					</div>					
					<button type="submit" class="btn btn-success btn-block">Login</button>
					<br>
					<style>
						.forgotPwd a:hover
						{	
							font-weight: bold;							
							border-bottom: solid 2px;
						}
					</style>
					<div class="forgotPwd"><center><a href="" style="color: red;"><font size="4">Forgot Password?</font></a></center></div>
				</form>				
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>			
		</div>
	</div>
	</div>
</body>
</html>