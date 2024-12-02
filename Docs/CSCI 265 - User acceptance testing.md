# **CSCI 265 User Acceptance Testing (Phase 5\)**

---

## **Team Name:** WeWantGOODMarks

---

## **Project:** C-Clo

---

Contact \- Daniela Malagon [danielitamalagon@gmail.com](mailto:danielitamalagon@gmail.com)   
---

1. **Known issues**

Some parts of the project are still being implemented, which means their test codes still need to be done. Furthermore, since the code is divided into different types of files (HTML, PHP, and JavaScript), the test code is also written in different languages in order to test the different parts of the project. 

2. **The test plan**

This section provides an understanding of the process to be followed including an overview of the process and an introduction to the key anticipated challenges, the intended timeline, the roles and responsibilities of the different testers, the process to be followed, and a summary of all the test cases to be applied.

**2.1 Testing overview**  
	The testing environment used for the Registration, login and logout cases is going to be a PHP unit, a unit testing framework designed specifically to test PHP code. To design the tests we create a class called RegistrationLoginTest (importing TestCase library from PHP unit) which includes three functions, one for registration tests, one for login tests, and one for logout test. Additionally, we include a test to check if each of the menu links are opening correctly.

The main  goal of the testing phase was to ensure that every link and button provided in every web page (Moods, Symptoms, Health, Education.. etc.)  functioned as expected.  To achieve this, the test code involves automated scripts written in Python  using selenium libraries. Each web page  (i.e. each .html file ) was tested using a specific script (i.e.  a specific .py file ). These test codes were designed to automatically open the  specified web page, systematically go through each link/ button in that web page.   This method of testing was chosen as it mimics actual user interactions, making it more efficient to test the functionality of the web pages.  

**2.2 Key testing challenges**  
	The biggest challenge for the team is that we are unfamiliar with the PHP unit. In fact, the team just recently learned how to program in PHP, meaning there are a lot of challenges as to how to write test cases and the whole functionality of the PHP unit. 

The primary testing challenge was the team's lack of experience in writing test codes. Understanding and selecting environments to write test codes was difficult.

The team faced challenges when implementing the test codes in python. The  major problem was that C-clo’s web pages have slow-loading elements. For example, the external links provided in the educational.html and the links in the moodPage.html. These links take time to load, which often generates errors like TimedOutException or  NoSuchElementException. 

**2.3** **Testing timeline**  
Based on those assumptions concerning the Registration, login, logout, and menu displaying testing, we assume the test infrastructure, documentation, and run will be completed by November 29\. Teammate Daniela Malagon is in charge of the registration and menu displaying test, and teammate Xiaoya Xing is in charge of the login and logout tests.

Based on the implementations and assumptions so far , the test code for Health and Education  web pages will be completed to run on November 22 while the test codes  to test Moods and Symptoms will be finished by November 30\.  Teammate Nayana Marri is responsible for the testing of these web pages.

**2.4** **Test process**  
	This section intends to demonstrate the process the testers will follow with each of the different types of tests. 

* **Registration tests:** the tester Daniela Malagon is in charge of ensuring the registration process is running smoothly, that is the user is indeed being loaded to the database and the database can find the user once it has been registered. It is worth noting that before running the tests, the function signup in the file functions.php has to be running without errors. The tool used is PHP unit tests which can be run using the command “/vendor/bin/phpunit“, when tests pass the unit test shows in green OK and next to it the number of tests passed and the number of assertions, otherwise, it shows in red FAILURES\! with the number of test, assertions and failures.   
* **Login tests:** The tester Xiaoya Xing is responsible for ensuring the login process runs smoothly and that users can successfully log in using the email and password stored in the database. Before running the test, it is necessary to confirm that the login.php file is functioning without any issues. The PHPUnit framework is used as the testing tool, and tests are executed by running the command /vendor/bin/phpunit. When the test passes, the unit test output will display in green "OK" along with the number of passed tests and assertions. Otherwise, it will display in red "FAILURES\!" with detailed information about the failed tests.  
* **Logout tests:** The tester Xiaoya Xing was tasked with verifying the logout functionality. The goal of this test is to ensure that after clicking the "Logout" button on the page, the user is redirected to the login page and is unable to perform further actions as a "logged-in user." Before running the tests, it is necessary to ensure that the logout.php file is functioning correctly. The testing tool is the PHPUnit framework, and tests are executed by running the command ./vendor/bin/phpunit. The expected output for passing tests is green "OK," showing the number of passed tests and assertions; in case of failure, the output will be red "FAILURES\!" with detailed information.  
* **Menu displaying test:** the tester Daniela Malagon is in charge of ensuring the menu links are opening without any errors and that they can open no matter what the current option the user is located in. The tool used is PHP unit tests which can be run using the command “/vendor/bin/phpunit“, when tests pass the unit test shows in green OK and next to it the number of tests passed and the number of assertions, otherwise, it shows in red FAILURES\! with the number of test, assertions and failures. 

**2.5 Test cases summary and organization**  
	This section describes the core different types of test cases relevant to the product and how the test cases have been organized. 

* tests involving registration and adding to the database   
  * tests involving login to the system  
  * tests involving logout to the system  
  * tests involving the menu options displaying

**2.6 Test case list**  
	This section presents a table of all the test cases to be applied, with each entry providing the test case name, and a few clarifications of each test case.

| testUserRegistration | Registration process success | Create a fake user and check if the array of errors is empty given that the fields are correctly filled. |
| :---- | :---- | :---- |
|  |  | Using the select query, search the user and make sure it is in the database  |
| testUserLogin | Login process success | Using a pre-created test account, call the login function and check if the login is successful. |
| testUserLogout | Logout process success | Using a pre-created test account, call the logout function and check if it can be successfully logged out and if the session data is successfully cleared. |
| testMenuLinks | Menu links success | Create a variable at the home page link and go to the other 5 menu links ensuring they can successfully open |

The main goal in testing these web pages is to ensure that the test script opens the web page in a browser and automatically clicks on all the links, buttons and  checkboxes available.

 For Heath.html:  The goal for the tester  is to check if the embedded  YouTube links  open and load correctly . Additionally, the FAQ section should be checked to verify if the answers are displayed when clicked on the questions.

For Education.html: The main goal of the tester  while testing for this web page is to check if all the provided Resource links and the other database button open and load the linked external web pages correctly.

 For MoodsPage.html:  The main goal is to click on the checkboxes and use the submit button to verify if a drop-down box appears and to ensure that the links within this description box load correctly. Additionally, it's important to check that clicking the 'Clear All' button hides all the drop-down boxes.

For Symptoms.html: The main goal is to click on the checkboxes and use the submit button to verify if a drop-down box appears and to ensure that the links within this description box load correctly. Additionally, it's important to check that clicking the 'Clear All' button hides all the drop-down boxes.

**Tools and Libraries Used:**

Selenium: Selenium is a popular tool used for  automating web browsers. It performs user interactions which is a more efficient way of testing web pages.

**Components of Selenium used**:

By: A locator to search any elements in the web pages.    

WebDriverWait(): Used to perform implicit or explicit  waits to allow for any condition to happen( like some element to be visible )

EC:  Defines the condition for the WebDriverWait() to wait

 

**Web Browser:**

Chrome: Chrome is used as a web browser.  webdriver.Chrome() command used in every test code launches a chrome browser window to open that is controlled by selenium.

**VS Code:**

The team used Visual Studio code to write, edit and run the python test code. This provided a convenient environment for debugging.

**Python Language:**

Python is used to write the test scripts as it is simple, easy to understand and popularly used for automation. Python allows us to use selenium libraries which is crucial to implement the test cases.

Key Components:

time.sleep() : this function is used in most of the python  test scripts. We used this to hold the execution for the specified number of seconds. \[This is in-built in python time module\]

 **Process Set-Up**

·        The Python environment was downloaded from the official website (python.org) as we intended to write the test code in python.

·        Required Selenium Packages were installed.

·        Writing the command “pip install  selenium" in the Terminal/ Command Prompt was Required.

·        We need to download a chrome web driver called ChromeDriver.

·        Selenium needs a web driver that controls the web browser.

·        We need to download the version of ChromeDriver that is compatible with our Browser.

·        The line “from selenium import webdriver” in most of the python test scripts imports the WebDriver module from the selenium library.


3. **The test infrastructure**

This section outlines everything needed to carry out the actual testing including software tools and environment, user action scripts, executables, version control and branch structure, directory and file structure and content, independent subsystems, and external resources.  

**3.1 Software tools and environment**  
	The objective for this section is to describe the environment(s) in which we will be running the product while testing and any additional tools you'll be using to conduct/monitor/report the test results.

* Registration, login, and logout process is currently only available on a local host level using XAMPP, which is in one of the teammate's laptops. This means that the tests need to be run on this laptop, as these web pages run on that specific computer. Since to access the menu links, the login process has to be used, the menu links testing needs to be done on this laptop as well. The database connection is also done with XAMPP and the database system used in PHPMyAdmin, detailed descriptions of database management are given in Section 3.7.  

**3.2 User action scripts**

* **Registration Script:**

	**Name:** testUserRegistration  
	**Description:** checks whether the registration of a user with valid data was indeed successful. For this purpose, first, the test checks if the array of errors (errors that were defined in the function signup in functions.php) is empty, and then we prompt the database with a query to search the user just inserted, which result should be different than empty.   
	**Prior Scripts needed:** none  
	**Sequence of steps:**

* Create a ghost user filling all the fields with valid data  
* Create a variable named errors calling function signup  
* Check if the variable errors are empty  
* Create a variable email with the email just inserted   
* Prompt the database to search that email using the variable just created   
* Check the prompt returned by the user

	**Expected behaviour:** The user should be redirected to Login, Test cases show as follows

* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 13, Failures: 1\.

* **Login Script:**  
  **Name:** testUserLogin  
  **Description:** Verifies the login functionality works as expected, allowing users to log in with a valid email and password. The test calls login.php using the test account's email and password, ensuring no errors are returned. It checks the database for the corresponding user information and validates the login status.  
  **Prior Scripts needed:** testUserRegistration  
  **Sequence of steps:**  
* Create a data variable containing the test account's email and password.  
* Create a function named ‘errors’ and call login().  
* Check if ‘errors’ is empty.  
* Verify that the USER and LOGGED\_IN session variables are correctly set.  
* Confirm that the LOGGED\_IN session variable is set to true, indicating a successful login.  
  **Expected behaviour:** The system successfully verifies the user’s identity and redirects to the main page.  
* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 12, Failures: 1\.

* **Logout Script:**  
  **Name:** testUserLogout  
  **Description:** Verifies the logout functionality works as expected. The test starts by assuming the user has successfully logged in (using the testUserLogin script to validate the login state). It then simulates a logout request by calling logout.php and verifies that the session variables are cleared and the user is redirected appropriately.  
  **Prior Scripts needed:** testUserRegistration, testUserLogin  
  **Sequence of steps:**  
* Call testUserLogin to register and log in the test account.  
* Create a function named errors and call logout().  
* Verify that the session variable USER is unset.  
* Verify that the session variable LOGGED\_IN is unset.  
* Confirm that the user is redirected to the login page.  
  **Expected behaviour:** The system successfully logs out the user, clears the session, and redirects to the login page.  
* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 10, Failures: 1\.  
    
* **Menu Options Script:**

	**Name:** testMenuLinks  
	**Description:** test that the menu options links are opening correctly   
	**Prior Scripts needed:** none  
	**Sequence of steps:**

* Open the home page link  
* Check the calendar page link is opening  
* Check the education page link is opening  
* Check the health page link is opening  
* Check the home page link is opening(it should simply reload the page)  
* Check the moods page link is opening  
* Check the symptoms page link is opening

**Expected behaviour:** The user should be able to open all links, Test cases show as follows

* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 9, Failures: 1\.


  
**3.3** **Executables (test programs/scripts, stubs and drivers)**  
	This section details any/all the scripts and programs the team has created to help automate the user acceptance test process. 

* To use PHP unit, the composer was downloaded which includes a vendor folder in charge of the execution of tests, and two files called “composer.json” and “composer.lock”. An additional file had to be created called “phpunit.xml” which defines where the tests are located, whether to stop on failure and some minor details like the colour of failed and passed tests. Any related tests to PHP are located in cClophp/tests/signupLoginTests.php and inside the class RegistrationLoginTest the testing functions are defined.

**3.4 Scripts Descriptions:**

* **Registration script:**

	**Location:** cClophp/tests/signupLoginTests.php  
**Source code link:** cClophp/CSCI265-Project-development/sourcePHP/functions.php (only function signup() is being tested here)  
	**Description:** checks whether the registration of a user with valid data was indeed successful. For this purpose, first, the test checks the array of errors (errors that were defined in the function signup in functions.php) is empty, and then we prompt the database with a query to search the user just inserted, which result should be different than empty.   
	**Setup:** The tester laptop must be used to run it, and turn on the servers Apache Web server and MySQL Database in XAMPP. PHPMyAdmin must be opened in the database with the name “verify\_db” and the table “users”  
	**Sequence of actions:** Run the command “/vendor/bin/phpunit” in the terminal, the tester needs to make sure this command is being run inside the cClophp folder.   
	**Expected behaviour:** The user should be redirected to Login, Test cases show as follows

* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 3, Assertions: 13, Failures: 1\.

	**Required cleanup:** Erase the fake user created to test from the database, simply select the user and the option delete in PHPMyAdmin.

* **Login script:**  
  **Location:** cClophp/tests/signupLoginTests.php  
  **Source code link:** cClophp/CSCI265-Project-development/sourcePHP/functions.php and cClophp/CSCI265-Project-development/sourcePHP/login.php  
  **Description:** Verifies the login functionality works as expected, allowing users to log in with a valid email and password. The test calls login.php using the test account's email and password, ensuring no errors are returned. It checks the database for the corresponding user information and validates the login status.  
  **Setup:** The tester laptop must be used to run it, and turn on the servers Apache Web server and MySQL Database in XAMPP. PHPMyAdmin must be opened in the database with the name “verify\_db” and the table “users”.  
  **Sequence of actions:** Run the command “/vendor/bin/phpunit” in the terminal, the tester needs to make sure this command is being run inside the cClophp folder.  
  **Expected behaviour:** The system successfully verifies the user’s identity and redirects to the main page.  
* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 12, Failures: 1\.  
  **Required cleanup:** Delete the test user from the database. Open PHPMyAdmin, select the test user, and delete the entry from the \`users\` table.  
    
* **Logout script:**  
  **Location:** cClophp/tests/signupLoginTests.php  
  **Source code link:** cClophp/CSCI265-Project-development/sourcePHP/functions.php and cClophp/CSCI265-Project-development/sourcePHP/logout.php  
  **Description:** Verifies the logout functionality works as expected. The test starts by assuming the user has successfully logged in (using the testUserLogin script to validate the login state). It then simulates a logout request by calling logout.php and verifies that the session variables are cleared and the user is redirected appropriately.  
  **Setup:** The tester laptop must be used to run it, and turn on the servers Apache Web server and MySQL Database in XAMPP. PHPMyAdmin must be opened in the database with the name “verify\_db” and the table “users”.  
  **Sequence of actions:** Run the command “/vendor/bin/phpunit” in the terminal, the tester needs to make sure this command is being run inside the cClophp folder.  
  **Expected behaviour:** The user should be redirected to Login, Test cases show as follows:  
* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 10, Failures: 1\.  
  **Required cleanup:**  Delete the test user from the database. Open PHPMyAdmin, select the test user, and delete the entry from the \`users\` table.

* **Menu Options Script:**

	**Name:** testMenuLinks  
**Location:** cClophp/tests/signupLoginTests.php  
**Source code link:** cClophp/CSCI265-Project-development/htmlPages (all pages are tested here)  
	**Description:** test that the menu options links are opening correctly  
**Setup:** The tester laptop must be used to run it, and turn on the servers Apache Web server.  
	**Sequence of actions:** Run the command “/vendor/bin/phpunit” in the terminal, the tester needs to make sure this command is being run inside the cClophp folder.   
	**Expected behaviour:** The user should be redirected to Login, Test cases show as follows

* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 9, Failures: 1\.

	**Required cleanup:** None

* **Health\_button Script**  
  **Name:  health\_button**  
  **Description:** This script is implemented to test the functionality of the health web page of C-clo. Checks if all the elements of the web page like the embedded Youtube links and the FAQ sections function properly. The links must be loaded and the answers must be displayed in the drop box in the FAQ section.  
  **Prior Scripts:**  none  
  **Sequence of Steps:**

  ·        Define file path of the health.html file  
  ·        Driver.get() loads the html files  
  ·        The embedded YouTube links. (driver.find\_elements() helps to find tags on the page)

  driver.close() closes the new window opened.

  ·        driver.find\_elements() finds the faq items  
  ·        question.click() clicks on each question  
  ·        driver.quit() closes the browser

  **Expected behavior:**  
  The test script triggers to open the specified web page, checks if all the links and dropbox options \[FAQ Section\] functions as intended.  
  Prints  
  Testing video 1  
  Video 1 loaded successfully  
  Testing video 2  
  Video 2 loaded successfully  
  All video links tested successfully  
  Testing FAQ item 1  
  FAQ 1 answer is visible after clicking  
  FAQ 1 answer is not visible on the screen  
  Testing FAQ item 2  
  FAQ 2 answer is visible after clicking  
  FAQ 2 answer is not visible on the screen  
  Testing FAQ item 3  
  FAQ 3 answer is visible after clicking  
  FAQ 3 answer is not visible on the screen  
  FAQ section  tested successfully

 

* **Education\_button Script**  
  **Name:  Education\_button**  
  **Description:** This script is implemented to test the functionality of the health web page of C-clo. This script checks if all the resource links open and load correctly. Checks if the “Other Database” button functions as intended.  
  **Prior Scripts:**  none  
  **Sequence of Steps:**  
* Define file path of the Education.html file  
* Driver.get() loads the html files  
* EC.element\_to\_be\_clickable() was used to find the Database button  
*  EC.presence\_of\_element\_located() helps with identifying resource-list  
* for index in range() allows go go to every resource link one by one  
* driver.get(file\_path) navigates back to  educational web page the web page  
     
  **Expected behavior:** Goes through the “Other Database button” and all the resource links to see if they are visible and clickable.  
  Prints Test Passed: All resource links are valid and clickable.

**3.5 Version control and branch structure**  
Our GitHub server has 3 core branches and one miscellaneous branch.  Our 3 core branches are Development, Testing, and Production. Our main testing occurs in the Testing branch.  First, any code that has been approved to go into the Testing branch, has been previously uploaded to the development branch where it has been lightly tested by the team member who made it and possibly other team members who are helping. Once the code is in the development branch and the team member or members are ready to test it thoroughly, it goes into the Testing branch.  We have two directories in our testing branch Testing reports and Testing code. Testing reports hold our documents that show what test cases we have for what file and which test cases passing and failing. The Testing code directory holds the code, test code, testing scripts, etc…. , basically, anything coding-related files that deal with or are tested.

**3.6 Directory and file structure and content**  
This section outlines the directory structure and file organization of the project test content.

* Anything related to PHP is located in the cCloPhP folder this folder is divided into 4 subfolders: PHPmailer, source, tests, and vendor, and it contains 3 loose files and the PHPmailer.zip. The concerning files are functions.php and logout.php located in the source subfolder and signupLoginTests.php in the tests subfolder

**3.7 Independent subsystems and external resources (database servers)**  
	The database system used is PHPmyadmin and the database created to store anything related to the project is called verify\_db. Currently, verify\_db has two tables: users and verify, for testing purposes, we will only focus on the user's table. Currently, users have 11 columns: id, username, email, email\_verified, age, password, date, flow, type, duration, and notifications. To create our testing user we provide the database with all those fields (and with valid data) and then do all the checks described above.  
	  
PHPMyAdmin can only be used on a local server(or at least until this point of the project), for that reason any test that uses a database will be run on the same computer as the one where the database was created. The database connection is done in functions.php specifically function database\_run.

4. **Future tests**

Calendar:

- Calculation testing: We plan to make sure the output of the calendar is correct.  
- Display testing:   
- Notification testing: To be discussed later. (Is the mailer sending the mail?)

Symptoms/Moods:

- External link testing: 

Accounts:

- Registration testing: Completed  
- Login/logout testing: Completed

html:

- Menu testing: Completed

5. **Appendix: detailed test case descriptions**

For every test case listed in the earlier summary, this section provides all the details about that case. 

**Appendix 1: Registration Script**  
**Name:** testUserRegistration  
**Location:** cClophp/tests/signupLoginTests.php  
**Source code link:** cClophp/CSCI265-Project-development/sourcePHP/functions.php (only function signup() is being tested here)  
**Description:** Check whether the registration of a user with valid data was successful. For this purpose, first, the test checks the array of errors (errors that were defined in the function signup in functions.php) is empty, and then we prompt the database with a query to search the user just inserted, which result should be different than empty.   
**Prior Scripts needed:** none  
**Setup:** The tester laptop must be used to run it, and turn on the servers Apache Web server and MySQL Database in XAMPP. PHPMyAdmin must be opened in the database with the name “verify\_db” and the table “users”  
**Sequence of steps:**

* Create a ghost user filling all the fields with valid data  
* create a variable named errors calling function signup  
* Check if the variable errors are empty  
* Create a variable email with the email just inserted   
* Prompt the database to search that email using the variable just created   
* Check the prompt returned by the user

**Sequence of actions:** Run the command “/vendor/bin/phpunit” in the terminal, the tester needs to make sure this command is being run inside the cClophp folder.   
**Expected behaviour:**

* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 3, Assertions: 13, Failures: 1\.

**Required cleanup:** Erase the fake user created to test from the database, simply select the user and the option delete in PHPMyAdmin.  
**Requirements relation:** in section 6 “Website interface, screens, and menus”, in the registration page description, we can now guarantee that the only users in our database are the ones with a valid registration  
**Testers:** In the file signupLoginTests.php, the function testUserRegistration is in charge of testing registering   
**Reporting process:** To keep track of which tests are passing and which aren't, we will keep a document called TestReport.md, which is a chart like the one shown in Section 2.6 plus another column defining the status (passed or failed). Our testing lead, Nayana Marri, will be notified of the status.

**Appendix 2: Login Script**  
**Name:** testUserLogin  
**Location:** cClophp/tests/signupLoginTests.php  
**Source code link:** cClophp/CSCI265-Project-development/sourcePHP/functions.php and cClophp/CSCI265-Project-development/sourcePHP/login.php  
**Description:** Verifies the login functionality works as expected, allowing users to log in with a valid email and password. The test calls login.php using the test account's email and password, ensuring no errors are returned. It checks the database for the corresponding user information and validates the login status.  
**Prior Scripts needed:** testUserRegistration  
**Setup:** The tester laptop must be used to run it, and turn on the servers Apache Web server and MySQL Database in XAMPP. PHPMyAdmin must be opened in the database with the name “verify\_db” and the table “users”.  
**Sequence of steps:**

* Create a data variable containing the test account's email and password.  
* Create a function named ‘errors’ and call login().  
* Check if ‘errors’ is empty.  
* Verify that the USER and LOGGED\_IN session variables are correctly set.  
* Confirm that the LOGGED\_IN session variable is set to true, indicating a successful login.

**Sequence of actions:** Run the command “/vendor/bin/phpunit” in the terminal, the tester needs to make sure this command is being run inside the cClophp folder.   
**Expected behaviour:** The system successfully verifies the user’s identity and redirects to the main page.

* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 12, Failures: 1\.

**Required cleanup:** Delete the test user from the database. Open PHPMyAdmin, select the test user, and delete the entry from the \`users\` table.  
**Requirements relation:** The login functionality supports Section 5: Website interface, screens, and menus by ensuring users can securely log in with their email and password, as described under the Login screen and it also meets Privacy and Security in scetion 8: Non-functional requirements.  
**Testers:** In the file signupLoginTests.php, the function ttestUserlogin is in charge of testing the user's success in logging.  
**Reporting process:** To keep track of which tests are passing and which aren't, we will keep a document called TestReport.md, which is a chart like the one shown in Section 2.6 plus another column defining the status (passed or failed). Our testing lead, Nayana Marri, will be notified of the status.  
**Appendix 3: Logout Script**  
**Name:** testUserlogout  
**Location:** cClophp/tests/signupLoginTests.php  
**Source code link:** cClophp/CSCI265-Project-development/sourcePHP/functions.php and cClophp/CSCI265-Project-development/sourcePHP/logout.php  
**Description:** Verifies the logout functionality works as expected. The test starts by assuming the user has successfully logged in (using the testUserLogin script to validate the login state). It then simulates a logout request by calling logout.php and verifies that the session variables are cleared and the user is redirected appropriately.  
**Prior Scripts needed:** testUserRegistration estUserLogin   
**Setup:** The tester laptop must be used to run it, and turn on the servers Apache Web server and MySQL Database in XAMPP. PHPMyAdmin must be opened in the database with the name “verify\_db” and the table “users”.  
**Sequence of steps:**

* Call testUserLogin to register and log in the test account.  
* Create a function named errors and call logout().  
* Verify that the session variable USER is unset.  
* Verify that the session variable LOGGED\_IN is unset.  
* Confirm that the user is redirected to the login page.

**Sequence of actions:** Run the command “/vendor/bin/phpunit” in the terminal, the tester needs to make sure this command is being run inside the cClophp folder.   
**Expected behaviour:** The system successfully logs out the user, clears the session, and redirects to the login page.

* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 10, Failures: 1\.

**Required cleanup:** Delete the test user from the database. Open PHPMyAdmin, select the test user, and delete the entry from the \`users\` table.  
**Requirements relation:** The logout functionality aligns with Section 5: Website interface, screens, and menus, allowing users to log out smoothly and return to the login screen. It also ensures compliance with Privacy and Security in section 8: Non-functional requirements by clearing session data and preventing unauthorized access.  
**Testers:** In the file signupLoginTests.php, the function ttestUserlogin is in charge of testing the user's success in logout.  
**Reporting process:** To keep track of which tests are passing and which aren't, we will keep a document called TestReport.md, which is a chart like the one shown in Section 2.6 plus another column defining the status (passed or failed). Our testing lead, Nayana Marri, will be notified of the status.

**Appendix 4: Menu Options Script:**  
**Name:** testMenuLinks  
**Location:** cClophp/tests/signupLoginTests.php  
**Source code link:** cClophp/CSCI265-Project-development/htmlPages (all pages are tested here)  
**Description:** test that the menu options links are opening correctly  
**Prior Scripts needed:** none  
**Setup:** The tester laptop must be used to run it, and turn on the servers Apache Web server.  
**Sequence of steps:**

* Open the home page link  
* Check the calendar page link is opening  
* Check the education page link is opening  
* Check the health page link is opening  
* Check the home page link is opening(it should simply reload the page)  
* Check the moods page link is opening  
* Check the symptoms page link is opening

**Sequence of actions:** Run the command “/vendor/bin/phpunit” in the terminal, the tester needs to make sure this command is being run inside the cClophp folder.   
**Expected behavior:** The user should be redirected to Login, Test cases show as follows

* Test passed: OK (4 tests, 14 assertions)  
* Test failed: FAILURES\! Tests: 4, Assertions: 5, Failures: 1\.

**Required cleanup:** None  
**Requirements relation:**  in section 6 “Website interface, screens, and menus”, in the screen and menu navigation description, we can now guarantee that the user can navigate freely through the menu options.  
**Testers:** In the file signupLoginTests.php, the function testMenuLinks is in charge of testing menu links  
**Reporting process:** To keep track of which tests are passing and which aren't, we will keep a document called TestReport.md, which is a chart like the one shown in Section 2.6 plus another column defining the status (passed or failed). Our testing lead, Nayana Marri, will be notified of the status.

