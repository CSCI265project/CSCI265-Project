<?php
    require "../sourcePHP/functions.php";
    check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>C-Clo Home</title>
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
        <!--<div class="logout">
            <button class="button">Logout</button>
        </div>-->
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
                        <h3 id="day-count">17</h3> <!-- Placeholder for dynamic content -->
                    </div>
                </div>
            </div>

            <section id="user-questions">
                <div class="question">
                    <p>Did you get your period yet?</p>
                    <a href="#" onclick="addPeriodDate()">Add date to the calendar</a>
                </div>

                <div class="question">
                    <p>Are you feeling unwell?</p>
                    <a href="symptomsPage.php">Report symptoms</a>
                    <a href="moodsPage.php">Report moods</a>
                </div>
            </section>
        </div>
    </main>

    <script src="../c-clo-home.js"></script>
</body>
</html>
