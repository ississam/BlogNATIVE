     
<?php
       
          
       if ( isset($_POST['submit3']) ){
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = addslashes($data);
            $data = strip_tags($data);
       
            return $data;
          }
        $Name= test_input($_POST['Name']) ;//htmlentities?
        $commentaire=test_input($_POST['commentaire'])  ; 
        
                if (!empty($Name)&&!empty($commentaire)) {
                   if (strlen($Name)>20) {
                    //    echo"votre nom ne doit pas dépasser les 20 caractéres";
                    echo "<script>alert(\"votre nom ne doit pas dépasser les 20 caractéres\")</script>";
                    
                    //    alert("votre nom ne doit pas dépasser les 20 caractéres");
                   }elseif (strlen($commentaire)>200) {
                    echo"votre commentaire ne doit pas dépasser les 200 caractéres";
                   }
                   else {
                    include "Connection.php";   
                    $id=$_POST["id_article"];
                   
                    $sql ="INSERT INTO commentaire (`nickname`, `contenu_comm`,`id_article`) VALUES ('$Name' , '$commentaire', '$id')";
                    $conn->exec($sql);
                    
                header('Location: Article.php?id_article='.$id);
                
                   }
                   
                
                }
                
    
    else echo "Veuillez saisir tous les champs ";
    
    }
       

   
   ?>