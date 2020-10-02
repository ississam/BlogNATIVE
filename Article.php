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
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

<!-- 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<link rel="shortcut icon" type="image/x-icon" href="/site_media/static/sportsblog/images/favicon/favicon.2d08c60b8ddd.ico" />

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,400i%7CLora:400,400i%7CWork+Sans:400,500,600,700,800,900" />


<link rel="stylesheet" href="/site_media/static/sportsblog/css/site.3fc7aed7ad8e.css" /> -->

<!-- <script language="javascript" type="text/javascript" > -->


<style>
.far1  {
   
    font-size: 40px;
    color: #c2c2c2;
 
   
}
 

           
        </style>

</head>
<body>
    
    <?php $varnav = 'home';
 include "NAV.php";
    ?>
   
<!-- ---------------------------------------articles -->

<main >

<div   style="margin-top: 65px;" >
<?php
if (isset($_GET["id_article"])) {
   
$id=$_GET["id_article"];
if(!empty($id)){


    include "Connection.php";      
            // $query="SELECT * FROM article WHERE  id_article=$id";
            $query="SELECT title, contenu,article.image,`date`, auteur.fullname,categorie.name,avatar,auteur.id_auteur FROM article , auteur , categorie WHERE article.id_auteur = auteur.id_auteur AND article.id_categorie = categorie.id_categorie AND id_article=$id";

            $result=$conn->query($query);
            $data=$result->fetchAll();  
            $image=$data[0]['image'];
            $title=$data[0]['title']; 
            $contenu=$data[0]['contenu'];
            $date=$data[0]['date'];
            $fullname=$data[0]['fullname'];
            $name=$data[0]['name'];
            $avatar=$data[0]['avatar'];
            $id_auteur=$data[0]['id_auteur'];


}
        }
?>

>   
<div class="row justify-content-center">





<div class="card col-lg-8 p-0 shadow  mx-3 my-4" >
     <div>
         <img src="Article/<?php echo  $image ?>" class="card-img-top p-4  " alt="" style="width: 100%;" >
     </div>   
      <div class="row " style="margin:10px 0 0 10px;">
      <!-- <i class="far fa-user-circle far1"></i>  -->
      <div>
      <a href='article_auteur.php?id_auteur=<?php echo $id_auteur?>'><img src="Avatar/<?php echo  $avatar ?>"  alt="" style=" width:70px"  >
</a>


      </div>
      <h5 style="margin:10px 0 0 10px;">   Auteur:<a href='article_auteur.php?id_auteur=<?php echo $id_auteur?>'><?php echo  $fullname ?></a></h5></div>
    
     <p>  <span class="badge badge-info"><?php echo  $name ?></span>  <span class="badge badge-success"><?php echo  $date ?></span> </p>
    <h3 class="p-3"> <?php echo  $title ?></h3>
    <p class="p-3"><?php echo  $contenu ?></p>


<!-- -----------------------------------commentaire ------------------------------->

     

<!-- -----------------------------------commentaire ------------------------------->
<h1 class="text-center text-dark">Commentaires</h1>
<?php

if (isset($_GET["id_article"])) {
   
    $id=$_GET["id_article"];

}


?>

        <div class="row bootstrap snippets">
    <div class="col-md-12 col-md-offset-2 col-sm-12">
        <div class="comment-wrapper">
            <div class="panel panel-info">
                    <ul class="media-list">
                    <?php  
        include "Connection.php";

       
        $affiche = $conn->prepare("SELECT * FROM commentaire WHERE id_article=$id");
        $affiche->execute();
        $result = $affiche->setFetchMode(PDO::FETCH_ASSOC);
        
        foreach($affiche->fetchAll() as $key=>$commentaire): ?>
        <!-- <p>Name:<?php echo  $commentaire['nickname']?></p>
        <p>Name:<?php echo  $commentaire['contenu_comm']?></p> -->
                        <li class="media my-4">
                            <a href="#" class="pull-left">
                                <img src="https://cdn4.vectorstock.com/i/1000x1000/06/18/male-avatar-profile-picture-vector-10210618.jpg" width="45" height="45" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
            
                                <strong class="text-success">@<?php echo  $commentaire['nickname']?></strong>
                                <p>
                                <?php echo  $commentaire['contenu_comm']?>
                                </p>
                                <!-- <div class="action">
                                    <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                        <span class="glyphicon   "><i class="fas fa-edit"></i></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" title="Approved">
                                        <span class="glyphicon "><i class="far fa-smile"></i> </span>
                                                                                                
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon "><i class="fa fa-trash"></i></span>
                                    </button>
                                </div> -->
                            </div>
                        </li>
                        <?php endforeach;
                                         ?> 

                    </ul>
                
            </div>
        </div>

    </div>
</div>



    <hr>      
               <form method="POST" action="Trait-commentaire.php" class="w-50 p-3">  
       
                   <div class="form-group">
                       <label for="inputPassword4">Nike Name:</label>
                       <input type="text" class="form-control" name="Name">
                      
                   </div>
       
       
       
                   <div class="form-group">
       <label for="exampleFormControlTextarea1">Commentaire :</label>
       <textarea class="form-control" id="exampleFormControlTextarea1" name="commentaire" rows="5"></textarea>
    
       </div>
       
       <input type="hidden"  name="id_article" value="<?php echo $_GET["id_article"]?>"/>

                   <button type="submit" class="btn btn-primary" name="submit3" onclick="validate()" >Ajouter</button>
               </form>
        
    





    </div>
        
    </div>
    </div>
    








</main>
</body>
</html>