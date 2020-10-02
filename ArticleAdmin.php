<link rel="stylesheet" href="card.css">
<main >
<div  class="container  " style="margin-top:120px;" >


<!-- <h1 class="text-center text-darck"> welcome to my Blog-Native</h1> -->

<div class="row justify-content-center">



<?php 
        
        include "Connection.php";
        $affiche = $conn->prepare("SELECT * FROM article order by date desc limit 20");
        $affiche->execute();
        $result = $affiche->setFetchMode(PDO::FETCH_ASSOC);
        
        foreach($affiche->fetchAll() as $key=>$article): ?>
<?php  $id=$article['id_article']?>



<!--Profile Card 5-->
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
<!-- 


            </div>
         

            </div>
</main>