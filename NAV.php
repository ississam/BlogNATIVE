<?php 
  session_start();
  // echo $_SESSION['username'];
  
  ?>

<!DOCTYPE html>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="anim.css">
  <!-- font family -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
  <!-- font family -->

  <style>
    body {
      margin: 0;
      padding: 0;
      /* background-image: url('SVG/fond.png'); */
      /*max-width: 1100px;*/
    }



    .activeBar {
      font-weight: bold;



    }

    .colornav {
      background-color: #0CA4B2 !important;

    }

    .textcolor {

      color: white;
    }

    h1 {


  

    }

    h3,
    p,
    label {
      /* font-family: "Playfair Display"; */


    }

    /* ****************animation */
    /* NAVIGATION */
    nav {

      margin: 0 auto;

      padding: 50px 0;
      box-shadow: 0px 5px 0px #dedede;
    }

    nav ul {
      list-style: none;
      text-align: center;
    }

    nav ul li {
      display: inline-block;
    }

    /* nav ul li a {
      display: block;
      padding: 15px;
      text-decoration: none;
      text-transform: uppercase;

    }

    nav ul li a,
    nav ul li a:after,
    nav ul li a:before {
      transition: all .5s;
    } */

    /* nav ul li a:hover {
      color: #555;
    } */


    /* NAVIGATION */
    /* nav.fill ul li a {
      position: relative;
    } */

    /* nav.fill ul li a:after {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      width: 0%;
      content: '.';
      color: transparent;
      background: #aaa;
      height: 1px;
    } */


    /* nav.fill ul li a {
      transition: all 2s;
    }

    nav.fill ul li a:after {
      text-align: left;
      content: '.';
      margin: 0;
      opacity: 0;
    }

    nav.fill ul li a:hover {
      color: #fff;
      z-index: 1;
    }

    nav.fill ul li a:hover:after {
      z-index: -10;
      animation: fill 1s forwards;
      -webkit-animation: fill 1s forwards;
      -moz-animation: fill 1s forwards;
      opacity: 1;
    } */


    @-webkit-keyframes fill {
      0% {
        width: 0%;
        height: 1px;
      }

      50% {
        width: 100%;
        height: 1px;
      }

      100% {
        width: 100%;
        height: 100%;
        background: black;
      }
    }

    /* ****************animation */
  </style>
 
  <header class="bag text-white ">

    <nav class="navbar navbar-expand-md text-white navbar-light fixed-top bg-white colornav textcolor fill ">

      <a class="nav-link active  " id="active1" href="index.php">
        <!-- <h2>BLOG NATIVE</h2> -->
       
        <img src="assets/img/logo.png"  >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarCollapse">

        <ul class="navbar-nav mr-auto   text-white  ">

          <li class="nav-item px-1 active ">
            <a class="nav-link  text-white " href="index.php">Home</a>
          </li>


          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="Admin.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="creation_articl.php">Création Article</a>
              <a class="dropdown-item" href="creation_auteur.php">Création d'auteur</a>
              <a class="dropdown-item" href="categorie.php">AdMCatégorie</a>
            </div>
          </li> -->


          <!-- <li class="nav-item px-1">
            <a class="nav-link text-white" href="Admin.php">Admin</a>
          </li>
          <li class="nav-item px-1">
            <a class="nav-link  text-white " href="creation_articl.php">Création Article</a>
          </li>

     

          <li class="nav-item px-1">
            <a class="nav-link text-white " href="creation_auteur.php">Création d'auteur</a>
          </li>

          <li class="nav-item px-3">
            <a class="nav-link  text-white" href="categorie.php">AdMCatégorie</a>
          </li>

 -->


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catégories</a>
            <div class="dropdown-menu">


              <?php

              include "Connection.php";
              $affiche = $conn->prepare("SELECT  `id_categorie`, `name` FROM categorie");
              $affiche->execute();
              $result = $affiche->setFetchMode(PDO::FETCH_ASSOC);

              foreach ($affiche->fetchAll() as $key => $categorie) : ?>

                <a class="dropdown-item" href="article-categorie2.php?id_categorie=<?= $categorie['id_categorie'] ?>"><?php echo  $categorie['name'] ?></a>
              <?php endforeach;
              ?>
            </div>

          </li>

          <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="Admin.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Gérer
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="creation_articl.php">Nouveau Article</a>
                <!-- <a class="dropdown-item" href="Admin.php">Modifier  Article</a> -->
                <a class="dropdown-item" href="creation_auteur.php">Nouveau Auteur</a>
                <a class="dropdown-item" href="categorie.php">Gérer Catégories</a>
              </div>
            </li>
          <?php endif; ?>
          <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto fz-20">
                        <?php if (isset($_SESSION['username'])) : ?>
                          <li class="nav-item px-1 active ">
            <a class="nav-link  text-white " href="userFunctions.php?logout=1">Logout</a>
          </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#"ole="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Déconnecter
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">


                                    <a class="dropdown-item " href="userFunctions.php?logout=1">Logout</a>


                                </div>
                            </li> -->

                          
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="login.php">Login</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link text-white" href="register.php">Register</a>
                            </li> -->

                        <?php endif; ?>

                        </li>
                    </ul>

                </div>
          <!-- <li class="nav-item px-3">
            <a class="nav-link  text-white" href="login.php">Login</a>
          </li> -->

        </ul>



        <form class="form-inline" method="POST" action="Search.php">
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">

          <button type="submit" class="btn btn-primary"> Search </button>
        </form>
      </div>
    </nav>

  </header>