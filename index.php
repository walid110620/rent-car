<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="icon" type="imag/png" href="image/title.png" />
    <title>index</title>

    <link type="text/css" rel="stylesheet" href="css/index.css" />
    <link type="text/css" rel="stylesheet" href="css/all.min.css" />
    <link type="text/css" rel="stylesheet" href="css/fontawesome.min.css" />

    <script defer src="js/acceuill.js"></script>
    
  </head>

  <body id="home">
 
    <!-- icons fixed -->
    <div class="wrapiconss">
      <a href="https://www.facebook.com/">
        <i class="fa-brands fa-facebook ic"></i>
      </a>
      <a href="https://twitter.com/i/flow/login">
        <i  class="fa-brands fa-twitter ic twi"></i>
      </a>
      <a href="https://www.linkedin.com/">
        <i class="fa-brands fa-linkedin"></i>
      </a>
    </div>

 

 
    <header class="header">
      <div id="menu-btn" class="fas fa-bars" style="display: none"></div>
      <div class="paren-logo">
        <div class="logo">rent</div>
        <span> cars </span>
      </div>
      <nav class="nav">
        <a href="#home">home</a>
        <a href="#about-us">about us</a>
       
        <a href="#services">services</a>
        <a class="vipcar" href="#vip"> vipCar</a>
        <a href="#offers">offers</a>
        <a href="#contact-us">contact us</a>
      </nav>
      <div class="login">
        <a href="login.php"
          ><i class="fas fa-user" style="display: none"></i
        ></a>
        <a href="login.php" id="login">login</a>
      </div>
    </header>



    <!-- section 1  slider image-->
    <section id="slider-img">
    
        <div class="wrapimg">
          <!-- http://localhost/myproge/ -->
        
        </div>
       
        
       
     
       
      
   
      <div class="parentbtn">
        <button id="hola" class="active fa-sharp fa-solid fa-circle" ></button>
        <button id="hola" class="btn1 cercle fa-sharp fa-solid fa-circle "> </button>
        <button id="hola" class="btn1 cercle fa-sharp fa-solid fa-circle "> </button>
        <button id="hola" class="btn1 cercle fa-sharp fa-solid fa-circle "> </button>
        <button id="hola" class="btn1 cercle fa-sharp fa-solid fa-circle "> </button>
        <button id="hola" class="btn1 cercle fa-sharp fa-solid fa-circle "> </button>
        <button id="hola" class="btn1 cercle fa-sharp fa-solid fa-circle "> </button>
        <button id="hola" class="btn1 cercle fa-sharp fa-solid fa-circle "> </button>
        <button id="hola" class="btn1 cercle fa-sharp fa-solid fa-circle "> </button>
        <button id="hola" class=" btn1 cercle fa-sharp fa-solid fa-circle "> </button>

        
      </div>
    </section>

    <!-- section 2  about us-->

    <section id="section2">
      <div class="parentsec2">
        <h1 id="about-us" class="title">about us</h1>
        <div class="parentabout">
          <div class="parenp">
            <p>
              we are a company for location cars here you can to found the best
              car would you like ever we are a company for location cars here
              you can to found the best car would you like ever we are a company
              for location cars here you can to found the best car would you
              like ever we are a company for location cars here you can to found
              the best car would you like ever
            </p>
          </div>
          <div class="parentimg">
            <img src="image/marsaa3.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- section 3  services -->

    <section id="section3">
      <div class="parentsec2 sec3">
        <h1 id="services" class="title">services</h1>

        <div class="services">
          <div class="card">
            <span>
              <i class="fa-solid fa-bolt-lightning"></i>
            </span>
            <h1>Quick</h1>
            <p class="par1">
              quick service with highest degree of percision ensures on time
              delivery, every time speedy road side assistance
            </p>
          </div>

          <div class="card">
            <span>
              <i class="fa-brands fa-angellist"></i>
            </span>
            <h1>Qualifide</h1>
            <p class="par1">
              they are recuited from the best technical institutes supported by
              toyota , are constatly groomed through toyota
            </p>
          </div>

          <div class="card">
            <span>
              <i class="fa-solid fa-check"></i>
            </span>
            <h1>Quality</h1>
            <p class="par1">
              A quality vehicle deserves a quality service. At toyota , quality
              check is inherent part of each process & the staff is committed.
            </p>
          </div>

          <div class="card">
            <span>
              <i class="fa-solid fa-couch"></i>
            </span>
            <h1>Comfort</h1>
            <p class="par1">
              A quality vehicle deserves a quality service. At toyota , quality
              check is inherent part of each process & the staff is committed.
            </p >
          </div>
        </div>
      </div>
    </section>

    <!-- vip cars -->

    <section id="section4">
      <div class="parentsec2 sec4">
      
      <h1 id="vip" class="title">
        
          <div class="span"> 
            <img class="vips" src="image/vip.jpg" alt="">
          </div> 
        </h1>
     
        <div class="wrapperoffer">

        <div class='wrapCar'>
          <?php
          @mysql_connect('localhost', 'root', '');
          @mysql_select_db('agence');
          $sql = 'SELECT * from vip ';
          $envoi = @mysql_query($sql);

           while ($row =@mysql_fetch_array($envoi)){ 
            $id=$row['id'];
            $sql2 = "SELECT * from `reserv` where id=$id";
            $envoi2 =@mysql_query($sql2);
          if($row2 =@mysql_fetch_array($envoi2)){ 
          echo (" 
          
           <div  class='cardCars gold black'>
           <div class='displayBlock'>
            <h1> this car come back <br> after <br>  ".$row2['days']." days : </h1>

           </div>

              <div class='img'>
                <img src= vipcar/imgcar/".$row['pict_Car']." />
                   
               
              </div>
              <h1>name:" .$row['name_Car']." </h1>
              <p>price of day:" .$row['prix_Car']." dt   </p>
              <p> type of car: ".$row['type']."  </p>
              <span>

                click <a id='btn2' href='vipcar/detailscarvip.php?details'=".$row['id' ].">
                    
                <button  class='btnn1 disable' type='button' disabled> here  </button></a>  <br />
                <br />
                <h1 style='color:red;'>  this car is rental </h1>
              </span>
           
              </div>");
            
           
         
    
        
    
    

          }else{
          echo (" <div class='cardCars gold'>

          <div class='img'>
            <img src=vipcar/imgcar/".$row['pict_Car']." />
               
           
          </div>
          <h1>name:" .$row['name_Car']." </h1>
          <p>price of day:".$row['prix_Car']." dt   </p>
          <p> type of car:".$row['type']."  </p>
          <span>

            click <a id='btn2' href=vipcar/detailscarvip.php?details=".$row['id' ].">
                
            <button  class='btnn1' type='button' > here  </button></a>  <br />
            <br />
           to see more details
          </span>
       
          </div>");
        
      
    

    



          }
        }
          ?>
          </div>
          </div>
          </div>
      
          
       
    </section>












    <!-- section 4  offers-->
    <section id="section5">
      <div class="parentsec2 sec4">
        <h1 id="offers" class="title">offers</h1>

        <div class="wrapperoffer">
          <h1 class="offer">
            if you rent our cars a lot of 7 days we give you 10% from price
            of car
          </h1>
  

          <div class="wrapCar">
          <?php
          @mysql_connect('localhost', 'root', '');
          @mysql_select_db('agence');
          $req = "SELECT * from cars ";
          $energi =@mysql_query($req);

           while ($res=@mysql_fetch_array($energi)){ 
            $id=$res['idCR'];
            $req2= "SELECT * from `reserve` where idCR=$id";
            $energi2 =@mysql_query($req2);
          if($res2=@mysql_fetch_array($energi2)){ 
          echo (" 
          
           <div  class='cardCars gold black'>
           <div class='displayBlock'>
            <h1> this car come back <br> after <br>  ".$res2['days']." days : </h1>

           </div>

              <div class='img'>
                <img src= CarsPhp/imag/".$res['pict_Car']." />
                   
               
              </div>
              <h1>name:" .$res['name_Car']." </h1>
              <p>price of day:" .$res['prix_Car']." dt   </p>
              <p> type of car: ".$res['type']."  </p>
              <span>

                click <a id='btn2' href='vipcar/detailscarvip.php?details'=".$res['idCR' ].">
                    
                <button  class='btnn1 disable' type='button' disabled> here  </button></a>  <br />
                <br />
               <h1 style='color:red;'>  this car is rental </h1>
              </span>
           
              </div>");
            
           
         
    
        
    
    

          }else{
          echo (" <div class='cardCars gold'>

          <div class='img'>
            <img src=CarsPhp/imag/".$res['pict_Car']." />
               
           
          </div>
          <h1>name:" .$res['name_Car']." </h1>
          <p>price of day:".$res['prix_Car']." dt   </p>
          <p> type of car:".$res['type']."  </p>
          <span>

            click <a id='btn2' href=detailsCar.php?details=".$res['idCR' ].">
                
            <button  class='btnn1' type='button' > here  </button></a>  <br />
            <br />
           to see more details
          </span>
       
          </div>");
        
      
    

    



          }
        }
          ?>
          
          </div>
        
        </div>
      </div>
    </section>
    <!-- footer contact us -->
    <footer>
      <div class="parentsec2 footer">
        <h1 id="contact-us" class="title">contact us</h1>
      </div>
      <div class="wrapMaps">
        <div class="map">
        <a href="https://www.google.com/maps/place/Bardo/@36.8123229,10.1124721,14z/data=!4m5!3m4!1s0x12fd33a56c24dcf3:0x6758bdc75879dcbe!8m2!3d36.8132516!4d10.1339164">
         <i class="fa-solid fa-location-dot localisation"></i>
         </a>
       <span class="box-shadow-for-location"></span> 
        </div>

        <div class="icons">
          <span class="facebook flex">
           <a href="https://www.facebook.com/"> 
            <i class="fa-brands fa-facebook ic face"></i> 
           
            </a>
            <a class="margi fac visi" href="https://www.facebook.com/">
              facebook
            </a>
          </span>

          <span class="twiter flex">
           <a href="https://twitter.com/i/flow/login"> <i class="fa-brands fa-twitter ic"></i> </a>
            <a class="margin twit visi" href="https://twitter.com/i/flow/login">
              twiter
            </a>
          </span>

          <span class="instagram flex">
          <a href="https://www.instagram.com/accounts/login/"> <i class="fa-brands fa-instagram ic"></i> </a> 
            <a
              class="margin visi"
              href="https://www.instagram.com/accounts/login/">     instagram</a>
            
          
       
          </span>

          <span class="whatsup flex wats">
            <i class="fa-brands fa-whatsapp ic"></i>
            <a class="margin what visi" href="">
                  <a  id="contact" href="#contact" class="  visi margi ">  +216 71 245 718  </a> 
        
          </span>

          <span class="youtube flex">
          <a href="https://www.youtube.com/"> <i class="fa-brands fa-youtube ic"></i> </a> 
            <a class="margin visi" href="https://www.youtube.com/"> youtube </a>
          </span>
        </div>
      </div>
    </footer>
<!-- scrool up -->
    <div class="scrol" id="scrol">
     <a href="#home" class="blue">  <i class="fa-sharp fa-solid fa-angle-up"></i> </a>
    </div>
  



     

  </body>
</html>
