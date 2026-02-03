



<?php   
   
   $name=$_POST["user_name"];
   $email=$_POST["email"];
   $message=$_POST["message"];
   

   
                               
   $date= date("Y-m-d h-i");
   

   echo $new_lign = $name . " _ " . $email . " _ " . $message. " _ " . $date ;

   file_put_contents("data.txt", $new_lign, FILE_APPEND);

?>