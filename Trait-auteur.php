<?php
     include "Connection.php";
if ( isset($_POST['submit']) ){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = addslashes($data);
        $data = strip_tags($data);
        return $data;
      }
    
    $name=test_input ($_POST['fullname']) ;//htmlent  ities?
    $email=test_input ($_POST['email'])  ;
   
    //print_r( $_FILES['image']);
    
    /*------------------------------Image---------------------------------------- -->*/
    $fileName = $_FILES['avatar']['name'];
    $fileTmpName = $_FILES['avatar']['tmp_name'];
    $fileError = $_FILES['avatar']['error'];
    
    if($fileError === 0){
        $fileDestination = 'Avatar/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
    }else {
        // echo "There was an error";
        

       
    }   

    
    /*------------------------------Image---------------------------------------- -->*/

if ($name&&$email&&$fileName) {
   
    $sql ="INSERT INTO auteur (`fullname`, `email`,`avatar`) VALUES ('$name', '$email','$fileName')";
   
    // use exec() because no results are returned
    $conn->exec($sql);
   // echo "New record created successfully";
   // echo "Connected successfully";
   // header("refresh:3, url=catégorie.php");
   echo "Ajout auteur avec succés";
    header("refresh:3, url=creation_auteur.php");


}


else echo "Veuillez saisir tous les champs ";

if(empty($_POST['fullname'])){

session_start();
$_SESSION['danger'] = "There was an error";
header('location: creation_auteur.php');
}







}   
   

?>

