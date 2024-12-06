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

                    header("Location: ../htmlPages/homePage.php");
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
    <title>Verify</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/265styleSheet.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400&display=swap" rel="stylesheet">
    <style>
        .container .element label{
            color: #6e595f;
            font-family: "Cormorant Garamond", serif;
            font-size: 20px;
            padding: 30px;
        }
        .container .element input{
            width:auto;
            padding:10px 0;
            color:#6e595f;
            background: transparent;
            border: none;
            border-bottom: 1px solid #6e595f;
            margin-bottom: 30px;
            font-family: "Cormorant Garamond", serif;
            font-size: 16px;
        }
        .title{
            margin: 0 0 30px;
            padding:30px;
            font-size: 30px;
            color:#6e595f;
            text-align: left;
            font-family: "Shrikhand", serif;
        }
    </style>
</head>
<body>
    <header>
        <img class="hL" src="../htmlImgs/headerImgs/headerL.png">
        <div class="topbar">
            <p>Verification</p>
            <img class="logo" src="../htmlImgs/headerImgs/logoCopy.png">
        </div>
        <img class="hR" src="../htmlImgs/headerImgs/headerR.png">
        <!--<div class="logout">
            <button class="button">Logout</button>
        </div>-->
        <form action="/cClophp/CSCI265-Project-development/sourcePHP/logout.php" method="post" class="logout">
            <button type="submit" class="button">Logout</button>
        </form>      
    </header>
    <div class = "navbar">
        <a class="curr" href="homePage.html">Home</a>
        <a href="calendarPage.html">Calendar</a>
        <a href="symptomsPage.html">Symptoms</a>
        <a href="moodsPage.html">Moods</a>
        <a href="healthPage.html">Health</a>
        <a href="educationPage.html">Education</a>
    </div>
    <div class="container">
        <div class="title">
            <p>Verify your Profile</p>
        </div>
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
            <div style="padding-left: 20px;">
                <input type="submit" class="button" value="Verify"/>
            </div>
        </form>
    </div>
</body>
</html>