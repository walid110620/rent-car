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
    <link type="text/css" rel="stylesheet" href="../css/allClients.css">
    <title>allAdmin</title>
    <link rel="icon" type="imag/png" href="../image/title.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#em tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    $("#em tr:first").show();
  });
});
</script>


</head>
<body>
<input id="myInput" type="text" placeholder="Search..">

<details>
        <summary>choise your page </summary>
        <label><a href="adminHome.php"> home  </a>  </label>
        <label><a href="admin.php"> admin  </a>  </label>
        <label><a href="adduser.php"> add user  </a>  </label>
        <label><a href="allClient.php"> all user  </a>  </label>
       
       
        
        <label><a href="CarsPhp/AddCar.php"> Add Car </a>  </label>
        <label><a href="CarsPhp/AllCars.php"> All Cars </a>  </label>
       

    </details>
   
    <div class="container">
    <table border="1" id="em">
        <caption>list Admin</caption>
      
        <tr>
            <th>id</th>
          
            <th>email</th>
           
           
            <th class="red">delet</th>
            <th  class="blue">update</th>
            <th>date d'inscrit</th>
        </tr>
      
        <?php
       
        @mysql_connect("localhost","root","");
        @mysql_select_db("agence");
        $req="SELECT * FROM admin";
        $result=@mysql_query($req);
        while($res=@mysql_fetch_array($result)){
?>
       
        <tr>
            <td><?php echo strip_tags( $res['idA']) ; ?></td>
            <td><?php echo strip_tags( $res['emailA']) ; ?></td>
          
            <!-- <td>php echo strip_tags( $res['type']) ; ?></td> -->

            <td><a href="deletAdmin.php?delet=<?php echo  strip_tags($res['idA']) ; ?>">
              <input type="submit" value="Delet"> </a>
            
            </td>
            <td><a href="updateAdmin.php?update=<?php echo strip_tags( $res['idA']) ; ?>">
              <input class='walid' type="submit" value="update"> </a>
            
            </td>

            <td><?php echo strip_tags( $res['date']) ; ?></td>


          
        </tr>
       
      


        <?php } ?>
      
        </table>
        </div>
      
  
    
</body>
</html>