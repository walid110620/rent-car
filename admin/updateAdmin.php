<?php
session_start();
if (!isset($_SESSION['nom'])) {
    header('Location: index.php');
    exit();
}

@mysql_connect('localhost', 'root', '');
@mysql_select_db('agence');
$id = $_GET['update'];
$req = "SELECT * FROM admin WHERE idA='$id'";
$res = @mysql_query($req);
$row = @mysql_fetch_array($res);

if (isset($_POST['submit'])) {
    $email = strip_tags($_POST['email']);

    $password = strip_tags($_POST['password']);
    $pass = strip_tags($_POST['pass']);

    if (!($password === $pass)) {
        $_SESSION['message'] = $message = 'please check your password !';
    } else {
        $sql ="UPDATE admin SET   emailA='$email' , passwordA='" .sha1($password) ."' WHERE idA='$id'";
        $result = @mysql_query($sql);
        if ($result) {
            header('location: allAdmin.php');
        } else {
            echo 'ERROR';
        }
    }
}
?>


    
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <title>Updateuser</title>
    <link rel="icon" type="imag/png" href="../image/title.png">
    
    
    <link  type="text/css"  rel="stylesheet" href="../css/adduser.css" />
    <style>
      .messMtp{
  
  padding:10px;
}
.messMtp h1{
  color:red; 
  font-size:2.5rem;
  font-style:italic
}
          details{
    color: white;cursor: pointer;display: flex;background-color:goldenrod;
    color: black;
     position: fixed;left:10px; top:0;border-radius: 1rem;
    
    }
    summary{
      list-style-type:disclosure-closed;font-size: 1.5rem;
      color:white;padding: 5px ; color:black
    }
    details label{
      margin: 10px;
      padding: 10px;display: inline-block;
    }
    details label a{
     transition: all 1s linear;font-size: 1.5rem;
      color: blue;
      text-decoration: underline;
    }
    details label a:visited{
      color:red;
    }
    details label:hover{
      transform: scale(1.1);
    }
    </style>
 
  </head>
 
  <body>
    <header class="header " style="padding:5px">
      <div id="menu-btn" class="fas fa-bars" style="display: none;"></div>
      <div class="paren-logo">
        
      <details class="goldenrod">
        <summary>choise your page </summary>
        <label><a href="adminHome.html"> home  </a>  </label>
        <label><a href="admin.php"> admin  </a>  </label>
        <label><a href="adduser.php"> add user  </a>  </label>
        <label><a href="allClient.php"> all user  </a>  </label>
      
      
        <label><a href="CarsPhp/AddCar.php"> Add Car </a>  </label>
        <label><a href="CarsPhp/AllCars.php"> All dCars </a>  </label>
      

    </details>
      </div>
      <nav class="nav">
        <a href="adminHome.php" style="color:red ; padding:20px">home</a>
        <a href="adminHome.php">home</a>
        <a href="adminHome.php?=#about-us">about us</a>
        <a href="adminHome.php?=#services">services</a>
        <a href="adminHome.php?=#offers">offers</a>
        <a href="adminHome.php?=#contact-us">contact</a>
      </nav>
      <div class="paren-logo">
        <div class="logo">  <a href="admin.php" style=color:red>admin</a></div>
      
      </div>
    </header>
    <!-- header nav and logo and then the btn in the media-screen -->


    <div class="big-container">
        
   <div class="parent-form">
         <form  method="POST" >
           <h3>please add your information</h3>
           <input type="email" name="email" id="email" value='<?php echo $row[
               'emailA'
           ]; ?>' placeholder="Email @: *" class="box" required/>
          
           <input type="password" name="password" id="password" value='<?php echo $row[
               'passwordA'
           ]; ?>' placeholder=" nouveau mot de pass: *" class="box" required/>
           <input type="password" name="pass" id="password" value='<?php echo $row[
               'passwordA'
           ]; ?>' placeholder="nouveau mot de pass: *" class="box" required/>
          
           <input name="submit" type="submit" value="update" class="btn" />

         


            
      
     
        

       
  

         </form>
         <?php if (!empty($message)) { ?>

          <div class="messMtp">
            <h1> <?php echo $_SESSION['message']; ?> </h1>
          </div>

          <?php } ?>




   </div>

   <div class="parent-img">
        <div class="slider">
          <div style="--i:1;"><img src="../image/a.webp" alt=""></div>
          <div style="--i:2;"><img src="../image/au.jpg" alt="" alt=""></div>
          <div style="--i:3;"><img src="../image/bmw.jpg" alt="" alt=""></div>
          <div style="--i:4;"><img src="../image/bou.jpg" alt="" alt=""></div>
          <div style="--i:5;"><img src="../image/rols.jpg" alt="" alt=""></div>
          <div style="--i:6;"><img src="../image/macedes.jpg" alt="" alt=""></div>
          <div style="--i:7;"><img src="../image/r.jpeg" alt="" alt=""></div>
          <div style="--i:8;"><img src="../image/jag.jpg" alt="" alt=""></div>
          <div style="--i:9;"><img src="../image/lamb.webp" alt="" alt=""></div>
        </div>
         
         
       </div>
  
    
    
      
    </div>
   
  </body>
</html>
<!-- inscription.php -->

