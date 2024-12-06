<?php

if (session_status() === PHP_SESSION_NONE && !defined('TEST_ENVIRONMENT')) {
    session_start();
}
function signup($data){
    $errors = array();

    //validate
    if(!preg_match('/^[a-zA-Z]+$/', $data['username'])){
        $errors[] = "<div style='color: #6979c2; font-family: \"Cormorant Garamond\", serif; font-size: 20px;'>Please enter a valid username</div>";
    }
    if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors[] = "<div style='color: #6979c2; font-family: \"Cormorant Garamond\", serif; font-size: 20px;'>Please enter a valid email</div>";
	}
    if(strlen(trim($data['password'])) < 4){
		$errors[] = "<div style='color: #6979c2; font-family: \"Cormorant Garamond\", serif; font-size: 20px;'>Password must be atleast 4 chars long</div>";
	}

    $check = database_run("select * from users where email = :email limit 1",['email'=>$data['email']]);
	if(is_array($check)){
		$errors[] = "<div style='color: #6979c2; font-family: \"Cormorant Garamond\", serif; font-size: 20px;'>That email already exists</div>";
	}

    $check = database_run("select * from users where username = :username limit 1",['username'=>$data['username']]);
	if(is_array($check)){
		$errors[] = "<div style='color: #6979c2; font-family: \"Cormorant Garamond\", serif; font-size: 20px;'>That username already exists</div>";
	}
    
    if(count($errors) == 0){

        $arr['username'] = $data['username'];
		$arr['email'] = $data['email'];
		$arr['age'] = $data['age'];
		$arr['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        $arr['date'] = $data['date'];
		$arr['flow'] = $data['flow'];
        $arr['type'] = $data['type'];
        $arr['duration'] = $data['duration'];
		$arr['notifications'] = ($data['notifications'] === 'yes') ? 1 : 0; 

		$query = "insert into users (username,email,age,password,date,flow,type,duration,notifications) values 
		(:username,:email,:age,:password,:date,:flow,:type,:duration,:notifications)";

		database_run($query,$arr);
	}
    return $errors;
}

function login($data){
	global $testMode;
	$errors = array();
 
	//validate 
	if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors[] = "Please enter a valid email";
	}

	if(strlen(trim($data['password'])) < 4){
		$errors[] = "Password must be atleast 4 chars long";
	}
 
	//check
	if(count($errors) == 0){

		$arr['email'] = $data['email'];

		$query = "select * from users where email = :email limit 1";
		$result = database_run($query, $arr);

        if (is_array($result) && count($result) > 0) {
            $row = $result[0]; // Fetch the first (and only) result

            // Verify the password
            if (password_verify($data['password'], $row->password)) {
                // Password is correct, set session variables
                $_SESSION['USER'] = $row;
                $_SESSION['LOGGED_IN'] = true;

                // Redirect to the profile or another protected page
                if (!$testMode) {
                    header("Location: /cClophp/CSCI265-Project-development/htmlPages/homePage.php");
                    exit();
                }
            } else {
                // If the password is incorrect
                $errors[] = "Wrong email or password";
            }
        } else {
            // If no user was found with that email
            $errors[] = "Wrong email or password";
        }
	}
	return $errors;
}
function database_run($query,$vars = array()){

	$string = "mysql:unix_socket=/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock;dbname=verify_db";
    $con = new PDO($string, 'root','');

    if(!$con){
		return false;
	}

    $stm = $con->prepare($query);
    $check = $stm->execute($vars);

    if($check){
        $data = $stm->fetchAll(PDO::FETCH_OBJ);

        if(count($data) > 0){
			return $data;
		}
    }

    return false;
}

function check_login($redirect = true){
	if(isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])){

		return true;
	}
	if($redirect){
		header("Location: login.php");
		die;
	}else{
		return false;
	}
	
}

function check_verified(){
	$id = $_SESSION['USER']->id;
	$query = "select * from users where id = '$id' limit 1";
	$row = database_run($query);

	if(is_array($row)){
		$row = $row[0];

		if($row->email == $row->email_verified){

			return true;
		}
	}
	return false;
}


