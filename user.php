<?php
    session_start();
    if(!isset($_SESSION['nom'])){
      header('location: login.php');
      exit();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
    
    <style>

*,
*:after,
*:before {
  margin: 0;
  padding: 0;
  text-decoration: none;
  outline: none;
  box-sizing: border-box;
  list-style: none;
  border: none;
  transition: all 0.4s linear;
  overflow: hidden;
}



html {
  font-size: 65%;
  scroll-behavior: smooth;
 
}
::-webkit-scrollbar {
  width: 2vh;
}
::-webkit-scrollbar-track {
  border: 1px solid black;
  border-radius: 2rem;
  box-shadow: inset 0px 0px 2px 1.2px orange;
}
::-webkit-scrollbar-thumb {
  border-radius: 2rem;
  background: linear-gradient(
    90deg,
    orangered,
    rgb(243, 126, 0),
    rgb(253, 253, 4)
  );
  height: 20px;
}
::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(90deg, red, orange);
}



        body{
            background-image: url(image/marsaa3.jpg);
            background-size: cover;
       
            background-repeat: no-repeat;
        }
        .fixed{
            position: fixed;
            top: 0;right: 0;left: 0;bottom: 0;
            background-color: white;
            opacity: 0.8;color: black;

        }
     
        .fixed .wrap{
            width: 70%;
            margin: auto;
           
         display: flex;
         justify-content: space-between;align-items: center;
         flex-direction: column;
         background-color: transparent;
         opacity: 1;
         border-radius: 2rem;
         background-color: black;
            
    

        }
        h1{
            padding: 20px 20px 30px 20px;
            font-size: 2.5rem;
        color: white;
        }
        h1 span{
            font-size: 2.5rem;
            color: rgb(255, 206, 115);
            font-weight: bold;
            letter-spacing: 5px;
    
        
        }


        h2{
            padding: 0px 20px 20px 20px;
            font-size: 2rem;
        text-align: center;
        letter-spacing: 3px;
        text-transform: capitalize;
        font-weight: 100;word-spacing: 2px;
        line-height: 3.5rem;
       font-family: 'Times New Roman', Times, serif;
       color: white;
        }

        span{
            padding: 40px;
            font-size: 2rem;
            letter-spacing: 3px;
            word-spacing: 5px;
            text-transform: capitalize;
            font-weight: 100;
            font-style: oblique;
            line-height: 50px;
            color: white;
        }
        a{
            text-decoration: none;
            color: rgb(255, 198, 91);
            transition: 0.5s linear;
         
         
        }
        a:hover{
            color: blue;
            text-decoration: underline;
            text-underline-offset: 7px;
            transform: scale(1.2);

        }
        i{
            color:gold;
            background-color: red;
            border-radius:3rem;
        }
        .fa-heart{
            background-color: transparent;
            color:red;
        }
        .logout{
          padding:8px 20px ;
          font-size:2.5rem;
          text-transform:capitalize;
          font-style:italic;
          letter-spacing:1px;
          margin-top:-20px;
          padding-bottom:10px;
          
        }
        .logout:hover{
          color:red;
          text-decoration:none;
        }
        .user{
          font-size:2rem;
          color:wheat;
        }

        @media screen and (max-width:700px) {
          *{
            overflow:auto;
          }
        }
    
 
     
    </style>
</head>
<body>

<div class="fixed">
        <div class="wrap">
        <h1>welcom <span>  <?php echo strip_tags($_SESSION['nom']); ?>   </span> ! <br>
           <span class="user"> this space for user  </span>      </h1>
        <h2> if anythings nwes we will send you message in your email,
            we still working in your space we want to build a good place
            for you so that you will be happy to join us 
            <i class="fa-solid fa-face-kiss-wink-heart"></i>
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-face-kiss-wink-heart"></i>
         </h2>
          <span> click <a href="index.php"> here  </a><br>
             to come back home
             </span>
             <a class="logout" href="logout.php"> log out</a>
    
    </div>
</div>
</body>
</html>