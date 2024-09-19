

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="detailesvip.css">
    <title>Document</title>

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
    <script defer src='js.js'></script>
</head>



<?php
session_start();
@mysql_connect('localhost', 'root', '');
@mysql_select_db('agence');
$id = $_GET['details'];
$req = "SELECT * FROM vip WHERE id= '$id' ";
$envoi = @mysql_query($req);
$result = @mysql_fetch_array($envoi);
?>

<body>

<a href="/myproget/index.php?=#vip"> <span class="fas fa-times"></span></a> 



<div id="bigwrap">
        <div class="wrapp">
    
        <div class="img">
            <img src="imgcar/<?php echo strip_tags($result['pict_Car']); ?> " alt="" height="400px" >
        </div>
    <div class="wrapinformation">
        
            <div class="nom">
                <h1> name: </h1>
                <span><?php echo strip_tags($result['name_Car']); ?></span>
            </div>
        
            <div class="type nom">
                <h1>type:</h1>
                <span> <?php echo strip_tags($result['type']); ?>  </span>
            </div>
            <div class="matricul nom">
                <h1>matricule:</h1>
                <span> <?php echo strip_tags($result['matricul_Car']); ?>  </span>
            </div>
            <div class="info nom">
                <h1>info:</h1>
                <span> <?php echo strip_tags($result['info_Car']); ?>  </span>
            </div>
            <div class="prix nom">
                <h1>price of day:</h1>
                <span> <?php echo strip_tags($result['prix_Car']); ?> dt  </span>
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

    $date_debut= strip_tags($_POST['datedebut']);
    $date_fine= strip_tags($_POST['datefine']);


    $name= strip_tags($result['name_Car']);
    $type= strip_tags($result['type']);
    // $id=$result['id'];
    $prix= strip_tags($result['prix_Car']);
    $pict= strip_tags($result['pict_Car']);
    $date_startt= strtotime($date_debut);
    $date_endd= strtotime($date_fine);


    $ech= ($date_endd-$date_startt)/60/60/24;
    


    $date="INSERT INTO reserv (id ,days ,name_Car ,pict_Car) value('$id','$ech','$name','$pict')";
    
    $resDate=@mysql_query($date);


    if($resDate){
   
    $date_start= strtotime($date_start);
    $date_end= strtotime($date_end);
    $price= strip_tags($result['prix_Car']);

   
    $somme= ($date_end-$date_start)/60/60/24;

    
    


   $result=$somme * $price ;
 
    }
 if($result>1){

  // echo $ech;
        $message= "the total is:  ".$result. "dt" .
        " if you really want this car <a  href='/myproget/index.php?=#contact'> <button class='button1' type='button'> Cantact us </button> <a/> " ;

     
}
else{
  echo (" `<script> alert('you must to choose one day atleast');</script>`");

}
// else{

//           $totale= $result  - ($result * 0.2) ;

//           $message2 = " congratulation we give you a 20% from the real price 
//               because you location our car a lot of 7 days " ."<br>"
//                . "old price is: " . $result . "dt" . " <br>" . "your new price is:  " . $totale . "dt" 
//                      . "<h1> if you really want this car  <a class='contact' href='/myproge/index.php?=#contact'> Cantact us <a/>  </h1>    ";
  
// }





}
?>


    <span class="wrapform">
     <a href="#totale">   <button type="button" name="reservation" class="btn">Reservé</button></a>
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
                <button class="btnn" type="submit" name="submit">calc</button>
               </div>
        </form>
       
        


    <div class="parentphp">

    <?php if(!empty($message)){
    ?>
      <div id="dialog">
       <h1> <?php echo $message ; ?>  </h1>
       <a href="/myproget/index.php?=#vip"> <span id='routoure' class="fas fa-times"></span></a> 
     <button type='button' id='imprim'>imprim</button>

    </div>


   <?php } ?>

   <!-- php if(!empty($message)){ -->
    

    <!-- <h1> php echo $message ;  </h1> -->


  <!-- php }  -->

  </div>

  </div>

  </span>

   



    
    
</div>



































<script lang="jvascript">
   const btn = document.getElementsByClassName("btn")[0];
   const form = document.getElementsByClassName("form")[0];

   btn.onclick = () => {
    form.classList.toggle("form");
   
};
   
</script>


















   








  
</body>
</html>
