 <?php
 session_start();
 if (!isset($_SESSION['nom'])) {
     header('Location: index.php');
     exit();
 }
 ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/admin.css">
    <title>Admin</title>
    <link rel="icon" type="imag/png" href="../image/title.png">
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
</head>
<body>


    <div id="pic">
        <img src="../image/marsaa3.jpg" alt="">

    </div>

    <div class="bigcontainer">
        <div class="header">
                    <div class="title">
                                <h1> welcome  <span> <?php echo strip_tags( $_SESSION['nom']); ?> ! </span>  
                              </h1>
                                    
                                
                                <h2>this is space for admin</h2>
                
                        </div>

                                <a class="admin" href="adminHome.php">home</a>


                       <a class="button" href="logoutA.php">log out</a>

                        </div>
                      
                        <div class="bigcont">
                     <div class="vipcar">
                     <a class="vip" href="../vipcar/allcarsvip.php">
                        vipCar
                        <i class="fa-solid fa-crown"></i>
                        </a>
                     </div>

                     <div id="vipp" class="bluee">
                     <a id="lou" class="blue" href="../reservation/reservationVip.php">
                        reservation table Vip :
                        </a>
                     </div>
                     <div class="bluee">
                     <a class="blue" href="../reservation/reservation.php">
                        reservation table :
                        </a>
                     </div>


                     </div>





                        <section>

              <div class="rapuser">
            <a  href="../adduser.php">add user </a>
            <a  href="addAdmin.php">add Admin  </a>
          
            <a  href="../allClient.php">delet user </a>
            <a  href="../allClient.php">All Users </a>
                
              </div>

           <div class="rapcar">
               <a href="../CarsPhp/AddCar.php">add car</a>
               <a href="../vipcar/addcarsvip.php">add car Vip</a>
                
                 <a href="../CarsPhp/AllCars.php"> delet car</a>
                 <a href="../CarsPhp/AllCars.php"> All Cars</a>
             
            
           </div>


                        </section>




      







                        </div>


 

  

   
      

  

         

        
   
  

</body>
</html>



