<?php

session_start();

@mysql_connect("localhost", "root", "");
@mysql_select_db("agence");

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $nom = "";
//     $prenom = "";
//     $email = "";
//     $tel = "";
//     $type = "";
//     $password = "";

        if (isset($_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['email'],$_REQUEST['tel'],$_REQUEST['password'], $_REQUEST['pass'] )){
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $email = strip_tags($_POST['email']);
        $tel = strip_tags($_POST['tel']);
        // $type = strip_tags($_POST['type']);
        $password = strip_tags($_POST['password']);
        $pass = strip_tags($_POST['pass']);

        if (!($password==$pass)){
          // $_SESSION['mespass']=$passs="please check your password";
          echo (" `<script> alert('please check your password');</script>`");

          
        }
        else{

        $query= @mysql_query( "SELECT * FROM clients WHERE email='$email'");
        if(@mysql_num_rows($query)>0){
          // $_SESSION['mail']=$mess="this email is already use please choose another one";
          echo (" `<script> alert('this email is already use please choose another one');</script>`");

        }
        else{

        $req = "INSERT INTO clients (nom,prenom,email,tel,password) VALUES ('$nom','$prenom','$email','$tel','".hash('sha256',$password)."')";
        $result=@mysql_query($req);
        
        if($result){
          // $_SESSION['message']=$message="add with seccessfully";

          echo (" `<script> alert('add with succesfuly'); location.href='login.php';   </script>`");
        }
    

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
    <title>Adduser</title>
    
    
    <link  type="text/css"  rel="stylesheet" href="css/adduser.css" />
    <link rel="icon" type="imag/png" href="image/title.png">

 
  </head>
 
  <body>
    <header class="header ">
      <div id="menu-btn" class="fas fa-bars" style="display: none;"></div>
      <div class="paren-logo">
        
      <div class="logo">beauty</div>
        <span> cars </span>
      </div>
      <nav class="nav">
        <a href="index.php">home</a>
        <a href="index.php?=#about-us">about us</a>
        <a href="index.php?=#services">services</a>
        <a href="index.php?=#offers">offers</a>
        <a href="index.php?=#contact-us">contact</a>
      </nav>
      <div class="paren-logo">
        <div class="logo">  <a href="login.php" style=color:red>login</a></div>
       
      </div>
    </header>
    <!-- header nav and logo and then the btn in the media-screen -->
 
    <div class="big-container">
        
   <div class="parent-form">
         <form  action="" method="POST" >
           <h3>please add your information</h3>
           <input type="text" name="nom" id="nom"  placeholder=" name: *" class="box" required/>
           <input type="text"name="prenom" id="prenom"  placeholder="first name: *" class="box" required/>
           <input type="email" name="email" id="email" placeholder="Email @: *" class="box" required/>
           <input type="tel" name="tel" id="tel" placeholder="tel: *" class="box" required/>
           <!-- <select name="type"  id="sel" class="box select" required>
             <option value="" class="box" disebled selected  >select</option>
             <option value="admin" class="box" disabled >admin</option>
             <option value="user" class="box" >user</option>
           </select> -->
           <input type="password" name="password" id="pas" placeholder="password: *" class="box" required/>
         
           <input type="password" name="pass" id="password" placeholder="confirm your password *" class="box" required/>
          
           <input name="submit" type="submit" value="Inscrit" class="btn" />

           <!-- php if(!empty($message)){ ?>

            <div class="success"> php echo $_SESSION['message'] ; <br>
              <span> click </span>   <a href="login.php" class="here"> here</a> <br> <span> to cameback home </span> </div>

            php }  -->
            <!-- php if(!empty($passs)){ 

                  <div class="success" style="color:red ; font-size: 3rem;">  php echo $_SESSION['mespass'] ;  ! </div>

              php }  -->

          
      
      


            
      
     
        

       
  

         </form>
   </div>

       <div class="parent-img">
        <div class="slider">
          <div style="--i:1;"><img src="image/a.webp" alt=""></div>
          <div style="--i:2;"><img src="image/au.jpg" alt="" alt=""></div>
          <div style="--i:3;"><img src="image/bmw.jpg" alt="" alt=""></div>
          <div style="--i:4;"><img src="image/bou.jpg" alt="" alt=""></div>
          <div style="--i:5;"><img src="image/rols.jpg" alt="" alt=""></div>
          <div style="--i:6;"><img src="image/macedes.jpg" alt="" alt=""></div>
          <div style="--i:7;"><img src="image/r.jpeg" alt="" alt=""></div>
          <div style="--i:8;"><img src="image/jag.jpg" alt="" alt=""></div>
          <div style="--i:9;"><img src="image/lamb.webp" alt="" alt=""></div>
        </div>
         
         
       </div>
      </div>
  
    
    
      
    </div>

    <?php if(!empty($mess)){ ?>

      <h1 class="email"> <?php echo $_SESSION['mail'] ; ?> </h1> 
      <?php } ?>


   
  </body>
</html>
<!-- inscription.php -->

