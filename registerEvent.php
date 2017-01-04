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
    header("Location: ../index.php?t=f");
    exit();
}

if(!isset($_SESSION["verified"])){
    header("Location: ../index.php?t=r");
    exit();
}
$sql = "INSERT INTO $_POST[contest] VALUES ('$_POST[id]', '$_POST[elanId]' , '$_POST[email]' )";
if(mysqli_query($conn, $sql)){
    
    $temp = explode(",",$_SESSION["events"]);
    array_push($temp,$_POST[contest]);
    $registered_events = implode(",",$temp);
    $_SESSION["events"]= $registered_events;

    $sql = "UPDATE users SET registered_events='$registered_events' WHERE ID='$_POST[id]';";
    if(mysqli_query($conn, $sql)){
        echo $registered_events;
    }
    else 
        echo "failure";
}
else
    echo "failure";


 ?>