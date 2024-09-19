<?php
session_start();
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
    <title>Login</title>
    <link rel="icon" type="imag/png" href="image/title.png">
    
    <link type="text/css" rel="stylesheet" href="css/login.css" />

  </head>

  <body>
    <header class="header">
      <div id="menu-btn" class="fas fa-bars" style="display: none;"></div>
      <div class="paren-logo">
        
        <div class="logo">beauty</div>
        <span> cars </span>
      </div>
      <nav class="nav">
        <a href="#">home</a>
        <a href="#">about us</a>
        <a href="#">services</a>
        <a href="#">contact</a>
        <a href="#">offers</a>
      </nav>
      <div class="login">
        <i class="fas fa-user" style="display:none ;"></i>
        <a href="#" id="login">login</a>
      </div>
    </header>
    <!-- header nav and logo and then the btn in the media-screen -->
<?php

@mysql_connect("localhost","root","");
@mysql_select_db("agence");
// if (isset($_POST['nom'])){
// 	$nom = strip_tags($_REQUEST['nom']);
 
//   $_SESSION['nom'] =$nom;
// 	$password = strip_tags($_REQUEST['password']);
	
//     $query = "SELECT * FROM `clients` WHERE  nom='$nom' and password='".hash('sha256',$password)."'";
// 	$result =@mysql_query($query) or die(mysql_error());
	
// 	if (@mysql_num_rows($result) == 1) {
// 		$user =@mysql_fetch_assoc($result);
// 		// vérifier si l'utilisateur est un administrateur ou un utilisateur
// 		if ($user['type'] == 'admin') {
// 			header('location: admin.php');		  
// 		}else{
// 			header('location: user.php');
// 		}
// 	}else{
// 		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
// 	}
// }

if(isset($_REQUEST['nom'],$_REQUEST['password'])){
  $nom=strip_tags($_POST['nom']);
  $_SESSION['nom']=$nom;
  $pass=strip_tags($_POST['password']);
  $_SESSION['password']=$pass;
  
    $query="SELECT * FROM `clients` WHERE  email='$nom' and password='".hash('sha256',$pass)."'";
    $res=@mysql_query($query)or die(@mysql_error());
    $sqll=@mysql_fetch_array($res);
    if($sqll){
      header('location: user.php ')or die(@mysql_error());
    }else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }
  


























?>









    <div class="login-form-container">
    <a href="index.php"> <span class="fas fa-times" id="close-login-form"></span></a> 
      <form  action="" method="POST" >
        <h3>user login</h3>
        <input type="email" name="nom" placeholder="Enter Your email" class="box" required />
        <input type="password" name="password" placeholder="Password" class="box" required />

        <input type="submit" value="login now" class="btn" />
      
        <p>don't have an account <a href="adduser.php"> create one</a></p>

        <?php if(!empty($message)){ ?>
        <div class="check-login"><?php echo $message ; ?></div>

        <?php }?>
      </form>

   
      
    </div>
  </body>
</html>
