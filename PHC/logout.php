<?php
include 'config.php';
   session_start();
   
   
   	if (isset($_SESSION['login_user'])) 
   {
         	$currUser = $_SESSION['login_user'];
          date_default_timezone_set('Asia/Singapore');
            $dt_logout = date('Y-m-d H:i:s', time());            
            $sql1 = "UPDATE patientlog set Logout = '$dt_logout' where Patient_ID = '$currUser' order by Log_ID desc limit 1";
  //          $sql1 = "SELECT * from users_log";
            $result1 = mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

  //          $row1['u_logsID'] = $currUser;
    //        $logID = $row1['u_logsID'];
      //      if ($logID == 1) {
        //    	mysqli_query($conn, "UPDATE users_log set u_logout = '$dt_logout' where uid = '$currUser' and u_logsID = '$logID'");
          //  }
         if(session_destroy()) 
         {  
      		header("Location: ./Login.php");
         }
   }

  	

?>