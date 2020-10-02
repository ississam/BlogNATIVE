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
    
    if (isset($_GET["id_categorie"])) {
   
        $id=$_GET["id_categorie"];
        
     if(!empty($id))
     {
        $query="SELECT * FROM categorie WHERE  id_categorie=$id";
          
            $result=$conn->query($query);
            $data=$result->fetchAll(); 
            $id=$data[0]['id_categorie'];
            $name=$data[0]['name'];
            $image=$data[0]['image'];

        }

    }

    if (isset($_POST['submit2'])) {
        function test_input($data) {
            $data = trim($data);
           
            $data = stripslashes($data);
            $data = addslashes($data);
            $data = strip_tags($data);
            return $data;
          }
        $name=test_input($_POST['name']);
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileError = $_FILES['image']['error'];
        
        if($fileError === 0){
            $fileDestination = 'Categorie/'.$fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
        }else {
            echo "There was an error";
            
        }   
    

        $affiche = $conn->prepare("UPDATE categorie SET `name`='$name',`image`='$fileName' WHERE  id_categorie=$id");
        $affiche->execute();

    // header('Location: index.php');

    }

    
       
?>
   <main>
        <div class="container  " style="margin-top: 200px;">
            <div class="row justify-content-center">
                <form method="POST" action="" class="w-50" enctype="multipart/form-data">  
                    <h1 class="text-center  text-darck">Update  Catégorie</h1>

                <div class="form-group">

            
                    <label for="inputPassword4">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $name?>">
                    
                </div> 
                <div class="wrapper">
                    <div class="box">
                        <div class="upload-options">
                            <label for="inputAddress">Image :</label>
                            <label>
                                <input type="file" class="image-upload" accept="image/*" name="image" value="<?php echo $image?>" />
                                <img src="Categorie/<?php echo $image?>" alt="" style='width: 100px; height: auto;'>
                            </label>
    </div>
  </div>

 

                <button type="submit" class="btn btn-primary" name="submit2">Envoyer</button>
            </form>
        </div>
    </div> 
    </main>
</body>
​
</html>