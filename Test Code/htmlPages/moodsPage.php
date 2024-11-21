<?php
    require "../sourcePHP/functions.php";
    check_login();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Moods</title>
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
                var checkBox = document.getElementById("Restless");
                var text = document.getElementById("content1");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display2(){
                var checkBox = document.getElementById("Sensitive");
                var text = document.getElementById("content2");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display3(){
                var checkBox = document.getElementById("Overwhelmed");
                var text = document.getElementById("content3");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display4(){
                var checkBox = document.getElementById("Sad");
                var text = document.getElementById("content4");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display5(){
                var checkBox = document.getElementById("Unmotivated");
                var text = document.getElementById("content5");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display6(){
                var checkBox = document.getElementById("Stressed");
                var text = document.getElementById("content6");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display7(){
                var checkBox = document.getElementById("Angry");
                var text = document.getElementById("content7");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display8(){
                var checkBox = document.getElementById("Emotional");
                var text = document.getElementById("content8");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display9(){
                var checkBox = document.getElementById("Anxious");
                var text = document.getElementById("content9");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display10(){
                var checkBox = document.getElementById("Moody");
                var text = document.getElementById("content10");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display11(){
                var checkBox = document.getElementById("Tired");
                var text = document.getElementById("content11");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display12(){
                var checkBox = document.getElementById("Frustrated");
                var text = document.getElementById("content12");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display13(){
                var checkBox = document.getElementById("Irritable");
                var text = document.getElementById("content13");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function display14(){
                var checkBox = document.getElementById("Lonely");
                var text = document.getElementById("content14");
                if(checkBox.checked == true){
                    text.style.display = "block";
                } else{
                    text.style.display = "none";
                }
            }
            
            function submit(){
                if(document.getElementById("Restless").checked){
                    display1();
                } else{
                    content1.style.display = "none";
                }
                
                if(document.getElementById("Sensitive").checked){
                    display2();
                } else{
                    content2.style.display = "none";
                }
                
                if(document.getElementById("Overwhelmed").checked){
                    display3();
                } else{
                    content3.style.display = "none";
                }
                
                if(document.getElementById("Sad").checked){
                    display4();
                } else{
                    content4.style.display = "none";
                }
                
                if(document.getElementById("Unmotivated").checked){
                    display5();
                } else{
                    content5.style.display = "none";
                }
                
                if(document.getElementById("Stressed").checked){
                    display6();
                } else{
                    content6.style.display = "none";
                }
                
                if(document.getElementById("Angry").checked){
                    display7();
                } else{
                    content7.style.display = "none";
                }
                
                if(document.getElementById("Emotional").checked){
                    display8();
                } else{
                    content8.style.display = "none";
                }
                
                if(document.getElementById("Anxious").checked){
                    display9();
                } else{
                    content9.style.display = "none";
                }
                
                if(document.getElementById("Moody").checked){
                    display10();
                } else{
                    content10.style.display = "none";
                }
                
                if(document.getElementById("Tired").checked){
                    display11();
                } else{
                    content11.style.display = "none";
                }
                
                if(document.getElementById("Frustrated").checked){
                    display12();
                } else{
                    content12.style.display = "none";
                }
                
                if(document.getElementById("Irritable").checked){
                    display13();
                } else{
                    content13.style.display = "none";
                }
                
                if(document.getElementById("Lonely").checked){
                    display14();
                } else{
                    content14.style.display = "none";
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
        <header>
            <div class="topbar">
                <p>Moods</p>
            </div>
            <form action="/cClophp/CSCI265-Project-development/sourcePHP/logout.php" method="post" class="logout">
                <button type="submit" class="button">Logout</button>
            </form>
        </header>
        <div class="navbar">
            <a href="homePage.php">Home</a>
            <a href="calendarPage.php">Calendar</a>
            <a href="symptomsPage.php">Symptoms</a>
            <a class="curr" href="moodsPage.php">Moods</a>
            <a href="healthPage.php">Health</a>
            <a href="educationPage.php">Education</a>
        </div>
        <main>
            <div class="disclaimer">
                <p class="p1">Report your moods by checking the boxes below.</p>
                <p class="p1">Remember, these are just recommendations!</p>
                <p class="p2">C-Clo highly recommends being careful with medication. Consult a doctor if necessary.</p>
            </div>
            
            <div class="checkBoxes">
                <div>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Restless" name="Restless"  autocomplete="off">Restless 
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Sensitive" name="Sensitive" autocomplete="off">Sensitive
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Overwhelmed" name="Overwhelmed" autocomplete="off">Overwhelmed
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Sad" name="Sad" autocomplete="off">Sad
                    </label>
                    <br>
                </div>
                <div>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Unmotivated" name="Unmotivated" autocomplete="off">Unmotivated
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Stressed" name="Stressed" autocomplete="off">Stressed
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Angry" name="Angry" autocomplete="off">Angry
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Emotional" name="Emotional" autocomplete="off">Emotional
                    </label>
                    <br>
                </div>
                <div>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Anxious" name="Anxious" autocomplete="off">Anxious
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Moody" name="Moody" autocomplete="off">Moody
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Tired" name="Tired" autocomplete="off">Tired
                    </label>
                    <br>
                </div>
                <div>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Frustrated" name="Frustrated" autocomplete="off">Frustrated
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Irritable" name="Irritable" autocomplete="off">Irritable
                    </label>
                    <br>
                    <label class="box">
                        <input class="custom-radio" type="checkbox" id="Lonely" name="Lonely" autocomplete="off">Lonely 
                    </label>
                    <br>
                </div>
            </div>
            
            <div class="buttonContainer">
                <div>
                    <input class="button" type="button" value="Clear all" onclick="clearAll()">
                    <input class="button" type="submit" value="Submit" onclick="submit()">
                </div>
            </div>
            
                   <div class="infoBox" id="content1" style="display: none">
                <p> If you are feeling Restless,  possible methods to help you could be meditation, breathing exercises, or exercise like a jog or walk. A more detailed article on how to deal with restlessness: <a href = "https://www.brightside.com/blog/overcoming-restlessness-helpful-methods/?srsltid=AfmBOoq0P-rJvwbuYTs-42o3-Wkl6fb4fe95mpGUgZ2tZKt6HDmzqqOO">5 methods for dealing with restlessness</a></p>
               
                <ul>
    
              </ul>
            </div>
            <div class="infoBox" id="content2" style="display: none">
                <p> Sensitivity is not necessarily a bad thing, do some self-reflection, if you believe you are highly sensitive a great article that could help you: <a href="https://psychcentral.com/health/why-am-i-so-sensitive">High sensitivity understanding</a></p> 
                
                <ul>
                </ul>
            </div>
            <div class="infoBox" id="content3" style="display: none">
                <p> If you are feeling Overwhelmed, possible methods to help you could be meditation, being kind to yourself, or writing your feeling could give you more structure and security. A more detailed article on how to deal with restlessness: <a href = "https://www.mentalhealthfirstaid.org/2021/03/how-to-take-care-of-yourself-when-youre-feeling-overwhelmed/"> Methods you could use when feeling overwhelmed</a></p>
                
                <ul>
                <ul>
                    
                </ul>
            </div>
            <div class="infoBox" id="content4" style="display: none">
                
                <p> Feeling Sadness is a part of being human, if you are feeling sadness and want to know some methods and understanding of how to deal with sadness are in this great article: <a href="https://www.cdc.gov/howrightnow/emotion/sadness/index.html">How Right Now?</a></p> 
                
                <ul>
                
                </ul>
            </div>
            <div class="infoBox" id="content5" style="display: none">
                
                <p> Feeling Unmotivated is natural at certain times when things are uncertain, stressful, new, etc... but that feeling of not wanting to do things can be conquered. A article on how to overcome motivation: <a href="https://www.forbes.com/sites/nelldebevoise/2024/07/05/what-to-do-when-you-are-feeling-unmotivated/">What to do when unmotivated?</a></p> 
                <ul>
                </ul>
            </div>
            <div class="infoBox" id="content6" style="display: none">
                
                <p> Stress and being overwhelmed are very closely related, the same methods can be used like meditation, being kind to yourself, writing your feeling could give you more structure and security, exercise like a jog or walk for example can also ease a stressed mind. Prolonged stress can have serve effects on both mental and physical health. We have 2 links attached to help with stress, One General and One more for woman:<a href="https://www.womenshealthmag.com/health/a26306917/fast-stress-relief-techniques/?utm_source=google&utm_medium=cpc&utm_campaign=mgu_ga_whm_md_dsa_prog_mix_ca_19960292379&gad_source=1&gclid=Cj0KCQiA6Ou5BhCrARIsAPoTxrClKLvWnWiW9FLvTYK-NGgxu-aPML7rUwPMHiWcBmPcE-bNkSlKAekaAh3GEALw_wcB">Dealing with stress(Woman)</a> and <a href="https://my.clevelandclinic.org/health/diseases/11874-stress">Dealing with stress(General)</a> </p> 
            
                <ul>
                    
                </ul>
            </div>
            <div class="infoBox" id="content7" style="display: none">
                
                <p> Anger is not necessarily a bad in some situations thing but if you have unchecked anger(rage,wraith) in day to day situations or get to a boiling point very fast this can lead to health problems like blood pressure, and likely bad for your relationships with others. A resource is here to help you if you are struggling with anger: <a href="https://www.apa.org/topics/anger/control">How to control you anger before it control you</a></p> 
                <ul>
                <ul>
                    
                </ul>
            </div>
            <div class="infoBox" id="content8" style="display: none">
                
                <p> Being emotional can be a wide variety of feelings like sadness, anger, and sudden changes in your feeling/mood. Look inward and try to identify what is triggering your changes. A more in-depth and detailed article about emotions that could be harmful is : <a href="https://mhanational.org/helpful-vs-harmful-ways-manage-emotions">Helpful vs Harmful emotions</a></p> 
                <ul>
                <ul>
                    
                </ul>
            </div>
            <div class="infoBox" id="content9" style="display: none">
                
                <p> Anxiety can come from many sources such as childhood trauma, stress from a situation in your life, social pressure. the list goes on. Dealing with anxiety can be draining here are  <a href="https://www.wondermind.com/article/what-to-do-when-you-feel-lonely/">11 tips to help in dealing with this</a></p>
                <ul>
                </ul>
            </div>
            <div class="infoBox" id="content10" style="display: none">
                <p> Being moody goes hand in hand with being emotional, the 2 are very closely related. We have attached two articles to help you one is for Moodiness specially and the other is just the article in emotional:  <a href="https://mhanational.org/helpful-vs-harmful-ways-manage-emotions">Helpful vs Harmful emotions</a></p> "https://my.clevelandclinic.org/health/symptoms/mood-swings">Mood Swings</a></p> 
                    
                 <p>Article linked in Emotional:  <a href="https://mhanational.org/helpful-vs-harmful-ways-manage-emotions">Helpful vs Harmful emotions</a></p> </p>
                    
                
            </div>

            <div class="infoBox" id="content11" style="display: none">
                <p> Tiredness and fatigue usually result from lack of sleep or trouble going to sleep. We have an article here that helps you understand your fatigue and how to possibley best it: <a href="https://www.womenshealthmag.com/health/a34579232/why-am-i-always-tired/?utm_source=google&utm_medium=cpc&utm_campaign=mgu_ga_whm_md_dsa_prog_org_ca_a34579232&gad_source=1&gclid=Cj0KCQiA6Ou5BhCrARIsAPoTxrCPA6M_69a986tmkgzgehIaKQWiuV1S-Yuq5nSCxk7Tz7Lo5oCv1fAaAlSPEALw_wcB">Why am I so tired all the time?</a></p>
                <ul>
                    
                </ul>
            </div>
            <div class="infoBox" id="content12" style="display: none">
                
                <p> Frustration can rise from an event where you want to do something but cannot, dealing with frustration can be difficult so here is an article with some methods of coping: <a href="https://mhanational.org/18-ways-cope-frustration" >Coping with Frustration </a></p>
                <ul>
                    
                </ul>
            </div>
             <div class="infoBox" id="content13" style="display: none">
               
                <p>Irritability can arise from many different things we have listed like stress, lack of sleep(Tiredness), or could result from a diet change. Identifying the root cause of your irritability is key. A article to help you is:  <a href="https://health.clevelandclinic.org/irritability" >Irritability how and what to do</a></p>
                
                   
            </div>
            <div class="infoBox" id="content14" style="display: none">
                
                <p>If you are feeling lonely a great resource is: <a href="https://www.wondermind.com/article/what-to-do-when-you-feel-lonely/">Wondermind.com!</a></p>
                <ul> 
                </ul>
            </div>
        </main>
    </body>
</html>














