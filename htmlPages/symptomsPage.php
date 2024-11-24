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
        <link rel="icon" type="image/x-icon" href="../htmlImgs/headerImgs/logoCopy.png">
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
                min-height: 100px;
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
            
            .infoBox div{
                float: left;
                padding-bottom: 20px;
            }
            
            .buttonContainer{
                display: flex;
                flex-direction: column;
                margin-bottom: 50px;
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
                var text1 = document.getElementById("acneAntibiotics");
                var text2 = document.getElementById("contraceptives");
                var text3 = document.getElementById("isotretinoins");
                var text4 = document.getElementById("antiAndrogens");
                var text5 = document.getElementById("retinoids");
                if(checkBox.checked == true){
                    text1.style.display = "block";
                    text2.style.display = "block";
                    text3.style.display = "block";
                    text4.style.display = "block";
                    text5.style.display = "block";
                } else{
                    text1.style.display = "none";
                    text2.style.display = "none";
                    text3.style.display = "none";
                    text4.style.display = "none";
                    text5.style.display = "none";
                }
            }
            
            function display2(){
                var checkBox = document.getElementById("Bloating");
                var text1 = document.getElementById("exercise");
                var text2 = document.getElementById("sleep");
                var text3 = document.getElementById("probiotics");
                var text4 = document.getElementById("contraceptives");
                var text5 = document.getElementById("avoidEating");
                var text6 = document.getElementById("avoidDrugs");
                var text7 = document.getElementById("avoidPop");
                if(checkBox.checked == true){
                    text1.style.display = "block";
                    text2.style.display = "block";
                    text3.style.display = "block";
                    text4.style.display = "block";
                    text5.style.display = "block";
                    text6.style.display = "block";
                    text7.style.display = "block";
                } else{
                    text1.style.display = "none";
                    text2.style.display = "none";
                    text3.style.display = "none";
                    text4.style.display = "none";
                    text5.style.display = "none";
                    text6.style.display = "none";
                    text7.style.display = "none";
                }
            }
            
            function display3(){
                var checkBox = document.getElementById("Cramps");
                var text1 = document.getElementById("heat");
                var text2 = document.getElementById("lyingDown");
                var text3 = document.getElementById("exercise");
                var text4 = document.getElementById("antiInflammatory");
                var text5 = document.getElementById("contraceptives");
                if(checkBox.checked == true){
                    text1.style.display = "block";
                    text2.style.display = "block";
                    text3.style.display = "block";
                    text4.style.display = "block";
                    text5.style.display = "block";
                } else{
                    text1.style.display = "none";
                    text2.style.display = "none";
                    text3.style.display = "none";
                    text4.style.display = "none";
                    text5.style.display = "none";
                }
            }
            
            function display4(){
                var checkBox = document.getElementById("Dizzyness");
                var text1 = document.getElementById("ironSupplements");
                var text2 = document.getElementById("ironFoods");
                if(checkBox.checked == true){
                    text1.style.display = "block";
                    text2.style.display = "block";
                } else{
                    text1.style.display = "none";
                    text2.style.display = "none";
                }
            }
            
            function display5(){
                var checkBox = document.getElementById("Fatigue");
                var text1 = document.getElementById("hydrate");
                var text2 = document.getElementById("exercise");
                var text3 = document.getElementById("roomTemp");
                var text4 = document.getElementById("relax");
                var text5 = document.getElementById("avoidEating");
                if(checkBox.checked == true){
                    text1.style.display = "block";
                    text2.style.display = "block";
                    text3.style.display = "block";
                    text4.style.display = "block";
                    text5.style.display = "block";
                } else{
                    text1.style.display = "none";
                    text2.style.display = "none";
                    text3.style.display = "none";
                    text4.style.display = "none";
                    text5.style.display = "none";
                }
            }
            
            function display6(){
                var checkBox = document.getElementById("Headaches");
                var text1 = document.getElementById("antiInflammatory");
                var text2 = document.getElementById("caffeine");
                var text3 = document.getElementById("contraceptives");
                var text4 = document.getElementById("therapy");
                if(checkBox.checked == true){
                    text1.style.display = "block";
                    text2.style.display = "block";
                    text3.style.display = "block";
                    text4.style.display = "block";
                } else{
                    text1.style.display = "none";
                    text2.style.display = "none";
                    text3.style.display = "none";
                    text4.style.display = "none";
                }
            }
            
            function display7(){
                var checkBox = document.getElementById("LBP");
                var text1 = document.getElementById("antiInflammatory");
                var text2 = document.getElementById("heat");
                var text3 = document.getElementById("exercise");
                if(checkBox.checked == true){
                    text1.style.display = "block";
                    text2.style.display = "block";
                    text3.style.display = "block";
                } else{
                    text1.style.display = "none";
                    text2.style.display = "none";
                    text3.style.display = "none";
                }
            }
            
            function display8(){
                var checkBox = document.getElementById("Nausea");
                var text1 = document.getElementById("ginger");
                var text2 = document.getElementById("peppermint");
                var text3 = document.getElementById("hydrate");
                if(checkBox.checked == true){
                    text1.style.display = "block";
                    text2.style.display = "block";
                    text3.style.display = "block";
                } else{
                    text1.style.display = "none";
                    text2.style.display = "none";
                    text3.style.display = "none";
                }
            }
            
            function submit(){
                if(document.getElementById("Acne").checked){
                    display1();
                } else{
                    acneAntibiotics.style.display = "none";
                    contraceptives.style.display = "none";
                    isotretinoins.style.display = "none";
                    antiAndrogens.style.display = "none";
                    retinoids.style.display = "none";
                }
                
                if(document.getElementById("Bloating").checked){
                    display2();
                } else{
                    exercise.style.display = "none";
                    sleep.style.display = "none";
                    probiotics.style.display = "none";
                    avoidEating.style.display = "none";
                    avoidDrugs.style.display = "none";
                    avoidPop.style.display = "none";
                }
                
                if(document.getElementById("Cramps").checked){
                    display3();
                } else{
                    heat.style.display = "none";
                    lyingDown.style.display = "none";
                    antiInflammatory.style.display = "none";
                }
                
                if(document.getElementById("Dizzyness").checked){
                    display4();
                } else{
                    ironSupplements.style.display = "none";
                    ironFoods.style.display = "none";
                }
                
                if(document.getElementById("Fatigue").checked){
                    display5();
                } else{
                    hydrate.style.display = "none";
                    roomTemp.style.display = "none";
                    relax.style.display = "none";
                }
                
                if(document.getElementById("Headaches").checked){
                    display6();
                } else{
                    caffeine.style.display = "none";
                    therapy.style.display = "none";
                }
                
                if(document.getElementById("LBP").checked){
                    display7();
                }
                
                if(document.getElementById("Nausea").checked){
                    display8();
                } else{
                    ginger.style.display = "none";
                    peppermint.style.display = "none";
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
            <img class="hL" src="../htmlImgs/headerImgs/headerL.png">
            <div class="topbar">
                <p>Symptoms</p>
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
            
            
            <div class="infoBox" id="acneAntibiotics" style="display: none">
                <img src="../htmlImgs/symptomsImgs/antibiotics.png">
                    <h2>Antibiotics</h2>
                <p>For oral medication try doxycycline, minocycline or azithromycin.</p>
                <p>(*The last option would be recomended for pregnant women and children 7 years old and under).</p><p>Alternatively, for topical medication try erythromycin, clindamycin or Dapsone (Aczone gel).</p>
            </div>
            <div class="infoBox" id="antiAndrogens" style="display: none">
                <img src="../htmlImgs/symptomsImgs/antiAndrogen.png">
                    <h2>Anti-Androgens</h2>
                    <p>Using Anti-Androgens such as spironolactone may help.</p>
                    <p>(*Use only if other options do not work).</p>
            </div>
            <div class="infoBox" id="antiInflammatory" style="display: none">
                <img src="../htmlImgs/symptomsImgs/antiInflammatory.png">
                    <h2>Anti-inflammatory medicine</h2>
                    <p>You may suffer from symptoms that cause swelling in your body. Anti-inflammatory medicine such as Ibuprofin, naproxen or aspirin can help with this problem. These options are over-the-counter, so you can acquire them normally.</p>
            </div>
            <div class="infoBox" id="caffeine" style="display: none">
                <img src="../htmlImgs/symptomsImgs/caffeine.png">
                    <h2>Caffeine</h2>
                    <p>Try having some caffeinated foods and drinks. Do be aware that abruptly stopping taking caffeine can lead to withdrawal headaches.</p>
            </div>
            <div class="infoBox" id="contraceptives" style="display: none">
                <img src="../htmlImgs/symptomsImgs/contraceptive.png">
                    <h2>Contraceptives</h2>
                    <p>Contraceptives such as birth control pills can help with hormone control during your period.</p>
            </div>
            <div class="infoBox" id="exercise" style="display: none">
                <img src="../htmlImgs/symptomsImgs/exercise.png">
                    <h2>Exercise and stretching</h2>
                    <p>Regular exercise such as going for a walk or yoga can help regulate stress and keep your body fit.</p>
            </div>
            <div class="infoBox" id="ginger" style="display: none">
                <img src="../htmlImgs/symptomsImgs/ginger.png">
                    <h2>Ginger</h2>
                    <p>Ginger can help combat nausea. Try having some ginger tea or any ginger related foods.</p>
            </div>
            <div class="infoBox" id="heat" style="display: none">
                <img src="../htmlImgs/symptomsImgs/heat.png">
                <h2>Apply heat</h2>
                <p>Apply heat to your abdomen or lower back. This should help with any pain you're experiencing.</p>
            </div>
            <div class="infoBox" id="ironSupplements" style="display: none">
                <img src="../htmlImgs/symptomsImgs/ironSup.png">
                    <h2>Iron supplements</h2>
                    <p>Iron supplements will help with iron-deficiency anemia.</p>
            </div>
            <div class="infoBox" id="ironFoods" style="display: none">
                <img src="../htmlImgs/symptomsImgs/ironFoods.png">
                <h2>Iron-rich foods</h2>
                <p>Eat iron-rich foods such as meat, eggs, nuts or dried fruits.</p>
                <p>(*Calcium pills may affect your ability to absorb iron).</p>
            </div>
            <div class="infoBox" id="isotretinoins" style="display: none">
                <img src="../htmlImgs/symptomsImgs/isotretinoins.png">
                <h2>Isotretinoin</h2>
                <p>Isotretinoin such as Amnesteem or Clavaris may help.</p>
                <p>(*Use only if other options do not work).</p>
                <p>(*Requires prescription).</p>
            </div>
            <div class="infoBox" id="hydrate" style="display: none">
                <img src="../htmlImgs/symptomsImgs/hydrate.png">
                    <h2>Keep hydrated</h2>
                    <p>Drink plenty of water to avoid dehydration.</p>
            </div>
            <div class="infoBox" id="lyingDown" style="display: none">
                <img src="../htmlImgs/symptomsImgs/lyingDown.png">
                    <h2>Lying down</h2>
                    <p>Lie down on your back and raise your legs with a pillow or lie down on your side and raise your knees to your chest.</p>
            </div>
            <div class="infoBox" id="peppermint" style="display: none">
                <img src="../htmlImgs/symptomsImgs/mint.png">
                    <h2>Peppermint</h2>
                    <p>Try having some peppermint. This may help with your nausea.</p>
            </div>
            <div class="infoBox" id="probiotics" style="display: none">
                <img src="../htmlImgs/symptomsImgs/guts.png">
                    <h2>Probiotics</h2>
                    <p>Probiotics will help your gut biome, which may help against bloating.</p>
            </div>
            <div class="infoBox" id="roomTemp" style="display: none">
                <img src="../htmlImgs/symptomsImgs/temp.png">
                    <h2>Reduce room temperature</h2>
                    <p>Try lowering the room temperature. This may help with your sleep quality.</p>
            </div>
            <div class="infoBox" id="relax" style="display: none">
                <img src="../htmlImgs/symptomsImgs/relax.png">
                    <h2>Relaxing techniques</h2>
                    <p>Relaxation techniques such as meditation or breathing exercises will help reduce stress.</p>
            </div>
            <div class="infoBox" id="sleep" style="display: none">
                <img src="../htmlImgs/symptomsImgs/sleep.png">
                    <h2>Rest</h2>
                    <p>Get as much sleep as possible and keep a good sleep schedule. (Around 8~9 uniterrupted hours).</p>
            </div>
            <div class="infoBox" id="retinoids" style="display: none">
                <img src="../htmlImgs/symptomsImgs/retinoids.png">
                    <h2>Retinoids</h2>
                    <p>Using retinoids such as Adapalene, Tretinoin (Prescribed) or Tarazotene (Prescribed) may help.</p>
            </div>
            <div class="infoBox" id="therapy" style="display: none">
                <img src="../htmlImgs/symptomsImgs/therapy.png">
                    <h2>Hormone therapy.</h2>
                    <p>Estrogen supplements can be used to help regulate your hormone levels. Consult your doctor if you think you may need hormone therapy.</p>
            </div>
            
            
            <div class="infoBox" id="avoidEating" style="display: none">
                <img src="../htmlImgs/symptomsImgs/noS.png">
                    <h2>Avoid certain foods</h2>
                    <p>Avoid food with lots of salt, sugar and try eat slowly. This may help with your symptoms.</p>
            </div>
            <div class="infoBox" id="avoidDrugs" style="display: none">
                <img src="../htmlImgs/symptomsImgs/noDrugs.png">
                    <h2>Avoid tobacco and alchohol</h2>
                    <p>Tobacco and alchohol can possibly worsen your symptoms. It's best to avoid them for now.</p>
            </div>
            <div class="infoBox" id="avoidPop" style="display: none">
                <img src="../htmlImgs/symptomsImgs/noPop.png">
                    <h2>Avoid fizzy drink</h2>
                    <p>Fizzy drinks like pop may worsen your symptoms. It's best to avoid them for now.</p>
            </div>
            
        </main>
    </body>
</html>









