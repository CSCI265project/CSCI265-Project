<?php
session_start();
require "functions.php";


$errors = array();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = signup($_POST);

    if(count($errors) == 0){
        header("Location: login.php");
        die;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registering</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Shrikhand&display=swap" rel="stylesheet">
    <link href="../css/logIn.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <div>
            <?php if(count($errors) > 0):?>
                <?php foreach ($errors as $error):?>
                    <?= $error?> <br>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <form method="post">
            
            <div class="element">
                <label for="name">Username</label>
                <input type="text" id="username" name="username" placeholder="Username"/><br/>
            </div>

            <div class="element">
                <label for="email">Mail </label>
                <input type="email" id="email" name="email" placeholder="Mail"/><br/>
            </div>

            <div class="element">
                <label for="age">Age </label>
                <input type="number" id="age" name="age" placeholder="Age" required="true"/><br/>
            </div>

            <div class="element">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"/><br/>
            </div>

            <div class="element">
                <label for="date-input">Last period date</label>
                <input class= "date-custom"type="date" id="date" name="date">
            </div>

            <div class = "smallCon">
                <div class="select-group">
                    <label for="flow">Flow</label>
                    <select class="element2" id="flow" name="flow">
                        <option value="Low" selected="true">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="Heavy">Heavy</option>
                    </select>
                </div>

                <div class="select-group">
                    <label for="types">Type</label>
                    <select class="element2" id="type" name="type">
                        <option value="regular" selected="true">Regular</option>
                        <option value="irregular">Irregular</option>
                    </select>
                </div>
                
                <div class="select-group">
                    <label for="duration">Duration</label>
                    <select class="element2" id="duration" name="duration">
                        <option value="3" selected="true">3 Days</option>
                        <option value="4">4 Days</option>
                        <option value="5">5 Days</option>
                        <option value="6">6 Days</option>
                        <option value="7">7 Days</option>
                    </select>
                </div>
            </div>

            <div class="element3">
                <label>Allow notifications?</label><br/>
                <input type="radio" id="yes" name="notifications" value="yes" class="custom-radio"/>
                <label for="yes">Yes</label><br/>
                <input type="radio" id="no" name="notifications" value="no" class="custom-radio"/>
                <label for="no">No</label><br/>
            </div>

            <div class="element4">
                <input type="checkbox" id="terms" name="terms" value="terms" class="custom-radio" required="true"/>
                <a href="pagina1.html" class="element4">Accept Terms and Conditions</a><br/>
            </div>

            <div class="element">
                <input type="submit" value="Register"/>
            </div>

        </form>
    </div>
</body>
</html>