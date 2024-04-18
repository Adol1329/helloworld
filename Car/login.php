<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AUT0 Plus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background.avif');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            min-height: 100vh; /* Ensure the body fills the viewport */
            display: flex;
            flex-direction: column;
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
        <h1>    User Login Form</h1>
        <P style="margin-top: -0.4cm;">have no account?       
         <a href="register.php" style="text-decoration: none; color: white; margin-left: 20px;">register</a> <b> <a href="admin.php" style="text-decoration: none; color: black; margin-left: 20px;">ADMIN</a></b></P>
    </header>
    <div class="container">
        <form action="#" method="post">
            <label >First name:</label>
            <input type="text" name="firstname" required>

            <label >Last name:</label>
            <input type="text" name="lastname" required>

            <label >User email:</label>
            <input type="email" name="email" required>

           

            <label >Password:</label>
            <input type="password" name="password">

            <input type="submit" name="login" value="LOGIN">
        </form>
    </div>

    <footer class="footer">
        <p>&copy; 2024 AUT0Plus. All Rights Reserved.</p>
    </footer>
    <?php
include('connect.php');
    session_start();
if(isset($_POST['login'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select=$connect->query("SELECT* from user where email='$email'");
    if(mysqli_num_rows($select)>0){
        $selectdata=$connect->query("SELECT* FROM user WHERE email='$email' AND password='$password'");
        $data=mysqli_fetch_array($selectdata);
        if(mysqli_num_rows($selectdata)>0){
            echo'<script>
            alert("Welcome Your Account is Logged in")
            window.location.href="user_dash.php"
            </script>';
        }else{
            echo'<script>
            alert("Incorrect password try again")
            </script>';
        }
    }else{
        echo'<script>
        alert("Email do not Exist try again")
        </script>';
    }
}




?>
</body>
</html>
