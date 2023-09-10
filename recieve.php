<?php
   session_start();
   if(isset($_POST['save']))
   {
      extract($_POST);
      include 'connect.php';
      $sql=mysqli_query($conn,"SELECT  * FROM registration where email= '$email' and  password='$password'");
      $row = mysqli_fetch_array($sql);
      if(is_array($row))
      {
         $_SESSION['email'] = $row['email'];
         $_SESSION['password'] = $row['password'];

         echo "Logged in!";
      }
      echo "please enter the right information.";
   }
?>