<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Form - Car Management System</title>
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
        input[type="datetime-local"],
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
        <h1>Request Form</h1>
        <p>Fill out the form by fulfilling your desires, And based on your cars problem or other problem</p>
    </header>
    <div class="container">
        <form action="#" method="post">
            <label for="brand">Car Brand:</label>
            <input type="text"  name="brand" required>

            <label for="model">Car Model:</label>
            <input type="text"  name="model" required>

            <label for="plate">Plate Number:</label>
            <input type="text"  name="plate" required>

            <label for="services">Services Needed:</label>
            <select id="services" name="service" required>
                <option value="maintenance">Maintenance</option>
                <option value="repair">Repair</option>
                <option value="inspection">Inspection</option>
                <option value="other">Buy</option>
                <option value="other">Other</option>
            </select>

            
            <input type="submit" name="submit" value="Submit Request">
        </form>
    </div>

    <footer class="footer">
        <p>&copy; 2024 AUT0 Plus. All Rights Reserved.</p>
    </footer>
   
    <?php
    include('connect.php');
    if(isset($_POST['submit'])){
        $brand=$_POST['brand'];
        $model=$_POST['model'];
        $plate=$_POST['plate'];
        $service=$_POST['service'];
        $date=$_POST['date'];

        $insert=$connect->query("INSERT INTO request (brand, model, plate, service, date) VALUES ('$brand', '$model', '$plate', '$service', CURRENT_TIMESTAMP)");

        if($insert==true){
            echo'<script>
            alert("Your Request has been sent well")
            window.location.href="user_dash.php"
            </script>';
        }else{
            echo'<script>
            alert("YOUR REQUEST HAS NOT BEEN SENT TRY AGAIN")
            </SCRIPT>';
        }
    }
    ?>
</body>
</html>
