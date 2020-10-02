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

</head>
<body>
<?php
 include "NAV.php";
    ?>
<main style="margin-top: 60px;">
    <div class="container-fluid ">
    <nav class="col-lg-3 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Menu : <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Articles
            </a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Auteurs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Images
            </a>
          </li>
          
        </ul>
</div>
</nav>
<div class="row">
<div class="col-lg-4 " >


<div class="card p-0 shadow" >
     <div>
         <img src="photos/photo-2.jpg" class="card-img-top " alt="" style="width: 100%;" >
     </div>        
     <form class="mt-3">
        <div class="form-group mx-3">

          <input type="text" class="form-control form-control-flush " id="formGroupExampleInput" placeholder="Name">
        </div>
        <div class="form-group mx-3">

          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
        </div>
        <div class="form-group mx-3">
    
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
          </div>
      </form>


            <div class="card-body ">
                <button type="button" class="btn btn-success  ">Download a samle</button></div>
       
       
            </div>

            </div>




</div>

<div class="col-lg-3 " >


<div class="card  p-0 shadow" >
     <div>
         <img src="photos/photo-2.jpg" class="card-img-top " alt="" style="width: 100%;" >
     </div>        
     <form class="mt-3">
        <div class="form-group mx-3">

          <input type="text" class="form-control form-control-flush " id="formGroupExampleInput" placeholder="Name">
        </div>
        <div class="form-group mx-3">

          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
        </div>
        <div class="form-group mx-3">
    
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
          </div>
      </form>


            <div class="card-body ">
                <button type="button" class="btn btn-success  ">Download a samle</button></div>
       
       
            </div>

            </div>






</div>
</div>
</main>






</body>
</html>