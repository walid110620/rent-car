

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/detailsCar.css">
    <title>detailsCar</title>

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
    <script defer src="js/jsdetails.js"></script>
    
</head>



<?php
session_start();
@mysql_connect('localhost', 'root', '');
@mysql_select_db('agence');
$id = $_GET['details'];
$req = "SELECT * FROM cars WHERE idCR= '$id' ";
$envoi = @mysql_query($req);
$result = @mysql_fetch_array($envoi);
?>

<body>

<a href="index.php?=#offers"> <span class="fas fa-times"></span></a> 



<div id="bigwrap">
        <div class="wrapp">
    
        <div class="img">
            <img src="CarsPhp/imag/<?php echo $result['pict_Car']; ?> " alt="" height="400px" >
        </div>
    <div class="wrapinformation">
        
            <div class="nom">
                <h1> name: </h1>
                <span><?php echo $result['name_Car']; ?></span>
            </div>
        
            <div class="type nom">
                <h1>type:</h1>
                <span> <?php echo $result['type']; ?>  </span>
            </div>
            <div class="matricul nom">
                <h1>matricule:</h1>
                <span> <?php echo $result['matricul_Car']; ?>  </span>
            </div>
            <div class="info nom">
                <h1>info:</h1>
                <span> <?php echo $result['info_Car']; ?>  </span>
            </div>
            <div class="prix nom">
                <h1>price of day:</h1>
                <span> <?php echo $result['prix_Car']; ?> dt  </span>
            </div>
    </div>
    </div>
    <!-- info image done now calcul -->

    <?php 
$date_start="";
$date_end="" ; 
$totale="";
$message="";
$price="" ; 
$somme="";
$message2=""; 
if(isset($_POST['submit'])){
    $date_start= strip_tags($_POST['datedebut']);
    $date_end= strip_tags($_POST['datefine']);
   $name= strip_tags($result['name_Car']);
    $type= strip_tags($result['type']);
    // $id=$result['id'];
    $prix= strip_tags($result['prix_Car']);
    $pict= strip_tags($result['pict_Car']);

    $date_debut= strip_tags($_POST['datedebut']);
    $date_fine= strip_tags($_POST['datefine']);

   
    
    $date_startt= strtotime($date_debut);
    $date_endd= strtotime($date_fine);


    $ech= ($date_endd-$date_startt)/60/60/24;
    


    $date="INSERT INTO reserve (idCR ,days ,name_Car ,pict_Car) value('$id','$ech','$name','$pict')";

    
    $resDate=@mysql_query($date);


    if($resDate){
   
    $date_start= strtotime($date_start);
    $date_end= strtotime($date_end);
    $price=strip_tags($result['prix_Car']);

   
    $somme= ($date_end-$date_start)/60/60/24;

    
    


   $result=$somme * $price ;
 
    }

    if($result<1){
    
        echo (" `<script> alert('you must to choose one day atleast');</script>`");
      
          
}
else{


    
 if($somme <= 7){

        $message= " the total is::  ". $result . "dt" . "<br>".
        " if you really want this car <a  href='index.php?=#contact'> <button class='button1' type='button'> Cantact us </button> <a/>  " ;
}

else{

          $totale= $result  - ($result * 0.1) ;

          $message2 = " congratulation we give you a 10% from the real price 
              because you rent our car a lot of 7 days " ."<br>"
               . "old price is: " . $result . "dt" . " <br>" . "your new price is:  " . $totale . "dt" . "<br>" . "<br>".
        " if you really want this car  <a  href='index.php?=#contact'> <button class='button1' type='button'> Cantact us </button> <a/>   " ;
  
}






}
}
?>


    <span class="wrapform">
     <a href="#totale">   <button type="button" class="btn">Reservé</button></a>
     <div class="wrapping">


        <form method="POST" action="" class="form">
      <div class="rap">
        <label for=""> date start:</label>
              
         <input type="date" name="datedebut" required>
              
      </div>
      <div class="rap">
        <label for=""> date end:</label>
              
             <input type="date" name="datefine" required >
</div>
        

             <div class="wraptotal">
                <button id="calc" class="btnn" type="submit" name="submit">calc</button>
               </div>


        </form>
       
    


    <div class="parentphp">

    <?php if(!empty($message)){
    ?>
    <div id="dialog">

     <h1>  <?php echo $message ; ?> </h1> 
     <a href="/myproget/index.php?=#offers"> <span id='routoure' class="fas fa-times"></span></a>

     <button type='button' id='imprim'>imprim</button>

     </div>

    


   <?php } ?>

   <?php if(!empty($message2)){
    ?>

<div id="dialog">
     <h1> <?php echo $message2 ; ?>  </h1>  
     <a href="/myproget/index.php?=#offers"> <span id='routoure' class="fas fa-times"></span></a> 
     <button type='button' id='imprim'>imprim</button>

     </div>

    

      


  <?php } ?>

  </div>

  </div>

  </span>

   




    
</div>





















































   








  
</body>
</html>
