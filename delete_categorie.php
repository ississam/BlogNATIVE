<?php
if (isset($_GET["id_categorie"])) {
   
$id=$_GET["id_categorie"];

if(!empty($id))
{
 include "connection.php";
$query="DELETE FROM categorie WHERE  id_categorie=$id";
$a=$conn->exec($query);
header("refresh:3, url=categorie.php");
echo $id . '<br>';

echo $a . '<br>' ;
echo $query;
}

}

?>