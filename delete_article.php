<?php
if (isset($_GET["id_article"])) {
   
$id=$_GET["id_article"];

if(!empty($id))
{
    include "connection.php";
$query="DELETE FROM article WHERE  id_article=$id";
$a=$conn->exec($query);
header("refresh:3, url=Admin.php");
echo $id . '<br>';


}

}

?>