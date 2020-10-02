<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://landkit.goodthemes.co/assets/fonts/Feather/feather.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->


<style>

 /* main{

background-image: url(photos/aa.jpg);
background-repeat: no-repeat;
background-size: cover ;
background-position: 100%;
width: 100%;



}  */


</style>
</head>
<body>
    
    <?php $varnav = 'home';
 include "NAV.php";
    ?>
   
<!-- ---------------------------------------articles -->

<main >
<div  class="container  " style="margin-top: 65px;" >


<h1 class="text-center text-white"> welcome to my Blog-Native</h1>

<div class="row justify-content-center">

<?php
 if (isset($_GET["id_auteur"])) {
   
    $id=$_GET["id_auteur"];
 
}   
?>    
<?php  
        include "Connection.php";
        $affiche = $conn->prepare("SELECT * FROM article WHERE id_auteur=$id");
        $affiche->execute();
        $result = $affiche->setFetchMode(PDO::FETCH_ASSOC);
        
        foreach($affiche->fetchAll() as $key=>$article): ?>

<div class="card col-lg-3 p-0 shadow  mx-3 my-4" >

     <div>
         <img src="Article/<?php echo  $article['image']?>" class="card-img-top " alt="" style="width: 100%; height:200px" >
     </div>        
    <h3 class="p-3"> <?php echo  $article['title']?></h3>
    <p class="p-3"><?php echo  substr($article['contenu'], 0, 200).'................' ?></p>

     <div class="card-body ">

                <a type="button" href="Article.php?id_article=<?php echo  $article['id_article']?>"  class="btn btn-success  ">read more</a>
    </div>
       
</div>
<?php endforeach;
         ?> 

      


            </div>
         

            </div>
</main>
</body>
</html>