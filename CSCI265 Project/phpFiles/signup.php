<?php

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
</head>
<body>
    <div class="container">
        <h1>Register</h1>

        <?php include('header.php')?>

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
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"/><br/>
            </div>

            <input type="submit" value="Register"/>
        </form>
    </div>
</body>
</html>