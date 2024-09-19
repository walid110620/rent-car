<?php

@mysql_connect("localhost","root","");
@mysql_select_db("agence");
$id=$_GET['delet'];

$sql="DELETE FROM admin WHERE idA='$id'";
@mysql_query($sql)or die("Error");


header('location: allAdmin.php');

?>