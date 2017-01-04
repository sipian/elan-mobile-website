<?php 
session_start();
 ?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Workshops | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

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

</head>
	
<body>
<!-- banner -->
<!-- banner -->
  <div class="banner-1 wthree-1">
    <div class="container">
      <div class="banner_top">
        <div class="logo">
          <h1><a href="index.php"><img src="images/logo5.png"></a></h1>
        </div>
        <div class="banner_top_right">
          <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav cl-effect-14">
            <li><a href="index.php">Home</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="sponsors.php">Sponsors</a></li>
          <li>
          <?php 
          if(isset($_SESSION["id"]))
                echo "<a href=\"dashboard.php\">Dashboard</a>";
          else
                echo "<a href=\"https://id.nvision.org.in/signin?url=http://mobile.elan.org.in/token.php\">Register</a>";
           ?>
            </li>
            <li><a href="hospitality.php">Hospitality</a></li>
            <li><a href="workshops.php" class="active">Workshops</a></li>
            <li><a href="http://blog.elan.org.in/">Blog</a></li>
            <li><a href="team.php">Team</a></li>
            <li><a href="literanza">Literanza</a></li>
            <?php 
          if(isset($_SESSION["id"]))
                echo "<li><a href=\"signout.php\">Sign Out</a></li>";
           ?>
          </ul>
        </div><!-- /.navbar-collapse -->  
        
      </nav>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //banner -->
<!-- services -->
<div class="services agile-1">
	<div class="container">
		<div class="services-main">
			<div class="services-top">
			<h2 class="tittle">Workshops</h2>
			<br>
			<h2>Upcoming Workshops</h2>
				
			</div>

			<div class="services-bottom">
				<div class="main-serv">

					<div class="col-md-3 main-serv-grid">
                        <a href="Workshop_details/andro_engine.html"><img src="images/Workshops/andro1.jpg" alt="" class="img-responsive"></a>
						<h4>Android Engine <br>Workshop</h4>
						<p>14th and 15th jan2017</p>
					</div>

					<div class="col-md-3 main-serv-grid">
                        <a href="Workshop_details/quadcopter.html"><img src="images/Workshops/quadocop.jpg" alt="" class="img-responsive"></a>
						<h4>Quadcopter <br> Workshop</h4>
						<p>14th and 15th jan2017</p>
					</div>

					<div class="col-md-3 main-serv-grid">
                        <a href="Workshop_details/androApp.html"><img src="images/Workshops/andro2.jpg" alt="" class="img-responsive"></a>
						<h4>Android App Development <br>Workshop</h4>
						<p>14th and 15th jan2017</p>
					</div>

					<div class="col-md-3 main-serv-grid">
                        <a href="Workshop_details/autoMob.html"><img src="images/Workshops/car.jpg" alt="" class="img-responsive"></a>
						<h4>Automobile Engine Mechanics <br>Workshop</h4>
						<p>20th and 21st jan2017</p>
					</div>
					<div class="col-md-3 main-serv-grid">
                        <a href="Workshop_details/robot.html"><img src="images/Workshops/hqdefault.jpg" alt="" class="img-responsive"></a>
						<h4>Autonomous Robotics <br>Workshop</h4>
						<p>20th and 21st jan2017</p>
					</div>

<div class="col-md-3 main-serv-grid">
                       
					</div>
<div class="col-md-3 main-serv-grid">
                        
					</div>
					<div class="col-md-3 main-serv-grid">
                        
					</div>


					
				 
				</div>
                
                
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<!-- services -->



<div class="services agile-1">
	<div class="container">
		<div class="services-main">
			<div class="services-top">
			
			<br>
			<h2>Previous Workshops</h2>
				
			</div>

			<div class="services-bottom">
				<div class="main-serv">

					
					<div class="col-md-3 main-serv-grid">
                        <a href="http://elan.org.in/aiworkshop/"><img src="images/Workshops/cloudcomputing.jpg" alt="" class="img-responsive"></a>
						<h4>Vitual Reality, Artificial Inteligence,<br>Cloud Computing Workshop</h4>
						<p>22ND and 23RD October 2016</p>
					</div>

					<div class="col-md-3 main-serv-grid">
                        <a href="http://elan.org.in/ethicalhacking/"><img src="images/Workshops/hacking.jpg" alt="" class="img-responsive"></a>
						<h4>Ethical Hacking <br> Workshop</h4>
						<p>17th and 18th September 2016</p>
					</div>

					<div class="col-md-3 main-serv-grid">
                        <a href="http://elan.org.in/hapticsroboarm/"><img src="images/Workshops/roboticArm2.jpg" alt="" class="img-responsive"></a>
						<h4>Haptics Roboarm <br>Workshop</h4>
						<p>27th and 28th August 2016</p>
					</div>

	
				 
				</div>
                
                
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-3 col-sm-3 footer-info-grid">
					<h4>FOLLOW US</h4>
						<div class="social">
							<ul>
								<li><a href="https://www.facebook.com/elan.iithyderabad/?fref=ts" class="facebook"> </a></li>
								<li><a href="https://twitter.com/ELAN_IITH" class="facebook twitter"> </a></li>
								
								
							</ul>		
						</div>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
			<p>© 2017 ELAN . All Rights Reserved | Design by WebTeam</p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>