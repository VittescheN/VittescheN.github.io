<?php
     $sql = "select Title, Announcement from announcementstbl where announcefor = 'Patients'";
     $result = mysqli_query($conn, $sql); //fetch result
     $resultCheck = mysqli_num_rows($result);

     if($resultCheck > 0 )
     {
     while ($row = mysqli_fetch_assoc($result)) 
          {
               echo "<center><h1>".$row['Title']."</h1></center><br>";
               echo "<center><h3><p>".$row['Announcement']."</p></h3></center><br>";
          }
     }

?>