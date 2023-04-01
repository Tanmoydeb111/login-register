<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
    <title>Grocery Website</title>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>User Dashboard</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Picture 2.png" >
        <script src="https://kit.fontawesome.com/49b933679a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


    </head>
 <body>
    <h1> <img src="Picture 2.png" alt="Website logo" style="width:3cm;height:3cm;float:inline-start;top:30px;position:relative;" >Grocery Website </h1>
    
    
        
    <div id="broder">
        <img src="Picture 2.png" alt="Website logo" style="width:3cm;height:3cm;float:left" >
        <div class="btn-group">
          <nav>
          <a href=index.php class="button1">HOME</button>  
          <a href=product.php  class="button1">Products</a>
          <a href=contact.php  class="button1">Contact Us</a>
          <div class="container3">
            <a href="logout.php" class="btn btn-warning">Logout</a>
          </div>
          </nav>
          
        </div>
    </div>
    <div id="broder2">
            <div class="container">30% off on any Grocery</div>
            <img class="fit" src="photo.png" >
              <div class="container"><a href=product.php class="btn">Buy Now</a></div> 
      </div>             



    
 </body> 
</html>