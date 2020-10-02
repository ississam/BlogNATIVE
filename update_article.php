<!DOCTYPE html>
<html lang="fr">
​
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>


<!---------------------------------------------- editor------------------------------------- -->
 


<!---------------------------------------------- editor------------------------------------- -->
    <style>
.error {color: #FF0000;}


</style>
</head>
​
<body>

<?php
// $varnav = 'add-article';
 include "NAV.php";
 ?>
  <!-- -----------------------Update_article------------------------- -->

<?php
    include "Connection.php";
    
    if (isset($_GET["id_article"])) {
   
        $id=$_GET["id_article"];
        
     if(!empty($id))
     {
       // $query="SELECT * FROM article WHERE  id_categorie=$id";

        $query="SELECT title, contenu,article.image,`date`, auteur.fullname,categorie.name,categorie.id_categorie FROM article , auteur , categorie WHERE article.id_auteur = auteur.id_auteur AND article.id_categorie = categorie.id_categorie AND id_article=$id";

          
            $result=$conn->query($query);
            $data=$result->fetchAll(); 
            $image=$data[0]['image'];
            $title=$data[0]['title']; 
            $contenu=$data[0]['contenu'];
            $fullname=$data[0]['fullname'];
            $name=$data[0]['name'];
            $id_category=$data[0]['id_categorie'];



        }

    }
    $id=$_GET["id_article"];

    if (isset($_POST['submit1'])) {
      {
        function test_input($data) {
          $data = trim($data);  
          $data = stripslashes($data);
          $data = addslashes($data);
          $data = strip_tags($data);
          return $data;
        }

        if(!empty(test_input($_POST['Title']))&&!empty(test_input($_POST['contenu']))&&!empty(test_input($_POST['categorie']))&&!empty(test_input($_POST['Auteur'])))

        $title=test_input($_POST['Title']);//htmlent  ities?
        $contenu=test_input($_POST['contenu']);
        $date= date("Y-m-d H:i:s");//$_POST['date'];
        $id_categorie=test_input($_POST['categorie']);
        $id_auteur=test_input($_POST['Auteur']);
      } 
        $fileName = $_FILES['Image']['name'];
        $fileTmpName = $_FILES['Image']['tmp_name'];
        $fileError = $_FILES['Image']['error'];


        if(!empty($fileName)){

            if($fileError === 0){
                $fileDestination ='Article/'.$fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
            }else {
                echo "There was an error";
            }   
        

            $affiche = $conn->prepare("UPDATE article SET `title`='$title',`contenu`='$contenu',`date`='$date',`image`='$fileName',`id_categorie`='$id_categorie',`id_auteur`='$id_auteur' WHERE  id_article=$id");
            $affiche->execute();
            // header('Location: Article.php?id_article='.$id);
    }
    $affiche = $conn->prepare("UPDATE article SET `title`='$title',`contenu`='$contenu',`date`='$date',`id_categorie`='$id_categorie',`id_auteur`='$id_auteur' WHERE  id_article=$id");
    $affiche->execute();
    // header('Location: Article.php?id_article='.$id);


    }
   
    
       
?>
 <!-- -----------------------Update_article------------------------- -->

   <main >
  
       


       <div class="container " style="margin-top: 80px;">
           <div class="row justify-content-center">
               <form method="POST" action="" class="w-50" enctype="multipart/form-data">  
                   <h1 class="text-center text-darck" >Update Articles</h1>
                   <div class="form-row">
                   </div>
                   
                   <div class="form-group">
                       <label for="inputPassword4">Title :</label>
                       <input type="text" class="form-control" name="Title" value="<?= $title?>">
                       
                   </div>
       
       
       
                   <div class="form-group ">
       <label for="exampleFormControlTextarea1">Contenu :</label>
       <textarea   class="form-control "  rows="5" cols="50" name="contenu" ><?= $contenu?></textarea>
       
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
                            <?php
                            
                            if ($id_category=== $categorie['id_categorie']) {
                               
                            
                            
                            ?>
                
                                <option value="<?php echo  $categorie['id_categorie']?>"selected> <?php echo  $categorie['name']?> </option>";
                                <?php
                            }
                            else {
                            ?>
                                    <option value="<?php echo  $categorie['id_categorie']?>"> <?php echo  $categorie['name']?> </option>";
                
                                    <?php

                                      } 

                                     ?>
                             
                            <?php endforeach;
                             ?>
    </select>
   
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1">Auteur :</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Auteur">
     

    <?php 
        
        include "Connection.php";
        $affiche = $conn->prepare("SELECT `id_auteur`, `fullname` FROM auteur");
        $affiche->execute();
        $result = $affiche->setFetchMode(PDO::FETCH_ASSOC);
        
        foreach($affiche->fetchAll() as $key=>$auteur): ?>
         <?php
    
       if ($fullname===$auteur['fullname']) {
          ?>
                
            <option value="<?php echo  $auteur['id_auteur']?>"selected> <?php echo  $auteur['fullname']?> </option>";
            <?php
             }
            else {
            ?>
                    
            <option value="<?php echo  $auteur['id_auteur']?>"> <?php echo  $auteur['fullname']?> </option>";
                
              <?php

                    } 

                ?>          
            
        <?php endforeach;
         ?>

    </select>
    <!-- <p>Ancien Auteur:<?= $fullname?></p>
    
    <p>ID:<?= $id?></p> -->

  </div>
                   
       ​
       <div class="wrapper">
       <div class="box">
       <div class="js--image-preview"></div>

       Image :
       <div class="upload-options">
          
         <label>
           <input type="file" class="image-upload" accept="image/*" name="Image"  />
           <img src="Article/<?php echo $image?>" alt="" style='width: 100px; height: auto;'>

         </label>
         
       </div>
       
       </div>
       
       <!-- <label>Date de Création:</label>
  <input type="date" id="date1" name="date"> -->
                   <button type="submit" class="btn btn-primary" name="submit1">Envoyer</button>
               </form>
           </div>
       </div>


  
    </main>
</body>
​
</html>