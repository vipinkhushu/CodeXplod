<?php 
session_start();if(isset($_SESSION['user_check'])){header("location:home.php");}?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
    <head>                
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <meta name="description" content="The Annual Hackathon of MSIT">
      <meta name="keywords" content="code,xplod,programming,Talk,is,cheap,Show,me,the,Code,An,Online,IDE,for,Coding,Contests">
  		<title>CodeXplod - The Geek IDE</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/css/style.css"  media="screen,projection"/> 
      <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
          <!-- for Google -->
      <meta name="description" content="An Online IDE For Coding Contests" />
      <meta name="keywords" content="code,xplod,programming,Talk,is,cheap,Show,me,the,Code,An,Online,IDE,for,Coding,Contests" />
      <meta name="author" content="Vipin Khushu" />
      <meta name="copyright" content="vipinkhushu@hotmail.com" />
      <meta name="application-name" content="codeXplod" />
      <!-- for Facebook -->
      <meta property="og:url"                content="http://www.vipinkhushu.com/" />
      <meta property="og:type"               content="article" />
      <meta property="og:title"              content="Online Coding IDE" />
      <meta property="og:description"        content="An Online IDE For Coding Contests" />
      <meta property="og:image"              content="http://www.vipinkhushu.com/assets/images/giphy.gif" />
      <meta property="og:site_name"          content="CodeXplod" />
      <meta property="fb:app_id"             content="673459569433037" />
      <!-- for Twitter -->
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:title" content="CodeXplod" />
      <meta name="twitter:description" content="An Online IDE For Coding Contests" />
      <meta name="twitter:image" content="http://www.vipinkhushu.com/assets/images/giphy.gif" />
      <link rel="apple-touch-icon" href="images/logo.gif">
      <link rel="icon" href="images/logo.gif">
          <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
    </head>


    <body class="grey darken-3">

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container"><br/><br/>
        <h2 class="header center white-text text-lighten-2 shade brandName"><tt>Code<b>X</b>plod</tt></h2>
        <h2 class="header center teal-text text-lighten-2 shade element hide-on-med-and-down"><tt>Talk is cheap,Show me the Code</tt></h2>
        <div class="row center">
          <h5 class="header col s12 light">An Online IDE For Coding Contests</h5>
        </div>
        <div class="row center">
            <div class="col s12 l4 m4">
                    <?php
          /******Improting Facebook API Files**************/
          require_once 'login/src/Facebook/autoload.php';
          require_once 'login/credentials.php';
          /******Facebook API Connection With My APP**************/
          $fb = new Facebook\Facebook([
          'app_id' => $appid,
          'app_secret' => $appsecret,
          'default_graph_version' => 'v2.2',
          ]);

          /******Initializing The Login**************/
          $helper = $fb->getRedirectLoginHelper();
          $permissions = ['email', 'publish_actions']; // optional
          $loginUrl = $helper->getLoginUrl($incommingurl, $permissions);

          /******Printing The Login URL**************/
          echo'<a href="' . $loginUrl . '" class="facebookLoginButton" title="Login With Facebook">Sign in with Facebook</a>';
          ?>
            </div>
            <div class="col s12 l4 m4">
                      <?php
          /******Importing Google API Files**************/
          require_once 'login/includes/google-api-php-client/apiClient.php';
          require_once 'login/includes/google-api-php-client/contrib/apiOauth2Service.php';
          
          /******Google API Connection With My APP**************/
          $client = new apiClient();
          //$client->setApplicationName("TheASP");
          $client->setClientId($client_id);
          $client->setClientSecret($client_secret);
          $client->setDeveloperKey($api_key);
          $client->setRedirectUri($redirect_url);
          $client->setApprovalPrompt(false);
          $oauth2 = new apiOauth2Service($client);
          ?>  
          <!--******Printing The Login URL*************-->
                <a href="<?php echo $client->createAuthUrl()?>" class="googleLoginButton" title="Login With Google">Sign in with Google</a>

            </div>
            <div class="col s12 l4 m4">

                <!--******Printing The Login URL*************-->
              <a href="login/collectUserDataTwitter.php" class="twitterLoginButton" title="Login With Twitter">Sign in with Twitter</a>
            
            </div>



        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax" id="particles-js">
      
      
    </div>
  </div>
<?php require('footer.php'); ?>



    </body>
          <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="assets/js/init.js"></script>
      <script type="text/javascript" src="assets/js/typed.js"></script>
         <script src="assets/js/particles.min.js"></script> 

       <script>
        $(function(){
            $(".element").typed({
              strings: ["Talk is cheap,Show me the Code"],
              typeSpeed: 100
            });
        });
           particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":false});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;

      </script>
  </html>