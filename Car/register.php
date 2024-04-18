<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - AUT0 Plus</title>
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
            height: 11cm;
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
            padding: 1px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>    User Registration form</h1>
        <P style="margin-top: -0.4cm;">have an account?  <a href="login.php" style="text-decoration: none; color: white; margin-left: 20px;">login</a>  <b> <a href="admin.php" style="text-decoration: none; color: black; margin-left: 20px;">GO TO ADMIN</a></b></P>
    </header>
    <div class="container">
        <form action="#" method="post">
            <label >First name:</label>
            <input type="text" name="firstname" required>

            <label >Last name:</label>
            <input type="text" name="lastname" required>

            <label >User email:</label>
            <input type="email" name="email" required>

            <label >User phone number:</label>
            <input type="number" name="phone" required>
            <!-- <select id="services" name="services" required>
                <option value="maintenance">Maintenance</option>
                <option value="repair">Repair</option>
                <option value="inspection">Inspection</option>
                <option value="other">Other</option>
            </select> -->

            <label >Password:</label>
            <input type="password" name="password">

            <input type="submit" name="register" value="REGISTER">
        </form>
    </div>

    <footer class="footer">
        <p>&copy; 2024 AUT0Plus. All Rights Reserved.</p>
    </footer>
    <?php
    include('connect.php');

if(isset($_POST['register'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $insert=$connect->query("insert into user values('$email','$firstname','$lastname','$phone','$password',null)");
    if($insert==true){
        echo'<script>
        alert("your registration is well processed")
        window.location.href="login.php"
        </script>';
    }else{
        echo' <script>
        alert("account is not created  there is an error try again")
        </script>';
    }
}
?>
</body>
</html>
