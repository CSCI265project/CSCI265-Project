<?php
    require "../sourcePHP/functions.php";
    check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calendar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/265styleSheet.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="topbar">
            <p>Calendar</p>
        </div>
        <form action="/cClophp/CSCI265-Project-development/sourcePHP/logout.php" method="post" class="logout">
            <button type="submit" class="button">Logout</button>
        </form>
    </header>
    <div class = "navbar">
        <a href="homePage.php">Home</a>
        <a class="curr" href="calendarPage.php">Calendar</a>
        <a href="symptomsPage.php">Symptoms</a>
        <a href="moodsPage.php">Moods</a>
        <a href="healthPage.php">Health</a>
        <a href="educationPage.php">Education</a>
    </div>

    <section id="calendar">
        <div id="calendar-grid" class="calendar-grid">
            <!-- JavaScript will dynamically generate each month's calendar here -->
        </div>
    </section>

    <script src="../calendar.js"></script>
</body>
</html>


