<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user']; //orig
   
   


   $ses_sql = mysqli_query($conn,"select * from patientstbl where PatientUsername = '$user_check'"); 
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC); //orig
  // $row = mysqli_fetch_assoc($ses_sql);
   $login_session = $row['PatientUsername'];


   //session for image




	/*while($row = mysqli_fetch_array($ses_sql)
	{
	    
	    
	}*/

	if(!isset($_SESSION['login_user']))
	{
      header("location:Login.php");
  	}

   
?>