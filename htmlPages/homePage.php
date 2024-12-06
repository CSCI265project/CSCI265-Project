<?php
    require "../sourcePHP/functions.php";
    require "../sourcePHP/mail.php";
    check_login();

    $vars['email'] = $_SESSION['USER']->email;
    $query = "select date, email from users where email = :email";
    $result = database_run($query, $vars);

    $firstPeriodDay = null;
    $userEmail = null;

    if ($result && is_array($result) && count($result) > 0) {
        $firstPeriodDay = $result[0]->date;
        $userEmail = $result[0]->email; 
    }
    
    $vars['email'] = $_SESSION['USER']->email;
    if (isset($_POST['daysSinceLastPeriod'])) {
        $days = (int)$_POST['daysSinceLastPeriod'];
        echo "Days since last period: " . $days;

        if($days == 26){
            $message = "You are currently on Day 26, be sure to be prepared!";
            $subject = "Your Period is around the corner!";
            $recipient = $vars['email'];
            send_mail($recipient,$subject,$message);
        }
        else if($days == 32){
            $message = "You havent added a date and its day 32, if you havent got your period, we recommend you to see a doctor";
            $subject = "Are you late?";
            $recipient = $vars['email'];
            send_mail($recipient,$subject,$message);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/265styleSheet.css">
    <link rel="icon" type="image/x-icon" href="../htmlImgs/headerImgs/logoCopy.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400&display=swap" rel="stylesheet">
    <style>
        main{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        main div{
            display: inherit;
            flex-direction: row;
            align-items: center;
            color: rgb(110, 89, 95);
        }
        
        #circle{
            height: 500px;
            width: 500px;
            background-color: rgb(255, 229, 217);
            border-radius: 50%;
            display: flex;
            flex-direction: row;
            position: relative;
            align-items: center;
        }
        
        #cycle-info{
            width: 100%;
            height: 400px;
            font-size: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            float: left;
            padding: 30px;
        }
        
        #cycle-info h3{
            font-size: 150px;
        }
        
        #user-questions{
            float: right;
            margin-left: 75px;
            font-size: 30px;
        }
        
        #current-cycle-day{
            margin-top: 30px;
        }
        
        .question{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 40px;
            line-height: 1.5;
        }
        
        .question a{
            color: rgb(255, 172, 183);
        }
        
        .question a:hover{
            color: rgb(255, 0, 0);
        }

        #counter-display {
            font-size: 150px;
            font-weight: bold;
            color: rgb(110, 89, 95);
        }
        
    </style>
</head>
<body>
    <header>
        <img class="hL" src="../htmlImgs/headerImgs/headerL.png">
        <div class="topbar">
            <p>C-Clo</p>
            <img class="logo" src="../htmlImgs/headerImgs/logoCopy.png">
        </div>
        <img class="hR" src="../htmlImgs/headerImgs/headerR.png">
        <form action="/cClophp/CSCI265-Project-development/sourcePHP/logout.php" method="post" class="logout">
            <button type="submit" class="button">Logout</button>
        </form>
        
               
    </header>
    <div class = "navbar">
        <a class="curr" href="homePage.php">Home</a>
        <a href="calendarPage.php">Calendar</a>
        <a href="symptomsPage.php">Symptoms</a>
        <a href="moodsPage.php">Moods</a>
        <a href="healthPage.php">Health</a>
        <a href="educationPage.php">Education</a>
    </div>
    
    <main id="main-page">
        <?php if(check_login(false)):?>
            <span style="font-size: 40px; color: #6e595f; font-family: 'Shrikhand', serif;">
                Hi, <?= htmlspecialchars($_SESSION['USER']->username) ?>
            </span>
            <?php if(!check_verified()):?>
                <a href="../sourcePHP/verify.php">
                    <button class="button">Verify Profile</button>
                </a>
            <?php endif;?>
        <?php endif;?>
        <div>
            <div id="circle">
                <div id="cycle-info">
                    <p>You are currently</p>
                    <p>on day</p>
                    <div id="current-cycle-day">
                        <div id="counter-display" ></div>
                        <br></br>
                    </div>
                    <p>of your cycle</p>

                </div>
            </div>

            <section id="user-questions">
                <div class="question">
                    <p>Did you get your period yet?</p>
                    <a href="calendarPage.php">Add date to the calendar</a>
                </div>

                <div class="question">
                    <p>Are you feeling unwell?</p>
                    <a href="symptomsPage.php">Report symptoms</a>
                    <a href="moodsPage.php">Report moods</a>
                </div>
            </section>
        </div>
    </main>

    <script src="../counter.js"></script>
    <script>
        let firstPeriodDay = <?php echo json_encode($firstPeriodDay); ?>;
        const userEmail = <?php echo json_encode($userEmail); ?>;
    </script>
</body>
</html>
