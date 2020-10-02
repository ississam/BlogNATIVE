<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://landkit.goodthemes.co/assets/fonts/Feather/feather.css">
    <link rel="stylesheet" href="card.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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

    <main>
        <div class="container " style="margin-top: 65px;">


            <h1 class="text-center text-white"> welcome to my Blog-Native</h1>

            <div class="row justify-content-center">

                <?php
                if (isset($_GET["id_categorie"])) {

                    $id = $_GET["id_categorie"];
                }
                ?>
                <?php
                include "Connection.php";
                $affiche = $conn->prepare("SELECT * FROM article WHERE id_categorie=$id");
                $affiche->execute();
                $result = $affiche->setFetchMode(PDO::FETCH_ASSOC);

                foreach ($affiche->fetchAll() as $key => $article) : ?>

<div class="col-md-4 mt-4">
    		    <div class="card profile-card-5 ">
    		        <div class="card-img-block">
    		            <img class="card-img-top" src="Article/<?php echo  $article['image'] ?>" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title"><?php echo  $article['title'] ?></h5>
                    <p class="card-text"><?php echo  substr($article['contenu'], 0, 150) ?></p>
                    <a type="button" href="Article.php?id_article=<?php echo $id ?>" class="btn btn-success  ">Voir Plus</a>
                  </div>
                  
                </div>	</div>
                <?php endforeach;
                ?>




            </div>


        </div>
    </main>
</body>

</html>