<?php
    require "../sourcePHP/functions.php";
    check_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>C-Clo Health</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="html tutorial, css tutorial">
    <meta name="robots" content="INDEX, FOLLOW">
    <link rel="icon" type="image/x-icon" href="../htmlImgs/headerImgs/logoCopy.png">

    <!--<link rel="stylesheet" href="265styleSheet.css">-->
    <!--Font Style From Google-->
    <link rel="stylesheet" href="../css/265styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400&display=swap" rel="stylesheet">

    <style>
        /*Video*/
        .prompt_part{
            padding-top: 40px;

        }

        .prompt{
            text-align: center;
            color: #6e595f;
            font-family: 'Cormorant Garamond', serif;
            font-size: 26px;
        }

        .subtitle_part{
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .subtitle{
            text-align: center;
            color: #f5afb9;
            font-family: 'Cormorant Garamond', serif;
            font-size: 28px;
        }

        .videos_section {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .video_container {
            text-align: center;
        }

        .video_name {
            font-family: 'Cormorant Garamond', serif;
            color: #000;
            margin-top: 10px;
        }

        /*FAQ*/
        .faq-container {
            width: 90%;
            margin: 0 auto;
            margin-bottom: 100px;
        }

        .faq-item {
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }

        .faq-question {
            width: 100%;
            background-color: #f4adb7;
            color: #000;
            font-family: 'Cormorant Garamond', serif;
            border: none;
            outline: none;
            text-align: left;
            padding: 20px;
            cursor: pointer;
            font-size: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            background-color: #f9f3f3;
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.3s ease-out;
            padding: 0 15px;
            font-family: 'Cormorant Garamond', serif;
            font-size: 20px;
        }

        .faq-answer p {
            padding: 20px 0;
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
        }

        .faq-item.active .faq-question {
            background-color: #ffcbd5;
        }

        .arrow {
            font-size: 18px;
            transform: rotate(0);
            transition: transform 0.3s ease-out;
        }

        .faq-item.active .arrow {
            transform: rotate(180deg);
        }

        .faq_icon{
            width: 40px;
            transform: rotate(180deg);
        }
    </style>
</head>
<body>
    <!--Title-->

    <!--Nav Bar-->
    <header>
        <img class="hL" src="../htmlImgs/headerImgs/headerL.png">
        <div class="topbar">
            <p>Health</p>
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
        <a class="curr" href="healthPage.php">Health</a>
        <a href="educationPage.php">Education</a>
    </div>

    <!--Video-->
    <div class="prompt_part">
        <p class="prompt">Hygiene and self care are important, especially during your period!</p>
    </div>

    <div class="subtitle_part">
        <p class="subtitle">Tutorials</p>
    </div>

    <div class="videos_section">
      <div class="video_container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/WOi2Bwvp6hw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p class="video_name">This is Your Period</p>
      </div>
  
      <div class="video_container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/cjbgZwgdY7Q?si=vvAbon4NbMMHuMLf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <p class="video_name">Why do women have periods?</p>
      </div>
    </div>

    <!--FAQ-->
    <div class="subtitle_part">
        <p class="subtitle">FAQ</p>
    </div>

    <div class="faq-container">
        <div class="faq-item">
            <button class="faq-question">How often am I supposed to change my pad/tampon?
                <img src="../htmlImgs/down_arrow.svg" class="faq_icon arrow" alt="Arrow"></button>
            <div class="faq-answer">
                <p>You should change your pad or tampon every 4–6 hours, or as needed depending on your flow.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Can I exercise during my period?
                <img src="../htmlImgs/down_arrow.svg" class="faq_icon arrow" alt="Arrow"></button>
            <div class="faq-answer">
                <p>Yes, exercising during your period is generally safe and can help reduce cramps and improve mood.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Why do I experience cravings before my period?
                <img src="../htmlImgs/down_arrow.svg" class="faq_icon arrow" alt="Arrow"></button>
            <div class="faq-answer">
                <p>Hormonal changes during your menstrual cycle can affect your appetite, leading to cravings,
                    especially for carbohydrates and sweets.</p>
            </div>
        </div>
    </div>

    <script>
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');

            question.addEventListener('click', () => {
                faqItems.forEach(i => {
                    if (i !== item) {
                        i.classList.remove('active');
                        i.querySelector('.faq-answer').style.maxHeight = null;
                        i.querySelector('.arrow').style.transform = 'rotate(0deg)';
                    }
                });

                item.classList.toggle('active');
                const answer = item.querySelector('.faq-answer');
                const arrow = item.querySelector('.arrow');
                if (item.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    arrow.style.transform = 'rotate(180deg)';
                } else {
                    answer.style.maxHeight = null;
                    arrow.style.transform = 'rotate(0deg)';
                }
            });
        });

    </script>
</body>
</html>
