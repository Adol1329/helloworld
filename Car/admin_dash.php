<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Form - Car Management System</title>
    <link rel="stylesheet" href="admin_dash.css">
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
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        <h1>    ADMIN DASHBOARD</h1>
        <P style="margin-top: -0.4cm;">If have no account      <a href="admin.php" style="text-decoration: none; color: black; margin-left: 20px;">LEAVE</a>     <a href="register.php" style="text-decoration: none; color: black; margin-left: 20px;">ENTER USER ACCOUNT</a> <b> <a href="logout.php" style="text-decoration: none; color: blue; margin-left: 20px;">LOGOUT</a></b></P>
    </header>
    <div class="container">
       <a href="retrieve.php" style="text-decoration: none;"><h1>CHECK REQUESTS</h1></a>
    </div>
    <div class="check_user">
        <a href="" style="text-decoration: none; color: orangered;"><h1>CHECK FOR USERS</h1></a>
    </div>
    <div class="check_buyer">
        <a href="" style="text-decoration: none; color: orangered;"><h1>PURCHASEING USERS</h1></a>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Car Management System. All Rights Reserved.</p>
    </footer>
  
</body>
</html>
