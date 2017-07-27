<?php
$host = 'localhost/coding/login';  //Recplace it with you website domain e.g. www.vipinkhushu.com and i my case all files are in root directory.
/******Facebook APP Credentials**************/
$appid='806871826091810';
$appsecret='2c5c50a24b756c1c61d285b3516c464f';
$incommingurl='http://'.$host.'/token.php';
$postUrl=1;//1=on && 0=off
$postImage=1;//1=on && 0=off
$urlToPost='http://www.vipinkhushu.com/login';
$messageWithUrl='';
$imageToPost='assets/img/facebook-login-button.png';
$messageWithImage='';
/******SQL Server Credentials**************/
$DB_SERVER='localhost';
$DB_USERNAME='root';
$DB_PASSWORD='';
$DB_DATABASE='culmyca';

/******Google APP Credentials**************/
$redirect_url = 'http://'.$host.'/collectUserDataGoogle.php'; // The url of your web site
$client_id = '354155263149-e19cu8poues49lip02o3rp2dblp6enqs.apps.googleusercontent.com';
$client_secret = 'Tm9MR-DpQ6h8Jkbe38mXfkPg';
$api_key = 'AIzaSyC-blWGnR85kqzZeJxB5tfLFYqg-JjzOB8';

/******Twitter APP Credentials**************/
$consumer_key='4ibaJD4bkjhptJlot5OLEdiPf';
$consumer_secret='zqlNkG9fDiV0KTGyFlaHvJquvizXuZdajNDpXQ2NQzKQ0vKxDF';
$access_token='156933880-0RAFzC5o88mS5fFLlvAoqZ7zFrOnlGbaWUgOLtbq';
$access_secret='Fj1omKWGGUgAuZfOEdZmQ7WBmZe7rOu4ODbapMMw0m0tu';
$oauth_callback='http://'.$host.'/collectUserDataTwitter.php';
$messageToPost='Hey! Check Out The Online Assignment Portal For Colleges And Schools http://theasp.tk - via www.vipinkhushu.com';
$screen_name_of_person_to_be_followed='vipinkhushu';
?>