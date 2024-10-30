<?php
session_start();
require "functions.php";

$errors = array();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = login($_POST);

    if(count($errors) == 0){
        header("Location: profile.php");
        die;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>

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
                <label for="email">Mail </label>
                <input type="email" id="email" name="email" placeholder="Mail"/><br/>
            </div>


            <div class="element">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"/><br/>
            </div>

            <input type="submit" value="Login"/>
        </form>
    </div>
</body>
</html>