<?php
    require "functions.php";
    require "mail.php";
    check_login();

    $errors = array();

    if($_SERVER['REQUEST_METHOD'] == 'GET' && !check_verified()){
        $vars['code'] = rand(10000,99999);

        $vars['expires'] = (time() + (60 * 2));
        $vars['email'] = $_SESSION['USER']->email;

        $query = "insert into verify (code, expires, email) values (:code, :expires, :email)";
        database_run($query, $vars);

        $message = "your code is: " . $vars['code'];
        $subject = "Email verification";
        $recipient = $vars['email'];
        send_mail($recipient,$subject,$message);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!check_verified()){
            $query = "select * from verify where code = :code && email = :email";

            $vars= array();
            $vars['email'] = $_SESSION['USER']->email;
            $vars['code'] = $_POST['code'];

            $row = database_run($query, $vars);
            
            if(is_array($row)){
                $row = $row[0];
                $time = time();

                if($row->expires > $time){
                    $id = $_SESSION['USER']->id;
                    $query = "update users set email_verified = email where id = '$id' limit 1";
                    database_run($query);

                    header("Location: profile.php");
					die;
                }else{
                    echo "Code expired";
                }
            }else{
                echo "wrong code";
            }
        }else{
            echo "You're already verified!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
<div class="container">
        <h1>Verify</h1>

        <?php include('header.php')?>
        <br></br>
        <div>
            <?php if(count($errors) > 0):?>
                <?php foreach ($errors as $error):?>
                    <?= $error?> <br>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <form method="post">
            
            <div class="element">
                <label for="verify">Enter your code: </label>
                <input type="text" id="code" name="code"/><br/>
            </div>
            <br></br>
            <input type="submit" value="Verify"/>
        </form>
    </div>
</body>
</html>