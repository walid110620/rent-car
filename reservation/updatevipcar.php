<?php
session_start();
@mysql_connect("localhost","root","");
@mysql_select_db("agence");
$id=$_GET['update'];
$req="SELECT * FROM reserv WHERE id='$id'";
$res=@mysql_query($req);
$row=@mysql_fetch_array($res);




if (isset($_POST['submit'])) {
    $ncar = strip_tags($_POST['name_Car']);
    $imgcar = strip_tags($_POST['pict_Car']);
    $days=strip_tags($_POST['days']);
    
    


$sql="UPDATE reserv SET days='$days' WHERE id='$id'";
$result=@mysql_query($sql);
if($result){
   header('location: reservationVip.php');
}else{
    echo "ERROR";
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../vipcar/AddCar.css">
    <title>UpdateCarvip</title>
    <link rel="icon" type="imag/png" href="../vipcar/bgi/title.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    



    </style>

</head>

<body>

<details>
    
    <summary>chose your page </summary>
    <label><a href="/myproget/admin/adminHome.php"> home  </a>  </label>
    <label><a href="/myproget/admin/admin.php"> admin  </a>  </label>
  
 
    <label><a href="AddCar.php"> Add Car </a>  </label>
    <label><a href="AllCars.php"> All Cars </a>  </label>
   </details>

  <div class="parenttitle">
      <h1>hi !</h1>
      <h2>entre the information Car would you like to changed </h2>
      
  </div>



  
      <div class="containerForm">
        <form method="post" action="">
        <div>  <img src="../vipcar/imgcar/<?php echo strip_tags($row['pict_Car']); ?>" width="200px" height="200px" alt="">  </div>
  <div> <?php echo strip_tags($row['name_Car']); ?> </div> 

            <input class="file" type="text"  value="<?php echo strip_tags($row['days']);?>"name="days" placeholder="picture Car" required>
            <input class="btn" type="submit" name="submit" value="update">

            </form>








   







 
</body>
</html>






   







 
