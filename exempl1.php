<?
   $photo=$_FILES['araPhaoto']; 
   $infosfichier = pathinfo($photo['name']);
   $extension_upload = $infosfichier['extension'];
   $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');     
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>njarabe</title></head>
    </head>
    <body>
      <?php
                         
                         
                                
                                  move_uploaded_file($photo['tmp_name'], 'uploads/' . basename($photo['name']));
                                  echo "L'envoi a bien été effectué !";
      
                  
         
      ?>  
    </body>
</html>
