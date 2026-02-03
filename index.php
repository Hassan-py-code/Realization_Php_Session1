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
    <form action="page.php" method="post">
        
        <input type="text" name="user_name" placeholder="Name">
        <br>
        <br>
        
        <input type="email" name="email" placeholder="Email">
        <br>
        <br>
        <textarea name="comments" placeholder="Comments"></textarea>

        <div class="btn_div">
             <button type="submit" name="send">Envoyer</button>
             <button type="submit" name="showResult">Afficher les avis</button>
        </div>
    </form>
  </fieldset>

  



</body>
</html>

