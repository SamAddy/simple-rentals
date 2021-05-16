<?php
include_once 'db.php'; 

function check_login($conn)
{
   if(isset($_SESSION["Email"]))
   {
      $_email = $_SESSION["Email"];
      $query = "select * from users where Email = '$_email' limit 1";

      $result = mysqli_query($conn,$query);
      if($result && mysqli_num_rows($result) > 0)
      {
         $user_data = mysqli_fetch_assoc($result);
         return $user_data;
      }
   }

   ///redirect to login
   header("Location: login.php");
   die;
}

?>

