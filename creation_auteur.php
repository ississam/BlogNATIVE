<!DOCTYPE html>
<html lang="fr">
​
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
.error {color: #FF0000;}


</style>
</head>
​
<body >
<?php
 include "NAV.php";
 session_start();
    ?>
   <main >


   <?php 
   
   if(isset($_SESSION['danger'])):?>

    <div class="alert alert-danger" role="alert">
    <?php
    
      $message = $_SESSION['danger'];
      echo $message;
    
    
    ?>


      </div>
      <?php 
   endif;
    
    ?>
   
    
    
    
    





    <div class="container" style="margin-top: 80px;">
        <div class="row justify-content-center">
            <form method="POST" action="Trait-auteur.php" class="w-50" enctype="multipart/form-data">  
                <h1 class="text-center text-darck">Auteur</h1>
                <div class="form-row">
                </div>

                <div class="form-group">
                    <label for="inputPassword4">Nom & Prénom :</label>
                    <input type="text" class="form-control" name="fullname" >
                    
                </div>
                <div class="form-group">
                    <label for="inputAddress">Email :</label>
                    <input type="text" class="form-control" name="email" required >
                    
                </div>
                
               
​
<div class="wrapper">
  <div class="box">
    <div class="js--image-preview"></div>
    <div class="upload-options">
    <label for="inputAddress">Avatar :</label>
      <label>
        <input type="file" class="image-upload" accept="image/*" name="avatar"  />
      </label>
    </div>
  </div>


                <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
            </form>
        </div>
    </div>
    </main>
</body>
​
</html>