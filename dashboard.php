<?php

session_start();
require 'connect.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!isset($_SESSION["id"])){
        session_unset(); 
        session_destroy(); 
        header("Location: index.php");
    exit();
}
?>

<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Dashboard | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

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

<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
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

      <style type="text/css">
         @font-face {
         font-family: chelsea;
         src: url('fonts/chelsea2/ChelseaAlternates.ttf');
         }
         .fonEt{
          font-family: chelsea;
          color: #F06D06;
         }
      </style>
</head>
<body  style="
    background-image: url('images/dashboard.jpg');  
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    ">

<?php include 'analyticstracking.php'; ?>
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
                echo "<a href=\"dashboard.php\" class=\"active\">Dashboard</a>";
          else
                echo "<a href=\"https://id.nvision.org.in/signin?url=http://mobile.elan.org.in/token.php\"  class=\"active\">Register</a>";
           ?>
            </li>
            <li><a href="hospitality.php">Hospitality</a></li>
            <li><a href="workshops.php">Workshops</a></li>
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

<br><br><br><br>
<br>
<div >
<h1 style="text-align: center;" class="fonEt">DASHBOARD</h1>

<div class="container-fluid">
    <div class="row fonEt" >
        <div class="col-lg-1"></div>
        
        <div class="col-lg-3">
            <h3>Name&nbsp;:&nbsp;<?php echo $_SESSION["name"]; ?></h3>
            <h3>Email&nbsp;:&nbsp;<?php echo $_SESSION["email"]; ?></h3>
            <h3 id="elId"></h3>
            <script type="text/javascript">
            document.getElementById('elId').innerHTML='Elan&nbsp;ID&nbsp;:&nbsp;IITH17'+
            "0000".substring(0, "0000".length - '<?php echo $_SESSION["elanId"]; ?>'.length) + '<?php echo $_SESSION["elanId"]; ?>';</script> 
            
            <h3>College&nbsp;:&nbsp;<?php echo $_SESSION["college"]; ?></h3>
            <h3>Mobile&nbsp;:&nbsp;<?php echo $_SESSION["mobile"]; ?></h3>
        </div> 
        <div class="col-lg-2"></div>
        <br>
        <div class="col-lg-4">
            <h2 style="text-align: center;">REGISTERED&nbsp;EVENTS</h2>

            <?php 
                if($_SESSION["verified"] == 2)
                    echo('<h4>Email is not verified. Check your mail for verification email.</h4>');
                else{
                    $name = json_decode(file_get_contents('name.json') , true);
                        $answer = "<ul class='list-group'>";
                        if(isset($_SESSION["events"])){
                                $array = explode(",",$_SESSION["events"]);
                             foreach ($array as $value) {
                                $answer .= "<li class='list-group-item'><a href='events.php#$value'>$name[$value]</a></li>";
                                } 
                                $answer .= "</ul>";  
                        }
                        else{
                        $sql = "SELECT * FROM users WHERE ID='$_SESSION[id]'";
                        $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) == 1){
                        while($row = mysqli_fetch_assoc($result)){                 
                          $_SESSION["events"] = $row['registered_events'];
                          $array = explode(",",$row['registered_events']);
                          
                          $answer = "<ul>";
                         foreach ($array as $value) {
                                $answer .= "<li class='list-group-item'><a href='events.php#$value'>$name[$value]</a></li>";
                        }
                          $answer .= "</ul>";
                  }             
             }
          } 
                        echo $answer;    
                }
             ?>

        </div>
    </div>
</div>
</div>
<br><br><br><br>
<br><br><br><br>




      <div class="footer">
    <div class="container">
        
      <div class="footer-info">
      <div class="col-md-3 col-sm-3 footer-info-grid wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
          <h4>FOLLOW US</h4>
          
          <div class="social">
            <ul>
              <li><a href="https://www.facebook.com/elan.iithyderabad/?fref=ts" target="_blank" class="facebook"> </a></li>
                <li><a href="https://twitter.com/ELAN_IITH" target="_blank" class="facebook twitter"> </a></li>
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


</body>
</html>