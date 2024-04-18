

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dash - AUt0 Plus</title>
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

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select,

        input[type="email"],
        select,

        input[type="number"],
        select,

        input[type="password"],
        select,
       
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #26845e;
            color: #fff;
            border: none;
            cursor: pointer;
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
        <h1>    Admin_login Form</h1>
        <P style="margin-top: -0.4cm;">Want to leave?  <a href="home.html" style="text-decoration: none; color: white; margin-left: 20px;">Leave</a>  <b> <a href="logout.php" style="text-decoration: none; color: white; margin-left: 20px;">User login</a></b></P>
    </header>
    <div class="container">
        <form action="#" method="post">
           
            <label >Name:</label>
            <input type="text" name="username" required>

            <label >Email:</label>
            <input type="email" name="email" required>

           

            <label >Password:</label>
            <input type="password" name="password">

            <input type="submit" name="admin_login" value="LOGIN">
        </form>
    </div>

    <footer class="footer">
        <p>&copy; 2024 AUt0 Plus . All Rights Reserved.</p>
    </footer>
    <?php
    include('connect.php');
   SESSION_START();

    if(isset($_POST['admin_login'])){
        $username=$_POST['username'];
        $userpassword=$_POST['password'];
        $name="car owner";
        $password="12345";
        if($username==$name && $userpassword==$password){
            echo'<script>
            alert("ADMIN WElcome! your Account is on going")
            window.location.href="admin_dash.php"
            </script>';
            $_SESSION['name']=$name;

        }else{
            echo '<script>
            alert("YOUR ADMIN IDENTITY IS INVALIDE TO EXISTING ONE TRY AGAIN")
            </script>'; 
        }
    }
    ?>
</body>
</html>
