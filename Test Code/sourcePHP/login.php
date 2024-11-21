<?php

require "functions.php";

$errors = array();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = login($_POST);

    if(count($errors) == 0){
        header("Location: CSCI265-Project-development/htmlPages/homePage.php");
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
    <title>Login</title>
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
        <h1>Login</h1>
        <div>
            <?php if(count($errors) > 0):?>
                <?php foreach ($errors as $error):?>
                    <?= $error?> <br>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <form method="post">
            
            <div class="element">
                <label for="email">Mail </label>
                <input type="email" id="email" name="email" placeholder="Mail"/><br/>
            </div>


            <div class="element">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"/><br/>
            </div>
            
            <div class="element4">
                <a href = "signUp.php" class="element4"> Dont have and account? Register</a>
            </div>

            <div class="element">
                <input type="submit" value="Login"/>
            </div>

        </form>
    </div>
</body>
</html>