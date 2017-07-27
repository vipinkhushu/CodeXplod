<?php
//Endpoints Of Hackerearth API
session_start();
$endpoint_compile = "https://api.hackerearth.com/v3/code/compile/";
$endpoint_run = "https://api.hackerearth.com/v3/code/run/";
    // Get cURL resource
    $curl = curl_init();
    // Seting some options
    curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.hackerearth.com/v3/code/run/',
    CURLOPT_POST => 1,
    CURLOPT_CAINFO => 'cacert.pem',
    CURLOPT_SSL_VERIFYPEER => 'true',
    CURLOPT_ENCODING => 'UTF-8',
    CURLOPT_POSTFIELDS => array(
                        'client_secret' => 'b1803e335e227a1320fc6dc3587a0d496e97d3e5',
                        'time_limit' => '5',
                        'memory_limit' => '262144',
                        'source' => $_POST['code'],
                        'input' => '1
2
88
42
99',
                        'lang' => $_POST['language']
    )
    ));
require '../login/credentials.php';
$connection = mysql_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db($DB_DATABASE) or die( "Unable to select database");

/******Adding Users To The Database And Updating Their Info If They Are Already Registered**************/
    $response = json_decode(curl_exec($curl), true);
    $result=$response["run_status"]["status"];
    $query = "INSERT INTO `submissions` (user,code,language,result,time_stamp) VALUES ('$_SESSION[user_check]','$_POST[code]','$_POST[language]','$result',now())";
    mysql_query($query);

    // Send the request & returning response 

    echo print_r(curl_exec($curl),1);
?>