



<?php   
   
  if(isset($_POST["send"])){

   $name=trim($_POST["user_name"]);
   $email=trim($_POST["email"]);
   $message=trim($_POST["comments"]);
   
   if($name=="" || $email=="" || $message==""){
        echo "Please write in this input";
        return;
   }

   $date= date("Y-m-d h-i");
   

   echo $new_lign = $name . " | " . $email . " | " . $message. " | " . $date ."\n";
   
   file_put_contents("data.txt", $new_lign, FILE_APPEND);
  }



?>



<?php  
    

if(isset($_POST["showResult"])){
   //  if (file_exists("data.txt")) {

    $lines = file("data.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    $lastFive = array_slice($lines, -5);
     
    foreach ($lastFive as $line) {
        list($n, $e, $m, $d) = explode(" | ", $line);
       
        echo "<div class='review'>";
        echo "<strong>$n</strong> ($e) <br>";
        echo "$m<br>";
        echo "<small>$d</small>";
        echo "</div>";

        
    }
}

    // }

?>