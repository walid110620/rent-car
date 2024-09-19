<?php

@mysql_connect("localhost","root","");
@mysql_select_db("agence");
$id=strip_tags($_GET['delet']);

$sql="DELETE FROM cars WHERE idCR='$id'";
@mysql_query($sql)or die("Error");


header('location: AllCars.php');

?>