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
 $varnav = 'add-article';
 include "NAV.php";
 ?>
   <main >
   <div  class="container "  >
       
<!-- htmlspecialchars
strip_tags
stripcslashes -->

       <div class="container " style="margin-top: 80px;">
           <div class="row justify-content-center">
               <form method="POST" action="Trait-article.php" class="w-50" enctype="multipart/form-data">  
                   <h1 class="text-center text-darck"> Article</h1>
                   <div class="form-row">
                   </div>
       
                   <div class="form-group">
                       <label for="inputPassword4">Title :</label>
                       <input type="text" class="form-control" name="Title">
                      
                   </div>
       
       
       
                   <div class="form-group">
       <label for="exampleFormControlTextarea1">Contenu :</label>
       <textarea   class="form-control "  rows="5" name="contenu" ></textarea>
      
       
       </div>
         
       <div class="form-group">
    <label for="exampleFormControlSelect1">Catégorie :</label>
    <select class="form-control" id="exampleFormControlSelect1" name="categorie">
    <?php 
        
                            include "Connection.php";
                            $affiche = $conn->prepare("SELECT  `id_categorie`, `name` FROM categorie");
                            $affiche->execute();
                            $result = $affiche->setFetchMode(PDO::FETCH_ASSOC);
                            
                            foreach($affiche->fetchAll() as $key=>$categorie): ?>
                                <option value="<?php echo  $categorie['id_categorie']?>"> <?php echo  $categorie['name']?> </option>";
                              
                                
                            <?php endforeach;
                             ?>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Auteur :</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Auteur">
     

    <?php 
        
        include "Connection.php";
        $affiche = $conn->prepare("SELECT * FROM auteur");
        $affiche->execute();
        $result = $affiche->setFetchMode(PDO::FETCH_ASSOC);
        
        foreach($affiche->fetchAll() as $key=>$auteur): ?>
            <option value="<?php echo  $auteur['id_auteur']?>"> <?php echo  $auteur['fullname']?> </option>";
          
            
        <?php endforeach;
         ?>

    </select>
  </div>
                   
       ​
       <div class="wrapper">
       <div class="box">
       <div class="js--image-preview"></div>

       Image :
       <div class="upload-options">
          
         <label>
           <input type="file" class="image-upload" accept="image/*" name="Image"  />
         </label>
         
       </div>
       
       </div>
       
       <!-- <label>Date de Création:</label>
  <input type="date" id="date1" name="date"> -->
                   <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
               </form>
           </div>
       </div>
</div>



  
    </main>
</body>
​
</html>