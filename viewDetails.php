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
        header("Location: error.php?err=Login First To Access This Page");
    exit();
}
else{
    $sql = "SELECT * FROM users_special WHERE (ID = '$_SESSION[id]' AND email = '$_SESSION[email]')";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) != 1) {
        header("Location: error.php?err=Access Denied");
        exit();
    }
    else $_SESSION["access"]="yes";
}
?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>
         VIEW DETAILS
     </title>
 </head>
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css">
 <body>
 <br><br><br>
 <div style="text-align: center;"> <h1>VIEW DETAILS</h1></div>
 <br><br><br>
 <div class="container">
     <div class="row">
         <div class="col-lg-3">
            <button type="button" class="btn btn-default user">ALL USERS</button>
        </div>
         <div class="col-lg-3">
            <button type="button" class="btn btn-primary biggie">BIGGIES</button>
        </div>
         <div class="col-lg-3">
            <button type="button" class="btn btn-success culti">CULTI</button>
        </div>
         <div class="col-lg-3">
            <button type="button" class="btn btn-warning litr">LITR</button>
        </div>
     </div>
 </div>
<br>

<div class="buttons"></div>

<div class="result">
    <div class="table-responsive">   
    <div style="text-align: center;"><h2 id="name"></h2></div>      
  <table class="table">
    <thead>
      <tr>
      <th>S No.</th>
        <th>ELAN ID</th>
        <th>NAME</th>
        <th>COLLEGE</th>
        <th>MOBILE NO.</th>
        <th>EMAIL</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
    </table>
    </div>
</div>

 </body>
 <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
 <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/bootstrap.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function () {
         $(".biggie").click(function () {
             $(".buttons").html(`
        <div class="container">
     <div class="row">
         <div class="col-lg-4">
            <button type="button" class="btn btn-default elanejung">ELAN_E_JUNG</button>
        </div>
         <div class="col-lg-4">
            <button type="button" class="btn btn-primary manthan">MANTHAN</button>
        </div>
         <div class="col-lg-4">
            <button type="button" class="btn btn-success campus_princess">CAMPUS PRINCESS</button>
        </div>
     </div>
 </div>
                `);
         });


         $(".litr").click(function () {
             $(".buttons").html(`
        <div class="container">
     <div class="row">
         <div class="col-lg-3">
            <button type="button" class="btn btn-default mrdetective">Mr. DETECTIVE</button>
        </div>
         <div class="col-lg-3">
            <button type="button" class="btn btn-primary jam">JUST A MINUTE</button>
        </div>
         <div class="col-lg-3">
            <button type="button" class="btn btn-success quizzes">QUIZ CONCLAVE</button>
        </div>
        <div class="col-lg-3">
            <button type="button" class="btn btn-warning wheel_of_fortune">WHEEL OF FORTUNE</button>
        </div>
     </div>
 </div>
                `);
         });


 $(".culti").click(function () {
             $(".buttons").html(`
   <div class="container">
     <div class="row">
        <div class="col-lg-2">
            <button type="button" class="btn btn-default breakfree">BREAFKREE</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary looseyourfeet">LOOSE YOUR FEET</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-success nrityanjali">NRITYANJALI</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-warning just_duet">JUST DUET</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-danger vibrazione">VIBRAZIONE</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-info octaves">OCTAVES</button>
        </div>
     </div>
 </div>
 <br>

    <div class="container">
     <div class="row">
        <div class="col-lg-2">
            <button type="button" class="btn btn-default andaazapnapna">ANDAAZ APNA APNA</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary nukkadnatak">NUKKAD NATAK</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-success filmfarefiesta">FILM FARE FIESTA</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-warning picelectic">PICELECTIC</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-danger facepainting">FACE PAINTING</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-info nailart">NAIL ART</button>
        </div>
     </div>
 </div>
 <br>


 <div class="container">
     <div class="row">
        <div class="col-lg-2">
            <button type="button" class="btn btn-default mehendi">MEHENDI ART</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary claymodelling">CLAY MODELLING</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-success artexhibition">ART EXHIBITION</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-warning djwars">DJ WARS</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-danger rjhunt">RJ HUNT</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-info lendmeurvoice">LEND ME YOUR VOICE</button>
        </div>
     </div>
 </div>
 <br><br><br><br>
                `);
         });


 $('body').on("click", ".user", function() {
        $.post("getDetails.php", { contest:'user'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('ALL REGISTERED USERS ');
    });

    $('body').on("click", ".elanejung", function() {
        $.post("getDetails.php", { contest:'elanejung'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('ELAN-E-JUNG');
    });

    $('body').on("click", ".manthan", function() {
        $.post("getDetails.php", { contest:'manthan'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('MANTHAN');
    });

    $('body').on("click", ".breakfree", function() {
        $.post("getDetails.php", { contest:'breakfree'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('BREAKFREE');
    });

    $('body').on("click", ".looseyourfeet", function() {
        $.post("getDetails.php", { contest:'looseyourfeet'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('LOOSE YOUR FEET');
    });

    $('body').on("click", ".nrityanjali", function() {
        $.post("getDetails.php", { contest:'nrityanjali'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('NRITYANJALI');
    });

    $('body').on("click", ".just_duet", function() {
        $.post("getDetails.php", { contest:'just_duet'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('JUST DUET');
    });

    $('body').on("click", ".vibrazione", function() {
        $.post("getDetails.php", { contest:'vibrazione'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('VIBRAZIONE');
    });

    $('body').on("click", ".octaves", function() {
        $.post("getDetails.php", { contest:'octaves'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('OCTAVES');
    });

    $('body').on("click", ".andaazapnapna", function() {
        $.post("getDetails.php", { contest:'andaazapnapna'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('ANDAAZ APNA APNA');
    });

    $('body').on("click", ".nukkadnatak", function() {
        $.post("getDetails.php", { contest:'nukkadnatak'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('NUKKAD NATAK');
    });

    $('body').on("click", ".filmfarefiesta", function() {
        $.post("getDetails.php", { contest:'filmfarefiesta'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('FILM FARE FIESTA');
    });

    $('body').on("click", ".picelectic", function() {
        $.post("getDetails.php", { contest:'picelectic'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('PICELECTIC');
    });

    $('body').on("click", ".facepainting", function() {
        $.post("getDetails.php", { contest:'facepainting'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('FACE PAINTING');
    });

    $('body').on("click", ".nailart", function() {
        $.post("getDetails.php", { contest:'nailart'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('NAIL ART');
    });


    $('body').on("click", ".mehendi", function() {
        $.post("getDetails.php", { contest:'mehendi'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('MEHENDI ART');
    });

    $('body').on("click", ".nailart", function() {
        $.post("getDetails.php", { contest:'nailart'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('NAIL ART');
    });

    $('body').on("click", ".claymodelling", function() {
        $.post("getDetails.php", { contest:'claymodelling'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('CLAY MODELLING');        
    });

        $('body').on("click", ".artexhibition", function() {
        $.post("getDetails.php", { contest:'artexhibition'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('ART EXHIBITION'); 
    });

        $('body').on("click", ".djwars", function() {
        $.post("getDetails.php", { contest:'djwars'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('DJ WARS'); 
    });

        $('body').on("click", ".rjhunt", function() {
        $.post("getDetails.php", { contest:'rjhunt'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('RJ HUNT'); 
    });

        $('body').on("click", ".lendmeurvoice", function() {
        $.post("getDetails.php", { contest:'lendmeurvoice'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('LEND ME YOUR VOICE'); 
    });

        $('body').on("click", ".campus_princess", function() {
        $.post("getDetails.php", { contest:'campus_princess'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('CAMPUS PRINCESS'); 
    });

        $('body').on("click", ".mrdetective", function() {
        $.post("getDetails.php", { contest:'mrdetective'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('MR DETECTIVE'); 
    });

        $('body').on("click", ".wheel_of_fortune", function() {
        $.post("getDetails.php", { contest:'wheel_of_fortune'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('WHEEL OF FORTUNE'); 
    });

        $('body').on("click", ".quizzes", function() {
        $.post("getDetails.php", { contest:'quizzes'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('QUIZ CONCLAVE'); 
    });

        $('body').on("click", ".jam", function() {
        $.post("getDetails.php", { contest:'jam'}, function(result){
                            $('tbody').html(result);
        });
        $('tbody').html("LOADING");
        $('#name').html('JUST A MINUTE'); 
    });
   });
 </script>
 </html>