<?php
   include 'config.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['uid']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['upwd']);

      $sql = "SELECT * FROM patientstbl WHERE PatientPassword = '$mypassword' and (PatientUsername = '$myusername' or Patient_Email = '$myusername')";
     // $sql = "SELECT * from users_tbl where uid = '$myusername' or Email = '$myusername'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      $active = $row['uid'];
      
      $count = mysqli_num_rows($result);
            
      if($count == 1) 
      {
            $_SESSION['login_user'] = $myusername;            
//          $_SESSION['login_email'] = $count['Email'];
//          header ("Location: index.php");
//          exit();      
               if (isset($_SESSION['login_user'])) 
               {
               date_default_timezone_set('Asia/Singapore');
               $dt_login = date('Y-m-d H:i:s a', time());            
               $sql1 = "INSERT into patientlog (Patient_ID, Login) values ('$myusername', '$dt_login')";
               $result1 = mysqli_query($conn, $sql1);
               $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

               $logID = $row1['Log_ID'];

               header ("Location: index.php");
               exit();
               }
      }
      else 
      {
         header("Location: login.php?invalid=Email/Username&Password");
         exit();
      }

   }
   
   ?>