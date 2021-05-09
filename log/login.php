


<?php

session_start();

$con = mysqli_connect('localhost','root',"");

mysqli_select_db($con , 'registrations');

if(isset($_POST['fname'])){
    $uname=$_POST['fname'];
    $password=$_POST['lname'];

$s = "select * from users where username = '$uname' and password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($num==1){
    $_SESSION['username'] = $uname;
    header('location:http://localhost/log/home.php');
}else{
    header('location:http://localhost/log/login.php');
}}


    
?>





<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css">
        <style>
            .container .box
            {
                position: absolute;
                top: 80px;
                left: 80px;
            }
        </style>
    </head>
    <body>
        <div class=container>
            <div class="box">
            <form  method="post">
                    <label class="uname"for="fname">Username:</label>
                    <br><br>
                    <input type="text" id="fname" name="fname"><br><br><br><br>
                    <label class="uname" for="lname">Password:</label>
                    <br><br>
                    <input type="password" id="lname" name="lname"><br><br><br><br>
                    <input id="submit"type="submit" value="Submit" name="submit">
            </form>
            </div>
        </div>

    </body>
</html>


