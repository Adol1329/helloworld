<?php

?>
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
            width: 32.3cm;
            height: 23cm;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

       

       
        table {
            border-collapse: collapse;
            width: 80%;
            margin-left: 7cm;
            margin-top: 1cm;
            font-family: sans-serif;
            margin-left: 4cm;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            color: green;
        }

        th {
            background-color: #f2f2f2;
            color: green;
        }

        .footer {
            background-color: #26845e;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            margin-left: -1cm;
        }
        
    </style>
</head>
<body>
    <header>
        <h1>    ADMIN REQUESTS DASHBOARD</h1>
        <P style="margin-top: -0.4cm;">If want to leave admin        <a href="admin.php" style="text-decoration: none; color: black; margin-left: 20px;">LEAVE</a> <b> <a href="logout.php" style="text-decoration: none; color: blue; margin-left: 20px;">LOGOUT</a></b></P>
    </header>
    <div class="container">
   
   
    <table>
        <tr>
            <th> ID</th>
            <th>USER ID</th>
            <th>CAR BRAND</th>
            <th>CAR MODEL</th>
            <th>PLATE NUMBER</th>
            <th>SERVICE NEEDED</th>
            <th>DATE/TIME</th>
            
        </tr>
        </div>
    <footer class="footer">
        <p>&copy; 2024 Car Management System. All Rights Reserved.</p>
    </footer>
    <?php
  include('connect.php');
  $select=$connect->query("select* from request");
    while($row=mysqli_fetch_array($select)){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['user_id']?></td>
            <td><?php echo $row['brand']?></td>
            <td><?php echo $row['model']?></td>
            <td><?php echo $row['plate']?></td>
            <td><?php echo $row['service']?></td>
            <td><?php echo $row['date']?></td>
           
          
        <?php
    }
  ?>
</body>
</html>
