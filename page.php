

<!DOCTYPE >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
   <!-- Started validation php -->
  
<?php   
   
  if(isset($_POST["send"])){
   
    // declare variable 
   $name = str_replace('-', '', trim( $_POST['user_name']));
   $email=str_replace('-',"",trim($_POST["email"]));
   $message=str_replace('-',"",trim($_POST["comments"]));

    // declare variable date
   $date= date("Y-m-d h-i");

//    declare variable new_lign to push 
   $new_lign = $name . " - " . $email . " - " . $message. " - " . $date ."\n";

   
//    create condition 
   if($name=="" || $email=="" || $message==""){
      
       echo  "<div class='empty_valus'> 
              
                <p>All fields are required</p>
                
                <a href='index.php'>Go back</a>
              
            </div>";
        
        exit;
        
   }else{
    // if validation to write user into form
      file_put_contents("data.txt", $new_lign, FILE_APPEND);

       echo "<div class='success'>
            <p>Your message has been sent successfully.</p>
            <a href='index.php'>Back</a>
          </div>";
   }

   

    // if clicke in show resulte
  }elseif(isset($_POST["showResult"])){


     if (!file_exists("data.txt")) {
        echo "<p>No reviews yet.</p>";
        exit;
    }

    $lines = file("data.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    $lastFive = array_slice($lines, -5);
     
    echo "<div class='review'>";
             echo "<a href='index.php'>Return</a>";
    echo "</div>";

     
        echo " <table>
       
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Date</th>
  </tr>";

    foreach ($lastFive as $line) {
   
        list($n, $e, $m, $d) = explode(" - ", $line);
       
 echo "
  <tr>
    <td>$n</td>
    <td>$e</td>
    <td>$m</td>
    <td>$d</td>

  </tr>";

 
             


        
    

    };

     echo "</table> ";
};


?>




</body>
</html>
