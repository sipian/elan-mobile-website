
<?php 
session_start();
 ?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Sponsors | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

      <meta name="description" content="IIT Hyderabad Techno Cultural Fest">

      <meta name="author" content="ELAN 2017">

      <meta name="keyword" content="elan,vision,techno,cultural,management,technical,iit hyderabad, iit,fest, competitions,events,event,hyderabad,iith,students,dance,song , drama , dj , informal , fun,sponsors,games,awesome,workshops,biggies,culti,techy,infi,online,litr , workshop , android , app , development , andro , engine , quadcopter , auto mobile , autonomous , robotics , team">  

      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimal-ui">  
      <link rel='shortcut icon' href=favicon.ico type='image/x-icon'/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

      <meta name="theme-color" content="#000000">
      <meta property=og:url content='http://elan.org.in/' />
      <meta property=og:type content=website />
      <meta property=og:title content="ELAN 2017"/>
      <meta property=og:description content="ELAN IIT Hyderabad Techno Cultural Fest">
      <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg"/>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<style type="text/css">
  .row{
    text-align: center;
  }
</style>
</head>
    
<body>
<?php include 'analyticstracking.php'; ?>
<?php include 'updates.php'; ?>

<!-- banner -->
  <div class="banner-1 wthree-1">
    <div class="container">
      <div class="banner_top">
        <div class="logo">
          <h1><a href="index.php"><img src="images/logo5.png"><br><br></a></h1>
        </div>
                <div class="banner_top_left">
        <a href="#">
        <button style="background-color: green; position: relative; top:18px; " class="data" data-toggle="modal" data-target="#myModal">
          <h3 style="color: white;">UPDATES</h3>
        </button>
        
        </a>
        </div>
        <div class="banner_top_right">
          <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" id="zig" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav cl-effect-14">
            <li><a href="index.php">Home<br><br></a></li>
            <li><a href="events.php">Events<br><br></a></li>
            <li><a href="sponsors.php">Sponsors<br><br></a></li>
          <li>
          <?php 
          if(isset($_SESSION["id"]))
                echo "<a href=\"dashboard.php\">Dashboard<br><br></a>";
          else
                echo "<a href=\"https://id.nvision.org.in/signin?url=http://mobile.elan.org.in/token.php\">Register<br><br></a>";
           ?>
            </li>
            <li><a href="hospitality.php">Hospitality<br><br></a></li>
            <li><a href="workshops.php">Workshops<br><br></a></li>
            <li><a href="proshows.php"  class="active">Proshows<br><br></a></li>
            <li><a href="team.php">Team<br><br></a></li>
            <li><a href="http://blog.elan.org.in/">Blog<br><br></a></li>
            <?php 
          if(isset($_SESSION["id"]))
                echo "<li><a href=\"signout.php\">Sign Out<br><br></a></li>";
           ?>
          </ul>
        </div><!-- /.navbar-collapse -->  
        
      </nav>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <br>
<!-- //banner -->
<!-- about -->


<div class="container">
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-2"><button type="button" id="benny" class="btn btn-success btn-block">BENNY DAYAL</button></div>
    <div class="col-lg-2"><button type="button" id="nikhil" class="btn btn-success btn-block">DJ NIKHIL CHINAPPA</button></div>
    <div class="col-lg-2"><button type="button" id="flutes" class="btn btn-success btn-block">MAGIC FLUTES</button></div>
    <div class="col-lg-2"><button type="button" id="mind" class="btn btn-success btn-block">MINDSHIFT</button></div>
    <div class="col-lg-2"><button type="button" id="echo" class="btn btn-success btn-block">ECHO & TITO</button></div>
</div>
<br>
<div class="content"></div>
</div>

      <div class="footer">
    <div class="container">
        
      <div class="footer-info">
      <div class="col-md-3 col-sm-3 footer-info-grid wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
          <h4>FOLLOW US</h4>
          
          <div class="social">
            <ul>
              <li><a href="https://www.facebook.com/elan.iithyderabad/?fref=ts" class="facebook"> <br><br></a></li>
                <li><a href="https://twitter.com/ELAN_IITH" class="facebook twitter"> <br><br></a></li>
                
            </ul>   
            </div>
          
        </div>        
      
        <div class="clearfix"> </div>
      </div>
      
    </div>
    <div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
      <p>© 2017 ELAN . All Rights Reserved | Design by WebTeam</p>
    </div>
  </div>
<!-- for bootstrap working -->
<!-- //for bootstrap working -->
<div style="display: none;">
  <img src="images/benny.jpg">
  <img src="images/nikhil.jpg">
  <img src="images/echo.jpg">
  <img src="images/flutes.jpg">
  <img src="images/mind.jpg">
</div>
</body>
    <script src="js/bootstrap.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#benny").click(function () {
        $("#benny").attr('class', 'btn btn-danger btn-block');
        $("button").not(" .close, .data , #zig ,#benny").attr('class', 'btn btn-success btn-block');
        
        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div >
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Cyient presents ELAN and ηvision, IIT Hyderabad in association with F Productions brings to you one of the most upcoming Indian playback singer Benny Dayal. Get ready to experience an evening full of entertainment and fun. 
        The best part, you get to experience all this for free. All you need to do is get yourself here.</p>
        <img class="img-responsive img-thumbnail" src="images/benny.jpg" style="width:100%;height: 100%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });

      $("#nikhil").click(function () {
        $("#nikhil").attr('class', 'btn btn-danger btn-block');
        $("button").not(" .close, .data , #zig ,#nikhil").attr('class', 'btn btn-success btn-block');
       
        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div >
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Presenting to you Nikhil Chinapa, one of the best Disco and Video Jockey and a popular presenter on MTV India. With a massive fan following among EDM enthusiasts, he is indeed the best best. Don't miss your chance to see him live at IIT Hyderabad on 21st January. And as always there is no entry fee !</p>
        <img class="img-responsive img-thumbnail" src="images/nikhil.jpg" style="width:100%;height: 100%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });

      $("#mind").click(function () {
        $("#mind").attr('class', 'btn btn-danger btn-block');
        $("button").not(" .close, .data , #zig ,#mind").attr('class', 'btn btn-success btn-block');
       
        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div >
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Embracing the "Stokholm-Sound" with heavy riffs and powerful melodies! Kicks you in the face and leaves you wanting more!
The elite Swedish band MindShift is here at Cyient presents ELAN and ηvision, IIT Hyderabad in association with MetamorphiK Productions to enthrall the crowd with their remarkable performance!</p>
        <img class="img-responsive img-thumbnail" src="images/mind.jpg" style="width:100%;height: 100%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });

      $("#echo").click(function () {
        $("#echo").attr('class', 'btn btn-danger btn-block');
        $("button").not(" .close, .data , #zig ,#echo").attr('class', 'btn btn-success btn-block');

        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Want to rock and roll your head?
Want to experience a really fun night?
Cyient presents ELAN & ηvision , IIT Hyderabad in association with Israel in India gives you the chance to experience the pinnacle of electronic bass music, dub, and hip-hop. We are delighted to announce that we are inviting ECHO & TITO, one of the premier bass music producers in Israel to mesmerize the crowd with their outstanding performances.</p>
        <img class="img-responsive img-thumbnail" src="images/echo.jpg" style="width:100%;height: 100%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });

      $("#flutes").click(function () {
        $("#flutes").attr('class', 'btn btn-danger btn-block');
        $("button").not(" .close, .data , #zig ,#flutes").attr('class', 'btn btn-success btn-block');

        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div >
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Life is like a flute, it may have many holes and emptiness but if you work on it carefully it can play magical melodies.
So here at Cyient presents ELAN & ηvision , IIT Hyderabad in association with Af Hyderabad we are inviting one of the top french flutes band MAGIC FLUTES to startle the crowd at our fest with their splendid performance.</p>
        <img class="img-responsive img-thumbnail" src="images/flutes.jpg" style="width:100%;height: 100%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });
      $("#benny").click();
      })
  </script>
    <script src="../js/index.js"></script>
</html>