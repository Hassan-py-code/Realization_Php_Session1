<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link style css -->
     <link rel="stylesheet" href="style.css">
</head>
<body>
     
    

  <fieldset>
    <legend>Donnez votre sur php 8 !</legend>
    <form action="#" method="post">
        
        <input type="text" name="user_name" placeholder="Name">
        <br>
        <br>
        
        <input type="email" name="email" placeholder="Email">
        <br>
        <br>
        <textarea name="message" placeholder="Message"></textarea>

        <div class="btn_div">
             <button>Envoyer</button>
             <button>Afficher les avis</button>
        </div>
    </form>
  </fieldset>


</body>
</html>

<?php   
   
   $name=$_POST["user_name"];
   $email=$_POST["email"];
   $message=$_POST["message"];
   

   
                               
   $date= date("Y-m-d h-i");
   

   echo $new_lign = $name . " _ " . $email . " _ " . $message. " _ " . $date ;

   file_put_contents("data.txt", $new_lign, FILE_APPEND);

?>