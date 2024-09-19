<?php

@mysql_connect("localhost","root","");
@mysql_select_db("agence");
$id=$_GET['delet'];

$sql="DELETE FROM reserv WHERE id='$id'";
@mysql_query($sql)or die("Error");


header('location: reservationVip.php');

?>