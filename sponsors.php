
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
            <li><a href="sponsors.php" class="active">Sponsors<br><br></a></li>
          <li>
          <?php 
          if(isset($_SESSION["id"]))
                echo "<a href=\"dashboard.php\"   class=\"active\>Dashboard<br><br></a>";
          else
                echo "<a href=\"https://id.nvision.org.in/signin?url=http://mobile.elan.org.in/token.php\">Register<br><br></a>";
           ?>
            </li>
            <li><a href="hospitality.php">Hospitality<br><br></a></li>
            <li><a href="workshops.php">Workshops<br><br></a></li>
            <li><a href="proshows.php">Proshows<br><br></a></li>
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
  <h1 style="font-family: chelsea;color:#F06D06;font-size:400%">SPONSORS</h1>


  <div class="row">
  <h3>TITLE SPONSOR</h3>
  <div class="col-xs-12 col-sm-4 col-sm-offset-4">
    <a href="www.cyient.com" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/cyient.jpg" alt="CYIENT" style="width: 80%;" /></a>
  </div>
  </div>
   <div class="row">
  <h3>POWERED BY</h3>
  <div class="col-xs-12 col-sm-4 col-sm-offset-4">
    <a href="http://www.mtvindia.com/campusdiaries/" target="_blank">
    <img class="img-responsive img-thumbnail" src="sponsors/mtv_campus_diaries.png" alt="MTV CAMPUS PRINCESS" style="width: 60%;" /></a>
  </div>
  </div>

    <div class="row">
    <div class="col-xs-12 col-sm-4"><h3>ELAN-E-JUNG TITLE SPONSOR</h3><a href="http://www.mtvixtreme.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/mtvixtreme.jpg" alt="MTV EXTREME" /><br><br></a></div>
    <div class="col-xs-12 col-sm-4"><h3>TALENT PARTNER</h3><a href="http://mtvindia.com/labs/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/MTV_Nescafe_Labs.png" alt="MTV Nescafe Labs"><br><br></a></div>
     <div class="col-xs-12 col-sm-4"><h3>RADIO PARTNER</h3><a href="https://www.redfmindia.in/mumbai" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/red.jpg" alt="RED FM" /><br><br></a></div>

  </div>

  <div class="row">

    <div class="col-xs-12 col-sm-4"><h3>FURNITURE SPONSOR</h3><a href="https://www.godrejinterio.com/Godrejinterio/index.aspx" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/INTERIO.jpg" alt="GODREJ INTERIO"><br><br></a></div>
         <div class="col-xs-12 col-sm-4"><h3>FASHION PARTNER</h3>

       <a href="https://www.facebook.com/RelianceTrends/?__mref=message_bubble" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/reliance.jpg" alt="RELIANCE RETAIL" /></a>
     </div>
    <div class="col-xs-12 col-sm-4"><h3>EDUCATION PARTNER</h3><a href="http://aceenggacademy.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/ACE.jpg" alt="ACE ENGINERRING "><br><br></a></div>

     </div>
 
  </div>
  <div class="row">
     <div class="col-xs-12 col-sm-4"><h3>ONLINE GAMING PARTNER</h3><a href="https://www.adda52.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/adda50.jpg" alt="ADDA 52"><br><br></a></div>
  
    <div class="col-xs-12 col-sm-4"><h3>ONLINE PHOTOGRAPHY EVENT PARTNER</h3><a href="http://www.nikon.co.in/en_IN" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/nikon.png" alt="NIKON" /><br><br></a></div>
     
    <div class="col-xs-12 col-sm-4">

    <h3>STUDY ABROAD PARTNER</h3>
    <a href="http://www.manyagroup.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/manaya-logo-new.png" alt="MANYA GROUP" /><br><br></a></div>

  </div>
   <div class="row">


    <div class="col-xs-12 col-sm-4"><h3>DIGITAL TALENT SPONSOR</h3><a href="https://artistaloud.wordpress.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/ArtistAloud.jpg" alt="ARTIST ALOUD" /><br><br></a></div>
  
    <div class="col-xs-12 col-sm-4"><h3>GIFTING PARTNER</h3><a href="http://www.lovelychocos.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/lovelychocos.jpg" alt="LOVELY CHOCOS" /><br><br></a></div>
    <div class="col-xs-12 col-sm-4"><h3>ONLINE TICKETING PARTNER</h3><a href="http://www.meraevents.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/meraenevts.jpg" alt="MERA EVENTS"   ><br><br></a></div>

  </div>
  <div class="row">
      <div class="col-xs-12 col-sm-4"><h3>WEB HOSTING SPONSOR</h3><a href="https://www.bigrock.in" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/big_rock.jpg" alt="BIG ROCK" /><br><br></a></div>
  
    <div class="col-xs-12 col-sm-4"><h3>DARE PARTNER</h3><a href="http://www.stichio.co.in/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/Stichio_Full_Logo_Red.png" alt="STICHIO"><br><br></a></div>

    
    <div class="col-xs-12 col-sm-4"><h3>OFFICIAL SUPPLY CHAIN PARTNER</h3><a href="http://www.safexpress.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/safexpressa.png" alt="safexpress" /><br><br></a></div>

   
  </div>
  <div class="row">
  
   <div class="col-xs-12 col-sm-4"><h3>YOUTH MAGAZINE PARTNER</h3><a href="http://www.youthincmag.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/Youth-Incorporated.jpg" alt="YOUTH INCORPORATED" /><br><br></a></div>
    <div class="col-xs-12 col-sm-4"><h3>PHOTOGRAPHY PARTNER</h3><a href="https://www.facebook.com/felectrikk/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/felectrikk.jpg" alt="F-ELECTRIKK" /><br><br></a></div>
     <div class="col-xs-12 col-sm-4"><h3>AFTERMOVIE PARTNER</h3><a href="http://www.flyingdreamfilmerz.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/flyingdreamfilmerz.png" alt="FLYING DREAM FILMERZ" /><br><br></a></div>

  </div>
  <div class="row">
  
        <div class="col-xs-12 col-sm-4"><h3>CULTURAL PARTNER</h3><a href="http://embassies.gov.il/delhi/Pages/default.aspx" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/israel.jpg" alt="EMBASSY OF ISRAEL" /><br><br></a></div>
    <div class="col-xs-12 col-sm-4"><h3>CULTURAL PARTNER</h3><a href="https://hyderabad.afindia.org/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/alliance-francaise.jpg" alt="ALLIANCE FRANCAISE" /><br><br></a></div>
    <div class="col-xs-12 col-sm-4"><h3>OUTREACH WORKSHOP PARTNER</h3><a href="http://www.techtrontechnologies.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/techtron.jpg" alt="TECHTRON TECHNOLOGIES"><br><br></a></div>

  

  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-4"><h3>OUTREACH WORKSHOP PARTNER</h3><a href="http://entrench.in/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/entrench.jpg" alt="ENTRENCH ELECTRONICS"><br><br></a></div>
    <div class="col-xs-12 col-sm-4"><h3>OUTREACH WORKSHOP PARTNER</h3><a href="http://azureskynet.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/azure.jpg" alt="AZURE SKYNET"><br><br></a></div>
    <div class="col-xs-12 col-sm-4"><h3>SMS SPONSOR</h3><a href="http://www.wegusinfotech.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/wegus_infotech.jpg" alt="WEGUS INFOTECH" style="height: 170px;" ><br><br></a></div>

  </div>
    <div class="row">
     
    <div class="col-xs-12 col-sm-4"><h3>ONLINE QUIZZING SPONSOR</h3><a href="http://dare2compete.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/dare2compete.png" alt="DARE 2 COMPETE"  ><br><br></a></div>
 
     <div class="col-xs-12 col-sm-4"><h3>MUSIC MEDIA PARTNER</h3><a href="https://songdew.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/songdew.png" alt="SONG DEW"><br><br></a></div>
    
    <div class="col-xs-12 col-sm-4">
    <h3>ONLINE MUSIC PARTNER</h3>
    <a href="http://awesong.in/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/Awesong_logo_White.png" alt="AWESONG" style="width: 80%;" /></a>
  </div>



  </div>
   <div class="row">
  <div class="col-xs-12 col-sm-4">
    <h3>ONLINE MUSIC PARTNER</h3>
    <a href="http://www.musicmalt.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/music_malt.png" alt="MUSICMALT" style="width: 80%;" /></a>
  </div>
    <div class="col-xs-12 col-sm-4"><h3>LEADS SPONSOR</h3><a href="http://www.dataguru.in/home.do" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/dataguru.png" alt="DATA GURU" /><br><br></a></div>

  <div class="col-xs-12 col-sm-4"><h3>SPONSORSHIP PARTNER</h3><a href="http://www.onspon.com/index.php" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/onspon.png" alt="ONSPON" /><br><br></a></div>

     
  </div>

   <div class="row">
     <div class="col-xs-12 col-sm-4"><h3>MISS INDIA ORGANISATION</h3><a href="http://beautypageants.indiatimes.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/femina.jpg" alt="FEMINA MISS INDIA" /><br><br></a></div>
   <div class="col-xs-12 col-sm-4"><h3>ONLINE MEDIA PARTNER</h3><a href="http://www.knowafest.com/college-fests/events" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/knowAfest.png" alt="KNOW A FEST" /><br><br></a></div>
   
  <div class="col-xs-12 col-sm-4"><h3>ONLINE MEDIA PARTNER</h3><a href="http://www.igniteengineers.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/ignite.png" alt="IGNITE ENGINEERS" /><br><br></a></div>


 
  </div>

     <div class="row">

 <div class="col-xs-12 col-sm-4"><h3>ONLINE MEDIA PARTNER</h3><a href="http://beingstudent.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/beingStudent.png" alt="BEING STUDENT" /><br><br></a></div>

     <div class="col-xs-12 col-sm-4"><h3>ONLINE MEDIA PARTNER</h3><a href="https://www.brainbuxa.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/brainBuxa.png" alt="BRAIN BUXA" /><br><br></a></div>



 <div class="col-xs-12 col-sm-4"><h3>ONLINE MEDIA PARTNER</h3><a href="https://www.facebook.com/hyddanceadda/" target="_blank"><img class="img-responsive img-thumbnail" class="img-responsive img-thumbnail" src="sponsors/hyd_dance_adda.jpg" alt="HYD DANCE ADDA" /><br><br></a></div>



</div>
     <div class="row">

      <div class="col-xs-12 col-sm-4"><h3>ONLINE MEDIA PARTNER</h3><a href="https://www.facebook.com/dubsmashyderabad/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/dub_smash.png" class="img-responsive img-thumbnail"  alt="DUB SMASH HYD" /><br><br></a></div> 


 <div class="col-xs-12 col-sm-4"><h3>ONLINE SHOPPING PARTNER</h3><a href="http://www.shopclues.com/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/shopclues.jpg" alt="SHOPCLUES" /><br><br></a></div>


  <div class="col-xs-12 col-sm-4"><h3>DRAMA EVENT PARTNER</h3><a href="https://www.facebook.com/VidurActingInstituteOfficialPage/" target="_blank"><img class="img-responsive img-thumbnail" src="sponsors/vidur.png" class="img-responsive img-thumbnail"  alt="VIDUR ACTING INSTITUTE" /><br><br></a></div> 
  </div>

  <div class="row">
        <div class="col-xs-12 col-sm-4"><h3>ART EXHIBITION SPONSOR</h3><a href="http://nrityadance.com/" target="_blank"><img class="img-responsive img-thumbnail" class="img-responsive img-thumbnail" src="sponsors/nrithya.png" alt="NRITYA DANCE FORUM" /><br><br></a></div> </div>
  
  </div>
  <br>
<!-- about -->

<!-- //footer -->
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
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>