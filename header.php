<?php 
   $ans =  `<!-- banner -->
  <div class="banner-1 wthree-1">
    <div class="container">
      <div class="banner_top">
        <div class="logo">
          <h1><a href="index.php"><img src="images/logo5.png"><br><br></a></h1>
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
          <li>`;

          if(isset($_SESSION["id"]))
                $ans .=   "<a href=\"dashboard.php\">Dashboard<br><br></a>";
          else
                $ans .=   "<a href=\"https://id.nvision.org.in/signin?url=http://mobile.elan.org.in/token.php\">Register<br><br></a>";
           
           $ans .=   `
            </li>
            <li><a href="hospitality.php">Hospitality<br><br></a></li>
            <li><a href="workshops.php">Workshops<br><br></a></li>
            <li><a href="http://blog.elan.org.in/">Blog<br><br></a></li>
            <li><a href="team.php">Team<br><br></a></li>
            <li><a href="proshows.php">Proshows<br><br></a></li>`;

             
          if(isset($_SESSION["id"]))
                $ans .=   "<li><a href=\"signout.php\">Sign Out<br><br></a></li>";
           $ans .=   `
          </ul>
        </div><!-- /.navbar-collapse -->  
        
      </nav>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <br>`;
  echo $ans;
 ?>