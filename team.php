<?php 
session_start();
 ?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Team | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

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

<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
	
<body>
<?php include 'analyticstracking.php'; ?>
<?php include 'updates.php'; ?>


  <div class="banner-1 wthree-1">
    <div class="container">
      <div class="banner_top">
        <div class="logo">
          <h1><a href="index.php"><img src="images/logo5.png"><br><br></a></h1>
        </div>
                <div class="banner_top_left">
        <a href="#">
        <button style="background-color: green; position: relative; top:18px; "  data-toggle="modal" data-target="#myModal">
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
                echo "<a href=\"dashboard.php\" >Dashboard<br><br></a>";
          else
                echo "<a href=\"https://id.nvision.org.in/signin?url=http://mobile.elan.org.in/token.php\">Register<br><br></a>";
           ?>
            </li>
            <li><a href="hospitality.php">Hospitality<br><br></a></li>
            <li><a href="workshops.php">Workshops<br><br></a></li>
            <li><a href="proshows.php">Proshows<br><br></a></li>
            <li><a href="team.php" class="active">Team<br><br></a></li>
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


<div class="feature agileits">
	<div class="container">
		<h3 class="tittle-one">Our Team</h3>
        <h4 class="tittle-one">Hopitality and campus publicity</h4>
        
        
		<div class="feature-grids">
            
            
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/hospiCore.png">

					<h4>Medha Kasula</h4>
					<p> Core
						<br>+91-97-0496-9799

   medha@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>
		
            
        </div>
        
            <div class="feature-grids">
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/ashutosh.png">

					<h4>Ashutosh Sharma</h4>
					<p> Hospitality Coordinator<br>
                        +91-70-3240-1213<br>
                        ashutosh@elan.org.in</p>
				</div>
			</div>
		
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/prathima.png">

					<h4>Prathima</h4><br>
					<p> Hospitality Coordinator<br>
                        +91-95-4216-0701<br>
                        prathima@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/manishReddy.png">

					<h4>Manish Reddy</h4><br>
					<p> Campus Publicity Coordinator<br>
                        +91-86-8652-4814
                        <br>
                        <br>
                    <!-- aaaa@gmail.com --></p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/anirudh.png">

					<h4>C D N Anirudh</h4><br>
					<p> Campus Publicity Coordinator<br>
                        +91-94-4117-8324<br>
                        anirudh@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>
	
            </div>
              
    </div>
        </div>

    
    <!-- ONLINE PUBLICITY, TRANSPORT AND SECURITY -->
    
    
   
    <div class="feature agileits">
	<div class="container">
		
        <h4 class="tittle-one">ONLINE PUBLICITY, TRANSPORT AND SECURITY</h4>
        
        
		<div class="feature-grids">
            
            
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/vasudha.png">

					<h4>Vasudha Kapre</h4>
					<p> Core
						<br>+91-94-9194-8280<br>
                        vasudha@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>
		
            
        </div>
        
            <div class="feature-grids">
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/atulRaj.png">

					<h4>Atul Raj</h4>
					<p> Online Publicity Coordinator<br>

+91-77-7991-5930<br>

   atul@elan.org.in</p>
				</div>
			</div>
		
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/ishan.png">

					<h4>Ishan A Maurya</h4>
					<p> Online Publicity Coordinator<br>

+91-94-2643-1955<br>

   ishan@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/saiHarsha.png">

					<h4>B. Sai HArsha</h4>
					<p> Transport Coordinator<br>

+91-94-9440-4949<br>

   harsha.b@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/rajeshVaragani.png">

					<h4>Rajesh Varagani</h4>
					<p> Security Coordinator<br>

+91-98-6642-3770<br>

   rajesh@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>
	
            
            
        </div>
        
        
        
    </div>
        </div>

    
    
    <!-- Events -->
    
    
    
    <div class="feature agileits">
	<div class="container">
		
        <h4 class="tittle-one">Events</h4>
        
        
		<div class="feature-grids">
            
            
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/harshaJaladi.png">

					<h4>Harsha Jaladi</h4>
					<p>Core<br>

+91-76-7404-3430<br>

   harsha@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
        
            <div class="feature-grids">
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/nandhaKumar.png">

					<h4>D Nanda Kumar</h4>
					<p> Culti Events Coordinator<br>

+91-95-7395-0314<br>

   nanda@elan.org.in</p>
				</div>
			</div>
		
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/anandhSwain.png">

					<h4>Anand Swain</h4>
					<p>Infi Events Coordinator<br>

+91-94-9018-9175<br>

   anand@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/lalithSai.png">

					<h4>Lalith Sai</h4>
					<p> Techy Events Coordinator<br>

+91-96-5224-3426<br>

   lalith@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/abhinavKumar.png">

					<h4>Abhinau Kumar</h4>
					<p> Litr Events Coordinator<br>

+91-94-4532-9736<br>

   abhi@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>

        
            <div class="feature-grids">
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/yashPitrida.png">

					<h4>Yash Pitroda</h4><br>
					<p>Biggies Coordinator<br>

+91-95-0546-4597<br>

   yash@elan.org.in

</p>
				</div>
			</div>
		
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/saiSuman.png">

					<h4>Sai Suman Kumar</h4>
					<p>Social Causes Coordinator<br>

+91-98-6648-5313<br>

   suman.k@elan.org.in

</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/siddarthS.png">

					<h4>Siddharth Sonkamble</h4>
					<p>Workshops Coordinator<br>

+91-96-1949-7727<br>

   siddharth@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">


			</div>
                
                
			<div class="clearfix"></div>
	
            
            
        </div>
        
        
        
        
    </div>
        </div>
    </div>
    
   <!-- Creatives -->
    
    
    
    
       
    <div class="feature agileits">
	<div class="container">
		
        <h4 class="tittle-one">Creatives</h4>
        
        
		<div class="feature-grids">
            
            
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/shruthi.png">

					<h4>Shruti Bhatambre</h4>
					<p>Core<br>

+91-94-9100-5093<br>

    shruti@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
        
            <div class="feature-grids">
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/gauravChobe.png">

					<h4>Gaurav Chobe

</h4>
					<p> Arts Coordinator<br>

+91-84-1185-6554<br>

   gaurav.c@elan.org.in</p>
				</div>
			</div>
		
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/chirayuKothari.png">

					<h4>Chirayu Kothari</h4>
					<p>Arts Coordinator<br>

+91-96-4262-1323<br>

   chirayu@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/shivomKumar.png">

					<h4>Shivom Kumar</h4>
					<p> Arts Coordinator<br>

+91-91-7729-6448<br>

   shivom@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/chiatanyaBha.png">

					<h4>Chaitanya Bhagwat</h4>
					<p> Multimedia Coordinator<br>

+91-90-5273-3010<br>

   chaitanya@elan.org.in

</p>
				</div>
			</div>
			<div class="clearfix"></div>

        
            <div class="feature-grids">
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/pankajKukreja.png">

					<h4>Pankaj Kukreja</h4><br>
					<p>Asst. Multimedia Coordinator<br>

+91-74-1570-9916<br>

   pankaj@elan.org.in

</p>
				</div>
			</div>
		
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/harshAgarwal.png">

					<h4>Harsh Agarwal</h4>
					<p>Web Coordinator<br>

+91-84-0070-0457<br>

   harsh@elan.org.in

</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/mamakar.png">

					<h4>Prasanth Mamakar</h4>
					<p>Web Coordinator<br>

+91-96-4091-0652<br>

   prasanth@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">


			</div>
                
                
			<div class="clearfix"></div>
	
            
            
        </div>
        
        
        
        
    </div>
        </div>
    </div>
    
    
    
    
    <!-- Marketing -->
    
    <div class="feature agileits">
	<div class="container">
		
        <h4 class="tittle-one">Marketing</h4>
        
        
		<div class="feature-grids">
            
            
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/abhishekRajput.png">

					<h4>Abhishek Rajput</h4>
					<p>Core<br>

+91-77-2695-6570<br>

   abhishekr@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>
		
            
        </div>
        
            <div class="feature-grids">
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/srujan.jpg">

					<h4>Bazar Srujan Kumar

</h4>
					<p> Marketing Coordinator<br>

+91-98-6630-3390<br>

   srujan@elan.org.in</p>
				</div>
			</div>
		
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/AbhinavGuptha.png">

					<h4>Abhinav Gupta</h4>
					<p> Marketing Coordinator<br>

+91-95-3334-9101<br>

   abhinav@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/Sukrut.png">

					<h4>Sukrut Rao</h4>
					<p> Marketing Coordinator<br>

+91-96-0324-8560<br>

   sukrut@elan.org.in</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/raagav.png">

					<h4>R. Raaghav</h4>
					<p> Marketing Coordinator<br>

+91-95-1540-9134<br>

   raaghav@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>
	
            
            
        </div>
        
        
        
    </div>
        </div>

    
<!-- finance -->
     <div class="feature agileits">
	<div class="container">
		
        <h4 class="tittle-one">Finance</h4>
        
        
		<div class="feature-grids">
            
            
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/viabhav.png">

					<h4>Vaibhav Singh</h4>
					<p>Core<br>

+91-99-4872-9250<br>

   vaibhav@elan.org.in</p>
				</div>
			</div>
			<div class="clearfix"></div>
		
            
        </div>
        
            <div class="feature-grids">
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/suprabath.png">

					<h4>S Suprabath Reddy

</h4>
					<p>Finance Coordinator<br>

+91-90-1050-1499<br>

   suprabath@elan.org.in</p>
				</div>
			</div>
		
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/ambuj.png">

					<h4>Ambuj Sinha

</h4>
					<p>Infrastructure Coordinator<br>

+91-87-9049-8126<br>

   ambuj@elan.org.in

</p>
				</div>
			</div>
			
             
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/karanJindal.jpg">

					<h4>Karan Jindal</h4>
					<p> Asst. Infrastructure Coordinator<br>

+91-94-6349-2001<br>

   karan@elan.org.in</p>
				</div>
			</div>
			
        
			<div class="clearfix"></div>    
        </div>
            
    </div>
        </div>
    
    <!-- Over All Cod -->
    
      <div class="feature agileits">
	<div class="container">
		
        <h4 class="tittle-one">OVERALL COORDINATOR</h4>
        
        
		<div class="feature-grids">
            
            
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

				<div class="feature-grid-two">
					<img class="hi-icon hi-icon-archive glyphicon" src="images/team/surendra.png">

					<h4>Surender Chauhan</h4>
					<p>

+91-95-8111-5462<br>

   surender@elan.org.in

</p>
				</div>
			</div>
			<div class="clearfix"></div>
		
            
        </div>
        
        
			   
        </div>
         <br><br>    
    </div>
   
        
    
                <div class="footer">
        <div class="container">
                
            <div class="footer-info">
            <div class="col-md-3 col-sm-3 footer-info-grid wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
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
        <div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            <p>© 2017 ELAN . All Rights Reserved | Design by WebTeam</p>
        </div>
    </div>

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
