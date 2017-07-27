<?php
session_start();

/******Improting Facebook API Files**************/
require_once 'src/Facebook/autoload.php';
require_once 'credentials.php';
$fb = new Facebook\Facebook([
  'app_id' => $appid,
  'app_secret' => $appsecret,
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

/******Sets the default access token**************/
$fb->setDefaultAccessToken($_SESSION['token']);

/******Retrieving Users FB Profile With Display Picture**************/
try {
  $response = $fb->get('/me');
  $userNode = $response->getGraphUser();
  $responseDp = $fb->get('/me/picture?redirect=false&type=small');
  $userNodeDp = $responseDp->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
if(isset($_GET["post"])){
/******Posting Link To Users Timeline**************/
if($postUrl){
      $linkData = [
      'link' => $urlToPost,
      'message' => $messageWithUrl,
      ];

    try {
      // Returns a `Facebook\FacebookResponse` object
      $response = $fb->post('/me/feed', $linkData);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }
}
/******Posting Image To Users Timeline**************/
if($postImage){
      $data = [
      'message' => $messageWithImage,
      'source' => $fb->fileToUpload($imageToPost),
    ];

    try {
      // Returns a `Facebook\FacebookResponse` object
      $response = $fb->post('/me/photos', $data);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }
}
  
}
/******Printing Responses Recieved From Facebook Graph API**************/
//echo '<pre>' . print_r( $userNode, 1 ) . '</pre>';
//echo '<pre>' . print_r( $userNodeDp, 1 ) . '</pre>';
//echo 'Welcome ' . $userNode->getName().'<br/>';
//echo '<img src='.$userNodeDp->getProperty('url').'><br/>';
//echo'<a href=logout.php>Logout</a>';
$Fuid=$userNode->getProperty('id');
$fname=$userNode->getProperty('first_name');
$lname=$userNode->getProperty('last_name');
$gender=$userNode->getProperty('gender');
$email=$userNode->getProperty('email');
$fullname=$userNode->getProperty('name');
$fblink=$userNode->getProperty('link');
$dp=$userNodeDp->getProperty('url');
$referal='facebook';
/******Storing User Data In Databases (SQL)**************/
require 'credentials.php';
$connection = mysql_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db($DB_DATABASE) or die( "Unable to select database");

/******Adding Users To The Database And Updating Their Info If They Are Already Registered**************/

function checkAndAddUser($Fuid,$fname,$lname,$gender,$email,$fullname,$fblink,$dp,$referal){
    $check = mysql_query("select * from users where email='$email'");
  $check = mysql_num_rows($check);
  if (empty($check)) { // if new user . Insert a new record   
  $query = "INSERT INTO users (Fuid,fname,lname,email,fullname,fblink,gender,dp,lastlogin,referal) VALUES ('$Fuid','$fname','$lname','$email','$fullname','$fblink','$gender','$dp',now(),'$referal')";
  mysql_query($query);  
  $_SESSION['user_check']=$email;
  } else {   // If Returned user . update the user record 
  $_SESSION['user_check']=$email;
  $query = "UPDATE Users SET  lastlogin=now() WHERE email='$email' ";
  mysql_query($query);
  }
}
checkAndAddUser($Fuid,$fname,$lname,$gender,$email,$fullname,$fblink,$dp,$referal);
//echo $_SESSION['user_check'];


/**************Storing Data In Sessions******************/
$_SESSION['Fuid']=$userNode->getProperty('id');
$_SESSION['fname']=$userNode->getProperty('first_name');
$_SESSION['lname']=$userNode->getProperty('last_name');
$_SESSION['gender']=$userNode->getProperty('gender');
$_SESSION['fullname']=$userNode->getProperty('name');
$_SESSION['fblink']=$userNode->getProperty('link');
$_SESSION['dp']=$userNodeDp->getProperty('url');
$_SESSION['referal']='facebook';

/*********Redirecting To User Profile Page************/
header('location: ../home.php');
?>

