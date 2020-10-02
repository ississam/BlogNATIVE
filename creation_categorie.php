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
    include "Connection.php";
?>
   <main>
        <div class="container  " style="margin-top: 40px;">
            <div class="row justify-content-center">
                <form method="POST" action="Trait-categorie.php" class="w-50" enctype="multipart/form-data">  
                    <h1 class="text-center  text-white">Création  Catégorie</h1>

                <div class="form-group">
                    <label for="inputPassword4">Catégorie</label>
                    <input type="text" class="form-control" name="name">
                    
                </div> 
                <div class="wrapper">
                    <div class="box">
                        <div class="upload-options">
                            <label for="inputAddress">Image :</label>
                            <label>
                                <input type="file" class="image-upload" accept="image/*" name="image"  />
                            </label>
    </div>
  </div>


                <button type="submit" class="btn btn-primary" name="submit1">Ajouter</button>
            </form>
        </div>
    </div> 
    </main>
</body>
​
</html>