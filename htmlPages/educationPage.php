<?php
    require "../sourcePHP/functions.php";
    check_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Education</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="html tutorial, css tutorial">
    <meta name="robots" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../htmlImgs/headerImgs/logoCopy.png">

    <!--Font Style From Google-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/265styleSheet.css">

    <style>
        .quarter{
            display: flex;
            flex-direction: row;
        }

        .quarter .month{
            background-color: aqua;
            padding: 10px;
            width: 25%;
            height: 300px;
            margin: 10px;
        }

        .quarter .month p{
            text-align: center;
            font-size: 30px;
        }

        /* Educational Links Section */
        .education-content {
            margin: 30px;
            padding: 20px;
            background-color: #fef5f7;
            text-align: center;
            font-family: 'Cormorant Garamond', serif;
        }

        .education-content h2 {
            font-size: 32px;
            color: #000;
        }

        .education-content p {
            font-size: 22px;
            color: #6e595f;
            margin-bottom: 20px;
        }

        /* Centering the resource list */
        ul.resource-list {
            margin: 30px, 0px, 30px, 0px;
            list-style-type: none;
            padding-left: 0;
            text-align: center; /* Centers the list items */
        }

        ul.resource-list li {
            padding: 5px 0;
             
        }

        ul.resource-list li a {
            text-decoration: none;
            color: #5b4a4a;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Cormorant Garamond', serif;
        }

        ul.resource-list li a:hover {
            color: #000;
        }

        .center-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .database-btn {
            background-color: #ffcbd5;
            border: none;
            padding: 12px 25px;
            color: #5b4a4a;
            font-size: 20px;
            font-weight: bold;
            font-family: 'Cormorant Garamond', serif;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        .database-btn:hover {
            background-color: #f4adb7;
            color: #fff;
        }
    </style>
</head>

<body>
  
    <!--Nav Bar-->
    <header>
        <img class="hL" src="../htmlImgs/headerImgs/headerL.png">
        <div class="topbar">
            <p>Education</p>
            <img class="logo" src="../htmlImgs/headerImgs/logoCopy.png">
        </div>
        <img class="hR" src="../htmlImgs/headerImgs/headerR.png">
        <form action="/cClophp/CSCI265-Project-development/sourcePHP/logout.php" method="post" class="logout">
            <button type="submit" class="button">Logout</button>
        </form>
    </header>
    <div class="navbar">
        <a href="homePage.php">Home</a>
        <a href="calendarPage.php">Calendar</a>
        <a href="symptomsPage.php">Symptoms</a>
        <a href="moodsPage.php">Moods</a>
        <a href="healthPage.php">Health</a>
        <a class="curr" href="educationPage.php">Education</a>
    </div>
    
    <main>
        <!--Education Content-->
        <ul class="resource-list">
            <li><a href="https://www.cdc.gov/hygiene/about/menstrual-hygiene.html#:~:text=Do%20not%20flush%20menstrual%20products,every%204%20to%208%20hours." target="_blank">Healthy Habits</a></li>
            <li><a href="https://www.unicef.org/media/91346/file/unicef-guide-menstrual-hygiene-materials-2019.pdf">Menstrual Hygiene Material</a></li>
            <li><a href="https://health.clevelandclinic.org/nutrition-and-exercise-throughout-your-menstrual-cycle">Nutrition and Exercise</a></li>
            <li><a href="https://kidshealth.org/en/teens/menstruation.html#:~:text=The%20ovaries%20release%20the%20female,lining%20breaks%20down%20and%20bleeds.">All About Periods</a></li>
            <li><a href="https://kidshealth.org/en/teens/bc-chart.html">Birth Control Methods</a></li>
            <li><a href="https://www.pacehospital.com/pcod-polycystic-ovary-disease-cause-symptoms-and-treatment">PCOD and PCOS</a></li>
            <li><a href="https://www.healthline.com/health/womens-health/stages-of-menstrual-cycle">Stages of Menstrual Cycle</a></li>
            <li><a href="https://my.clevelandclinic.org/health/diseases/21608-perimenopause">Perimenopause</a></li>
        </ul>

        <div class="center-button">
            <button class="database-btn" onclick= "window.location.href='https://www.womenshealth.gov/pregnancy/menstrual-cycle'">Other Databases</button>
        </div>
    </main>
</body>

</html>


