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
    ?>
   <main >
   <div  class="container " > 



       
         <div class="container  " style="margin-top: 40px;">
             <div class="row justify-content-center ">
                 <form method="POST" action="" class="w-50">  
                     <h1 class="text-center  text-white">Modif Articles</h1>
                     <div class="form-row">
                     </div>
     
                     <div class="form-group">
                         <label for="inputPassword4">Title</label>
                         <input type="text" class="form-control" name="Title">
                         
                     </div>
                     <div class="form-group">
         <label for="exampleFormControlTextarea1">Contenu</label>
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
         
       </div>
     
                     <div class="form-group">
                         <label for="inputAddress2">Categorie</label>
                         <input type="text" class="form-control" name="Categorie">
                         
                     </div>
     ​
                     <div class="form-group">
                         <label for="inputAddress2">Auteur</label>
                         <input type="text" class="form-control" name="Auteur">
                         <span class="error">* champ obligatoire </span>
                     </div>
     ​
                    
     ​
     <div class="wrapper">
       <div class="box">
         <div class="js--image-preview"></div>
         <div class="upload-options">
           <label>
             <input type="file" class="image-upload" accept="image/*" name="Image"  />
           </label>
         </div>
       </div>
     
     
                     <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
                 </form>
             </div>
         </div>
   </div>



    </main>
</body>
​
</html>