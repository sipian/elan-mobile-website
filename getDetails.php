<?php 
session_start();
if (!(isset($_SESSION["access"]) && $_SESSION["access"]=="yes")) {
    header("HTTP/1.0 404 Not Found");
    exit();
}

require 'connect.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_POST[contest] == 'user')
    $sql = "SELECT * from users";
else
    $sql = "SELECT * from users where registered_events LIKE '%$_POST[contest]%'";

$result = mysqli_query($conn, $sql);
$answer="";
if($_POST[contest] == 'user') $count=0;
else  $count=1;
if (mysqli_num_rows($result) > 0){    
    while($row = mysqli_fetch_assoc($result)){
$answer.= 
"<tr class='warning'><td>$count</td><td>$row[elanId]</td><td>$row[name]</td><td>$row[college]</td><td>$row[mobile]</td><td>$row[email]</td></tr>";
    $count++;
    }
}
else $answer.="<tr class='danger'><td>NO REGISTERED PARTICIPANTS</td></tr>";
echo $answer;
 ?>
