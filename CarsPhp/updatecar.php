<?php
session_start();
@mysql_connect("localhost","root","");
@mysql_select_db("agence");
$id=$_GET['update'];
$req="SELECT * FROM cars WHERE idCR='$id'";
$res=@mysql_query($req);
$row=@mysql_fetch_array($res);




if (isset($_POST['submit'])) {
    $ncar = strip_tags($_POST['name_Car']);
    $matcar = strip_tags($_POST['matricul_Car']);
    $infocar = strip_tags($_POST['info_Car']);
    $prixcar = strip_tags($_POST['prix_Car']);
    $imgcar = strip_tags($_POST['pict_Car']);
    $type = strip_tags($_POST['type']);


$sql="UPDATE cars SET `type`='$type', name_Car='$ncar' , matricul_Car='$matcar' , info_Car='$infocar' , prix_Car='$prixcar' , pict_Car='$imgcar' WHERE idCR='$id'";
$result=@mysql_query($sql);
if($result){
   header('location: AllCars.php');
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
    <link type="text/css" rel="stylesheet" href="AddCar.css">
    <title>UpdateCar</title>
    <link rel="icon" type="imag/png" href="imag/title.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    



    </style>

</head>

<body>

<details>
    
    <summary>chose your page </summary>
    <label><a href="/myproget/admin/adminHome.php"> home  </a>  </label>
    <label><a href="/myproget/admin/admin.php"> admin  </a>  </label>
    <label><a href="/myproget/adduser.php"> add user  </a>  </label>
    <label><a href="/myproget/allClient.php"> all user  </a>  </label>
 
    <label><a href="AddCar.php"> Add Car </a>  </label>
    <label><a href="AllCars.php"> All Cars </a>  </label>
   </details>

  <div class="parenttitle">
      <h1>hi !</h1>
      <h2>entre the information Car would you like to changed </h2>
      
  </div>

  
      <div class="containerForm">
        <form action="#" method="POST">
            <input type="text" name="name_Car" value="<?php echo strip_tags($row['name_Car']); ?> " placeholder="Name Car" required>
            <input type="text" name="matricul_Car"  value="<?php echo strip_tags($row['matricul_Car']); ?> "  placeholder="matricul car" required>
            <input type="text" name="info_Car"  value="<?php echo strip_tags($row['info_Car']); ?> "  placeholder="put information car " required>
            <input type="text" step="any"  name="prix_Car"  value="<?php echo strip_tags($row['prix_Car']); ?> "  placeholder="prix car" required>
            <select name="type" id="" class="box">
              <option value="" disabled selected > auto / manuelle </option>
              <option value="<?php echo strip_tags($row['type']); ?>" > auto </option>
              <option value="<?php echo strip_tags($row['type']); ?>" >  manuelle </option>
            </select>
            <input class="file" type="file"  value="<?php echo strip_tags($row['pict_Car']); ?> "  name="pict_Car" placeholder="picture Car" required>
            <input class="btn" type="submit" name="submit" value="update">

            </form>








   







 
</body>
</html>






   







 
</body>
</html>