<?php 
session_start();
?>
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
  		<title><?php  echo $_SESSION['fname']; ?> | CodeXplod - The Geek IDE</title>
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


    <body class=" grey darken-3">
    <div id="divLoading"> 
    </div>
  <div id="index-banner" class="parallax-container">
   <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
  <li><a href="#!"><i class="fa fa-file-code-o"></i>Submissions</a></li>
  <li class="divider"></li>
  <li><a href="login/logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
</ul>
<nav class="transparent navnavbar">
  <div class="nav-wrapper">
    <a href="" class="brand-logo center shade brandName"><tt>Code<b>X</b>plod</tt></h2></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

    <ul class="right hide-on-med-and-down">
      <li><a href="leaderboard.php"><i class="fa fa-heartbeat"></i> Leaderboard</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
        <div class="chip">
          <img src="<?php echo $_SESSION['dp'];?>" alt="Contact Person">
          <?php  echo $_SESSION['fname']." ".$_SESSION['lname'];?>
        </div>
      </a></li>
    </ul>

    <ul class="side-nav" id="mobile-demo">
      <li><a href="leaderboard.php"><i class="fa fa-heartbeat"></i> Leaderboard</a></li>
  <li><a href="#!"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
  <li><a href="#!"><i class="fa fa-file-code-o"></i>&nbsp;Submissions</a></li>
  <li class="divider"></li>
  <li><a href="login/logout.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
      </ul>
  </div>
</nav>
    <div class="section no-pad-bot" >
      <div class="container"><br/><br/>
        
        <div class="card-panel grey darken-2" style="line-height:1;margin-top:45px;">
          <span class="white-text center">
          <h4>TEST - Life, the Universe, and Everything</h4>
          Your program is to use the brute-force approach in order to find the Answer to Life, the Universe, and Everything. More precisely... rewrite small numbers from input to output. Stop processing input after reading in the number 42. All numbers at input are integers of one or two digits.
          <div class="row"><br><br>
          <div class="col s12 m6 s6 left-align"><b>Input:</b>
          <br>1<br>
2<br>
88<br>
42<br>
99<br>
        </div>
          <div class="col s12 m6 s6 left-align"><b>Output:</b>
          <br>1<br>
2<br>
88<br>
        </div>


      
          </div>
          </span>
          
          <div class="row">
          <div class="col l6 m6 s12">
          <form action="" method="post" id="usersCode">

            <div class="row"><label>Choose Language</label><br>
            <div class="input-field col s12 m12 l12">

            <select class="browser-default grey darken-2" name="language" required>
                  <option value="" disabled="" selected="">Choose Language</option>
                  <option value="C">C</option>
                  <option value="CPP">C++</option>
                  <option value="CPP11">C++ 11</option>
                  <option value="PYTHON">Python</option>
                  <option value="JAVA">Java</option>
                  <option value="RUBY">Ruby</option>
                  <option value="JAVASCRIPT">Javascript</option>
            </select>
             </div>
             </div>

            <div class="row"><label>Your Code here</label><br>
            <div class="input-field col s12 m12 l12">
                        <div id="editor">
//Your Code Goes Here
                        </div>
            </div>  
            </div>            

            <div class="row">
            <div class="input-field col s12 m12 l12">
            <button class="btn waves-effect waves-light" type="submit" name="action"><i class="fa fa-file-code-o"></i> Compile & Test
            
            </button>
            </div>
            </div>
  


          </form>
          </div>
          <div class="col l6 m6 s12" id="outputScreen">
            
          </div>
          </div>
            




            </div>
        </div>
     
            

      
        <br><br>

      </div>
    </div>
    <div class="parallax" id="particles-js">
      
      
    </div>

  </div>
  <?php require('footer.php');?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script type="text/javascript" src="assets/js/init.js"></script>
      <script type="text/javascript" src="assets/js/typed.js"></script>
      <script src="assets/js/particles.min.js"></script>
      <script src="assets/js/submitCode.js"></script> 
      <script src="assets/js/ace/ace.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
  
      var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/c");
</script>
       <script>
        $(function(){
            $(".element").typed({
              strings: ["Talk is cheap,Show me the Code"],
              typeSpeed: 100
            });
        });
           particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":false});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;

      </script>
    </body>
  </html>