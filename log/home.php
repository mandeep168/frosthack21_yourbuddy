
<?php 
session_start();

if(!isset($_SESSION['username'])){
  header("location:login.php");
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
<link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>

    <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
        <label class="logo">YourBuddy</label>
        <ul>
            <li><a class="active" href="http://localhost/log/home.php">Home</a></li>
            <li><a href="http://localhost/log/aboutus.html">AboutUs</a></li>
            <li><a href="http://localhost/log/profile.php">Profile</a></li>
            <li><a href="http://localhost/log/logout.php">Logout</a></li>
        </ul>
    <div class="jumbotron color"> 

 

<h1 class="display-4">Hello, <?php echo $_SESSION['username']; ?></h1>


  <br>
  <p class="lead">This is a simple webapp, for releasing your stress.</p>
  <hr class="my-4">
  <p>Emi is always there to help you.</p>
  <p class="lead">
   
  </p>
</div>
    </nav>

<a href="http://localhost:3000/"><button id="show"></button></a>
<div class="container">
        <div class="row">
            <div class="col-sm-4 py-3 py-sm-0">
                <div class="card box-shadow" >
                    <div class="card-body">
                        <h5 class="card-title">Challenge 1</h5>
                        <p class="card-text">This challenge contain amazing tasks.</p>
                        <a href="http://localhost/log/challenge1.php" class="btn btn-primary">Let's Go</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 py-3 py-sm-0">
                <div class="card box-shadow" >
                    <div class="card-body">
                        <h5 class="card-title">Challenge 2</h5>
                        <p class="card-text">This challenge contain some exercises.</p>
                        <a href="http://localhost/log/challenge2.php" class="btn btn-primary">Let's Go</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 py-3 py-sm-0">
                <div class="card box-shadow">
                    <div class="card-body">
                        <h5 class="card-title">Challenge 3</h5>
                        <p class="card-text">This challenge contain some amazing .</p>
                        <a href="http://localhost/log/challenge_3.html" class="btn btn-primary">Let's Go</a>
                    </div>
                </div>
            </div>            
        </div>
    </div>


</body>
</html>




