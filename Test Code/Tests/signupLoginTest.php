<?php
define('TEST_ENVIRONMENT', true);
use PHPUnit\Framework\TestCase;

class RegistrationLoginTest extends TestCase{
    public function testUserRegistration(){
        require_once 'CSCI265-Project-development/sourcePHP/functions.php'; 
        $data = [
            'username' => 'ValidName',
            'email' => 'valid@example.com',
            'email_verified' => 'valid@example.com',
            'password' => 'securePassword',
            'age' => 25,
            'date' => '2024-01-01',
            'flow' => 'Low',
            'type' => 'regular',
            'duration' => '3',
            'notifications' => 'yes'
        ];
        $errors = signup($data);
        $this->assertEmpty($errors);

        $arr['email'] = $data['email'];
        $query = "select * from users where email = :email limit 1";
        $result = database_run($query, $arr);
        $this->assertNotEmpty($result);
    }
    public function testUserLogin() {
        require_once 'CSCI265-Project-development/sourcePHP/functions.php'; 

        global $testMode;
        $testMode = true;

        $data = [
            'email' => 'valid@example.com',
            'password' => 'securePassword'
        ];
        $hashedPassword = password_hash($data['password'],PASSWORD_DEFAULT);

        // Call the login function
        $errors = login($data);

        // Assertions
        $this->assertEmpty($errors);
        $this->assertTrue(isset($_SESSION['USER']));
        $this->assertTrue($_SESSION['LOGGED_IN'] === true);
    }

    /**
    * @runInSeparateProcess
    */
    public function testUserLogout() {
        require_once 'CSCI265-Project-development/sourcePHP/logout.php';
        require_once 'CSCI265-Project-development/sourcePHP/functions.php';  
        $data = [
            'email' => 'valid@example.com',
            'password' => 'securePassword'
        ];
        $errors = login($data);
        $this->assertTrue(isset($_SESSION['USER']));
        $this->assertTrue($_SESSION['LOGGED_IN'] === true);

        $this->assertFalse(headers_sent());

    }
    public function testMenuLinks(){
        $pageContent = file_get_contents('/Applications/XAMPP/xamppfiles/htdocs/cClophp/CSCI265-Project-development/htmlPages/homePage.php');

        $this->assertStringContainsString('href="calendarPage.php"', $pageContent);
        $this->assertStringContainsString('href="educationPage.php"', $pageContent);
        $this->assertStringContainsString('href="healthPage.php"', $pageContent);
        $this->assertStringContainsString('href="homePage.php"', $pageContent);
        $this->assertStringContainsString('href="moodsPage.php"', $pageContent);
        $this->assertStringContainsString('href="symptomsPage.php"', $pageContent);

    }

}
      
