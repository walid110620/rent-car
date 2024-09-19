<?php
session_start();
@mysql_connect('localhost', 'root', '');
@mysql_select_db('agence');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ncar = '';
    $matcar = '';
    $infocar = '';
    $prixcar = '';
    $imgcar = '';
    if (isset($_POST['submit'])) {
        $ncar = strip_tags($_POST['name_Car']);
        $matcar = strip_tags($_POST['matricul_Car']);
        $infocar = strip_tags($_POST['info_Car']);
        $prixcar = strip_tags($_POST['prix_Car']);
        // $imgcar = strip_tags($_POST['pict_Car']);
        $type = strip_tags($_POST['type']);
            $nameFile="imgcar/".basename($_FILES['pict_Car']['name']);
        $imgcar=strip_tags($_FILES['pict_Car']['name']);
        $req = "INSERT INTO vip (name_Car,matricul_Car,info_Car,prix_Car,pict_Car,type)
        VALUES( '$ncar','$matcar','$infocar','$prixcar','$imgcar','$type')";
        $res = @mysql_query($req);
        if(move_uploaded_file($_FILES['pict_Car']['tmp_name'],$nameFile)){
            
        }
   
        if ($res) {
            // $message = 'Add successfully ';
          echo (" `<script> alert('add with succesfuly'); location.href='allcarsvip.php';   </script>`");

        }
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
    <title>AddCarvip</title>
    <link rel="icon" type="imag/png" href="../vipcar/bgi/title.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>



 
    </style>
</head>
<body>
<details>
    
    <summary>choise your page </summary>
    <label><a href="/myproget/admin/adminHome.php"> home  </a>  </label>
    <label><a href="/myproget/admin/admin.php"> admin  </a>  </label>
  
    <label><a href="addcarsvip.php"> Add Car </a>  </label>
    <label><a href="allcarsvip.php"> All Cars </a>  </label>
   </details>

  <div class="parenttitle">
      <h1>hi !</h1>
      <h2>entre the information Car would you like to add </h2>
      
  </div>

  
      <div class="containerForm">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="text" name="name_Car" placeholder="Name Car" required>
            <input type="text" name="matricul_Car" placeholder="matricul car" required>
            <input type="text" name="info_Car" placeholder="put information car " required>
            <input type="number" step="any" name="prix_Car" placeholder="prix car" required>
            <select name="type" id="" class="box">
              <option value="" disabled selected > auto / manuelle </option>
              <option value="auto" > auto </option>
              <option value="manuelle" >  manuelle </option>
            </select>
            <input class="file" type="file" name="pict_Car" placeholder="picture Car" required>
            <input class="btn" type="submit" name="submit" value="Add New Car" required>
            <!-- php if(!empty($message)){ 

<div class="success"> php echo $message ; <br>
  <span> click </span>   <a href="allcarsvip.php" class="here"> here</a> <br> <span> to see your cars </span> </div>

php }  -->
            </form>


            </div>






   







 
</body>
</html>