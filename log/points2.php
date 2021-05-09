<?php

session_start();

$con = mysqli_connect('localhost','root',"");

mysqli_select_db($con , 'registrations');


$username = $_SESSION['username'];

$s = "select * from users where username = '$username'";

$result = mysqli_query($con, $s);

while($row = mysqli_fetch_array($result)){
    
    $points = $row["Points"] + 1;
}
$s = "UPDATE users  SET Points = '$points' where username = '$username'";

$result = mysqli_query($con, $s);

header("location:challenge2.php")
?>
