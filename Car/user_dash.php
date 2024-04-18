//<?php
//session_start();

// Check if user is not logged in
//if(!$_SESSION['id']) {
   // header("Location: login.php");
    //exit;
//}

// Other dashboard logic here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User dashboard - AUt0 Plus</title>
    <link rel="stylesheet" href="user_dash.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #26845e;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-top: -0.4cm;
        }

        .container {
            width: 32cm;
            margin: 20px auto;
            height: 20cm;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

      .container h1{
       margin-top: -0.4cm;
       margin-left: 10.1cm;
       font-family: sans-serif;
      }
      .container p{
        margin-left: 10.3cm;
      }

        .footer {
            background-color: #26845e;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>User Dashboard</h1>
        <P style="margin-top: -0.4cm;">Option to go through<b><a href="admin.php" style="text-decoration: none; color: white; margin-left: 20px;">Admin</b></a>  <b><a href="login.php" style="text-decoration: none; color: white; margin-left: 20px;">Login</b></a>    <b> <a href="logout.php" style="text-decoration: none; color: black; margin-left: 20px;">Logout</a></b></P>
    </header>
    <div class="container">
        <h1><b>AUt0 Plus.com</b></h1>
        <p style="color: green; margin-top: -0.5cm;" >Driving Excellence, Nurturing Trust.</p>
    
        <img src="1.webp">
    <h2>Ferari</h2>
    <a href="purchase.php"><h3>Buy</h3></a>
    <h4>High speed and metal</h4>

    <img src="mustang 3.avif">
    <h2>Old man</h2>
    <a href="purchase.php"><h3>Buy</h3></a>
    <h4>High speed and safety</h4>

    <img src="mustang2.avif">
    <h2>Mustang</h2>
    <a href="purchase.php"><h3>Buy</h3></a>
    <h4>High engine and costy</h4>

    <div class="user_form">
        <h1 >More other observations</h1>
        <a href="request_form.php" style="text-decoration: none; color: black;"><H2 style="margin-left: 2CM;">REQUEST A FORM</p></a>
           <a href=""  style="text-decoration: none;"> <h2>MAKE A CONVERSATION</h2></a>
    </div>
    <div class="car1" style="margin-left: 10cm; margin-top: 1.7cm;">
    <img src="istockphoto-1455158410-170667a.webp">
    <h2>Mustang</h2>
    <a href="purchase.php"><h3>Buy</h3></a>
    <h4>High engine and costy</h4>
</div>
<div class="car2" style="margin-left: 10cm; margin-top: 0.3cm;">
    <img src="istockphoto-184621630-170667a.webp">
    <h2>Mustang</h2>
    <a href="purchase.php"><h3>Buy</h3></a>
    <h4>High engine and costy</h4>
</div>
<div class="car2" style="margin-left: 19.7cm; margin-top: -13.4cm;">
    <img src="photo-1592198084033-aade902d1aae.avif">
    <h2>Mustang</h2>
    <a href="purchase.php"><h3>Buy</h3></a>
    <h4>High engine and costy</h4>
</div>
<div class="car2" style="margin-left: 19.7cm; margin-top: 0.3cm;">
    <img src="bugati.avif">
    <h2>Mustang</h2>
    <a href="purchase.php"><h3>Buy</h3></a>
    <h4>High engine and costy</h4>
</div>
<div class="right_design">
 
</div>
  
    </div>

    <footer class="footer">
        <p>&copy; 2024 AUT0 Plus. All Rights Reserved.</p>
    </footer>
    
</body>
</html>
