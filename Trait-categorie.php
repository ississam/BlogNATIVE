<?php
     include "Connection.php";
if ( isset($_POST['submit1']) ){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = addslashes($data);
        $data = strip_tags($data);
        return $data;
      }
    $name= test_input($_POST['name']) ;//htmlent  ities?

    //print_r( $_FILES['image']);
    
    /*------------------------------Image---------------------------------------- -->*/
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileError = $_FILES['image']['error'];
    
    if($fileError === 0){
        $fileDestination = 'Categorie/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
    }else {
        echo "There was an error";
    }   

    
    /*------------------------------Image---------------------------------------- -->*/

if ($name&&$fileName) {
   
    $sql ="INSERT INTO categorie (`name`, `image`) VALUES ('$name' , '$fileName')";
   
    // use exec() because no results are returned
    $conn->exec($sql);
   // echo "New record created successfully";
    echo "Connected successfully";
    header("refresh:3, url=categorie.php");




}

else echo "Veuillez saisir tous les champs ";

}   

?>