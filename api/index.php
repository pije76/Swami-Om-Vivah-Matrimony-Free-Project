<?php

session_start();

require 'Slim/Slim.php';
require 'dao/dbconnect.php';
require 'ResponceObject.php';
require_once('../FirePHPCore/fb.php');


//$login = $log->getLogin();
//$userLog = $log->isCurrentLoggedUser();


$app = new Slim();

$app->post('/login', 'getLogin');
$app->post('/logout', 'getLogout');
$app->get('/users', 'getUsers');
$app->POST('/user', 'getCurrentLoggedinUser');
$app->POST('/isUserLoggedIn', 'isCurrentLoggedUser');
$app->POST('/getMagazine', 'getMagazine');


$app->run();

function getLogin() {
    $request = Slim::getInstance()->request();
    $login = json_decode($request->getBody());
    fb('$login->loginName' + $login->loginName);
    fb('$login->loginPassword' + $login->loginPassword);
    // $loginCaptcha = $login->loginCaptcha;
    $logs = new loginFunctions();
    $check = $logs->getlogin($login);
}

/* try {
  if ($loginCaptcha == $_SESSION["code"]) {
  fb("I am here");
  $user_id = $login->loginName;
  $password = $login->loginPassword;
  $user = R::findOne('users', 'UserID=:userId', array(':userId' => $user_id));
  $userPassword = $user->Password;
  fb($user);
  if ($user && ($password == $userPassword)) {
  $_SESSION['UserID'] = $user->UserID;
  $_SESSION['LoginID'] = $user->LoginID;
  $_SESSION['Gender'] = $user->Gender;
  $_SESSION['GoldMember'] = $user->GoldMember;
  $_SESSION['EmailAddress'] = $user->EmailAddress;
  $_SESSION['LOGIN_STATUS'] = 'loggedIn';
  $resDto = new ResponseDto();
  $resDto->success = false;
  $resDto->errorcode = 1;
  $resDto->errorMessage = $resDto->INVALID_USER;
  echo "success";
  echo json_encode($resDto);

  } else {
  echo '{"error":{"text": "Wrong Username or Password"}}';
  }
  $db = null;
  } else {
  echo '{"error":{"text": "Wrong Captcha Entered"}}';
  }
  } catch (PDOException $e) {
  echo '{"error":{"text":' . $e->getMessage() . '}}';
  }
  } */

function getLogout() {
    $_SESSION['UserID'] = '';
    $_SESSION['EmailAddress'] = '';
    $_SESSION['LoginID'] = '';
    $_SESSION['GoldMember'] = '';
    session_destroy();
}

function getUsers() {
    // $sql = "SELECT * FROM users";
    try {
        /* $db = getConnection();
          $stmt = $db->prepare($sql);
          $stmt->execute();
          $user = $stmt->fetchAll();
          fb($user);
          $db = null; */
        $user = R::find('users');
        echo ($user);
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function getCurrentLoggedinUser() {
    $userId = $_SESSION['UserID'];
    try {
        $user = R::findOne('users', 'UserID=:userId', array(':userId' => $userId));
        if ($user) {
            echo $user;
        }
        $db = null;
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function getMagazine() {
    $sql = "SELECT 	ProfileID, 
	MaritalStatus, 
	Height, 
	Complexion, 
	Caste, 
	EducationIn, 
	Profession, 
	CityID
	FROM 
	user_profile 
	LIMIT 0, 30";
    try {
        $users = R::getAll('select ProfileID,MaritalStatus, Height, Complexion, Caste, EducationIn, Profession, CityID from user_profile');

        echo trim(json_encode($users));
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

?>