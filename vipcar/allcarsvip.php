<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="allcars.css">
    <title>AllCarsvip</title>
    <link rel="icon" type="imag/png" href="bgi/title.png">
    <style>
    




    

    </style>
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
<details class="goldenrod">
    
        <summary>choise your page </summary>
        <label><a href="/myproget/admin/adminHome.php"> home  </a>  </label>
        <label><a href="/myproget/admin/admin.php"> admin  </a>  </label>
      
      
        <label><a href="addcarsvip.php"> Add Car </a>  </label>
    <label><a href="allcarsvip.php"> All Cars </a>  </label>
       </details>

   
       
      
        <table border="1" id="em">
            <caption>list cars</caption>
            <tr>
                <th>id</th>
                <th>Name Car</th>
                <th>matricul car</th>
                <th>information car</th>
                <th>prix car</th>
                <th>type</th>
                <th>picture Car</th>
                <th>Delet</th>
                <th>update</th>
                <th>date d'inscrit</th>
            </tr>

            <?php
            session_start();
            @mysql_connect('localhost', 'root', '');
            @mysql_select_db('agence');
            $req = 'SELECT * FROM vip ';
            $envoi = @mysql_query($req);
            while ($row = @mysql_fetch_array($envoi)) { ?>

<tr>
                <th class="th2"><?php echo strip_tags($row['id']); ?>   </th>
                <th class="th2"><?php echo strip_tags($row['name_Car']); ?></th>
                <th class="th2"><?php echo strip_tags($row['matricul_Car']); ?></th>
                <th class="th2"><?php echo strip_tags($row['info_Car']); ?></th>
                <th class="th2"><?php echo strip_tags($row['prix_Car']); ?></th>
                <th class="th2"><?php echo strip_tags($row['type']); ?></th>
                <th class="th2">   <img src="imgcar/<?php echo strip_tags($row['pict_Car']); ?> " alt="" width="100px" height="100px">         </th>

                <th><a href="deletcarvip.php?delet=<?php echo strip_tags($row['id']); ?>">
              <input type="submit" value="Delet"> </a>
            
            </th>
            <th><a href="updatevipcar.php?update=<?php echo strip_tags($row['id']); ?>">
              <input class='walid' type="submit" value="update"> </a>
            
            </th>

          


          
      
                <th class="th2"><?php echo strip_tags($row['date']); ?></th>
             
  



    







                </tr>

                    <?php }
            ?>
                  
            </table>
   
   

</body>
</html>