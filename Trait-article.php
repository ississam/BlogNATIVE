<?php
     include "Connection.php";
if ( isset($_POST['submit']) ){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = addslashes($data);
        // $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
      }
    $name=test_input($_POST['Title']) ;//htmlent  ities?
    $contenu=test_input($_POST['contenu']) ;
    $date= date("Y-m-d H:i:s");//$_POST['date'];
    $id_categorie=test_input ($_POST['categorie']) ;
    $id_auteur=test_input($_POST['Auteur']) ;
    
    //print_r( $_FILES['image']);
    
    /*------------------------------Image---------------------------------------- -->*/
    $fileName = $_FILES['Image']['name'];
    $fileTmpName = $_FILES['Image']['tmp_name'];
    $fileError = $_FILES['Image']['error'];
    
    if($fileError === 0){
        $fileDestination = 'Article/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
    }else {
        echo "There was an error";
    }   

    /*------------------------------Image---------------------------------------- -->*/

if ($name&&$contenu&&$fileName&&$date&&$id_categorie&&$id_auteur) {
   
    $sql ="INSERT INTO article (`title`, `contenu`,`image`,`date`,`id_categorie`,`id_auteur`) VALUES ('$name' , '$contenu', '$fileName', '$date', '$id_categorie','$id_auteur')";
    // use exec() because no results are returned
    $conn->exec($sql);
   // echo "New record created successfully";
   // echo "Connected successfully";
    header("refresh:3, url=index.php");




}

else echo "Veuillez saisir tous les champs ";

}   
   

?>

