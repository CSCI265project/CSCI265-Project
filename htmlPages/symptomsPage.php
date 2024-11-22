<?php
    require "../sourcePHP/functions.php";
    check_login();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Symptoms</title>
        <meta charset="utf=8">
        <link rel="stylesheet" href="../css/265styleSheet.css">
        <link rel="icon" type="image/x-icon" href="">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Shrikhand&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2family=Shrikhand&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2family=Cormorant+Garamond:wght@400&display=swap">

        <style>
            main{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            
            .disclaimer{
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            
            .p1{
                font-size: 30px;
                color: rgb(50,50,50);
            }
            
            .p2{
                font-size: 20px;
                color: rgb(255, 172, 183);
            }
            
            .checkBoxes{
                display: flex;
                flex-direction: row;
                min-height: 100px;
                width: 920px;
                /*background-color: aqua;*/
                margin: 50px 0px 30px 0px;
            }
            
            .checkBoxes div{
                margin: 0px 15px 0px 15px;
                /*background-color: red;*/
                width: 200px;
            }
            
            .box{
                display: block;
                position: relative;
                margin-bottom: 15px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            
            .box input{
                width: 25px;
                height: 25px;
            }
            
            .infoBox{
                width: 1000px;
                height: 500px;
                border: solid 3px;
                border-color: rgb(255, 172, 183);
                margin: 0px 0px 50px 0px;
                padding: 10px;
                font-size: 25px;
            }
            
            .infoBox img{
                float: left;
                margin: 0px 30px 0px 0px;
            }
            
            .infoBox ul{
                margin: 0px 0px 0px 30px;
            }
            
            .buttonContainer{
                display: flex;
                flex-direction: column;
                margin-bottom: 30px;
                width: 100%;
                align-items: center;
            }
            
            .custom-radio{
                accent-color: #6e595f;
            }
        </style>
        <script>
            function display1(){
                var checkBox = document.getElementById("Acne");
                var text = document.getElementById("content1");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display2(){
                var checkBox = document.getElementById("Bloating");
                var text = document.getElementById("content2");
                if(checkBox.checked == true){
                    content2.style.display = "block";
                } else{
                    content2.style.display = "none";
                }
            }
            
            function display3(){
                var checkBox = document.getElementById("Cramps");
                var text = document.getElementById("content3");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display4(){
                var checkBox = document.getElementById("Dizzyness");
                var text = document.getElementById("content4");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display5(){
                var checkBox = document.getElementById("Fatigue");
                var text = document.getElementById("content5");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display6(){
                var checkBox = document.getElementById("Headaches");
                var text = document.getElementById("content6");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display7(){
                var checkBox = document.getElementById("LBP");
                var text = document.getElementById("content7");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display8(){
                var checkBox = document.getElementById("Nausea");
                var text = document.getElementById("content8");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function submit(){
                if(document.getElementById("Acne").checked){
                    display1();
                } else{
                    content1.style.display = "none";
                }
                
                if(document.getElementById("Bloating").checked){
                    display2();
                } else{
                    content2.style.display = "none";
                }
                
                if(document.getElementById("Cramps").checked){
                    display3();
                } else{
                    content3.style.display = "none";
                }
                
                if(document.getElementById("Dizzyness").checked){
                    display4();
                } else{
                    content4.style.display = "none";
                }
                
                if(document.getElementById("Fatigue").checked){
                    display5();
                } else{
                    content5.style.display = "none";
                }
                
                if(document.getElementById("Headaches").checked){
                    display6();
                } else{
                    content6.style.display = "none";
                }
                
                if(document.getElementById("LBP").checked){
                    display7();
                } else{
                    content7.style.display = "none";
                }
                
                if(document.getElementById("Nausea").checked){
                    display8();
                } else{
                    content8.style.display = "none";
                }
            }
            
            function clearAll(){
                document.querySelectorAll('input[type="checkbox"]')
                    .forEach(el => el.checked = false);
                submit();
            }
        </script>
    </head>

    <body>
        <!--Header of Page-->
        <header>
            <div class="topbar">
                <p>Symptoms</p>
            </div>
            <form action="/cClophp/CSCI265-Project-development/sourcePHP/logout.php" method="post" class="logout">
                <button type="submit" class="button">Logout</button>
            </form>
        </header>
        <div class="navbar">
            <a href="homePage.php">Home</a>
            <a href="calendarPage.php">Calendar</a>
            <a class="curr" href="symptomsPage.php">Symptoms</a>
            <a href="moodsPage.php">Moods</a>
            <a href="healthPage.php">Health</a>
            <a href="educationPage.php">Education</a>
        </div>
        
        <!--Main Content of page-->
        <main>
            <div class="disclaimer">
                <p class="p1">Report your symptoms by checking the boxes below.</p>
                <p class="p1">Remember, these are just recommendations!</p>
                <p class="p2">C-Clo highly recommends being careful with medication. Consult a doctor if necessary.</p>
            </div>
            
            <div class="checkBoxes">
                <div>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Acne" name="Acne" autocomplete="off">
                        Acne
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Bloating" name="Bloating" autocomplete="off">
                        Bloating
                    </label>
                    <br>
                </div>
                <div>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Cramps" name="Cramps" autocomplete="off">
                        Cramps
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Dizzyness" name="Dizzyness" autocomplete="off">
                        Dizzyness
                    </label>
                    <br>
                </div>
                <div>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Fatigue" name="Fatigue" autocomplete="off">
                        Fatigue
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Headaches" name="Headaches" autocomplete="off">
                        Headaches
                    </label>
                    <br>
                </div>
                <div>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="LBP" name="box3" autocomplete="off">
                        Lower Back Pain
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Nausea" name="box4" autocomplete="off">
                        Nausea
                    </label>
                    <br>
                </div>
            </div>
            <div class="buttonContainer">
                <div>
                    <button class="button" type="submit" value="Clear all" onclick="clearAll()">Clear all</button>
                    <button class="button" type="submit" value="Submit" onclick="submit()">Submit</button>
                </div>
            </div>
            
            <div class="infoBox" id="content1" style="display: none">
                <img src="../htmlImgs/c3.jpg">
                <p>Info on some stuff (Antibiotics).</p>
                <ul>
                    <li>Antibiotics</li>
                    <li>some other stuff</li>
                </ul>
            </div>
            <div class="infoBox" id="content2" style="display: none">
                <img src="../htmlImgs/c3.jpg">
                <p>Info on some stuff (Bloating).</p>
                <ul>
                    <li>Antibiotics</li>
                    <li>some other stuff</li>
                </ul>
            </div>
            <div class="infoBox" id="content3" style="display: none">
                <img src="../htmlImgs/c3.jpg">
                <p>Info on some stuff (Cramps).</p>
                <ul>
                    <li>Cramps</li>
                    <li>some other stuff</li>
                </ul>
            </div>
            <div class="infoBox" id="content4" style="display: none">
                <img src="../htmlImgs/c3.jpg">
                <p>Info on some stuff (Dizzyness).</p>
                <ul>
                    <li>Dizzyness</li>
                    <li>some other stuff</li>
                </ul>
            </div>
            <div class="infoBox" id="content5" style="display: none">
                <img src="../htmlImgs/c3.jpg">
                <p>Info on some stuff (Fatigue).</p>
                <ul>
                    <li>Fatigue</li>
                    <li>some other stuff</li>
                </ul>
            </div>
            <div class="infoBox" id="content6" style="display: none">
                <img src="../htmlImgs/c3.jpg">
                <p>Info on some stuff (Headaches).</p>
                <ul>
                    <li>Headaches</li>
                    <li>some other stuff</li>
                </ul>
            </div>
            <div class="infoBox" id="content7" style="display: none">
                <img src="../htmlImgs/c3.jpg">
                <p>Info on some stuff (Lower Back Pain).</p>
                <ul>
                    <li>Lower Back Pain</li>
                    <li>some other stuff</li>
                </ul>
            </div>
            <div class="infoBox" id="content8" style="display: none">
                <img src="../htmlImgs/c3.jpg">
                <p>Info on some stuff (Nausea).</p>
                <ul>
                    <li>Nausea</li>
                    <li>some other stuff</li>
                </ul>
            </div>
        </main>
    </body>
</html>









