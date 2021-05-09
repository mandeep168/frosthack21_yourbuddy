<?php

session_start();

$con = mysqli_connect('localhost','root',"");

mysqli_select_db($con , 'registrations');


$username = $_SESSION['username'];

$s = "select * from users where username = '$username'";

$result = mysqli_query($con, $s);

while($row = mysqli_fetch_array($result)){
    $fname = $row["first_name"];
    $lname = $row["last_name"];
    $username = $row["username"];
    $age = $row["age"];
    $password = $row["password"];
    $points = $row["Points"];
}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>YourBuddy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" href="home.css">
</head>

<body>

    <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
        <label class="logo">YourBuddy</label>
        <ul>
            <li><a class="active" href="home.html">Home</a></li>
            <li><a href="aboutus.html">AboutUs</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href=#>Logout</a></li>
        </ul>
    </nav>
       <h1 class="head">Profile Page</h1>
    <div>
        <p class="line">Your account details are below:</p>
        <table>
            <tr>
                <td class="para">First Name:</td>
                <td class="para"><?php echo $fname; ?></td>
            </tr>
            <tr>
                <td class="para">Full Name:</td>
                <td class="para"><?php echo $lname; ?></td>
            </tr>
            <tr>
                <td class="para">Username:</td>
                <td class="para"><?php echo $username; ?></td>
            </tr>
            <tr>
                <td class="para">Password:</td>
                <td class="para"><?php echo $password; ?></td>
            </tr>
            <tr>
                <td class="para">Age:</td>
                <td class="para"><?php echo $age; ?></td>
            </tr>
            <tr>
                <td class="para">Points Earned:</td>
                <td class="para"><?php echo $points; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
