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

$sql = "DELETE FROM $_POST[contest] WHERE ID='$_SESSION[id]'";
if(mysqli_query($conn, $sql)){
    $temp = explode(",",$_SESSION["events"]);
    $index = array_search($_POST[contest],$temp);
    unset($temp[$index]);
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