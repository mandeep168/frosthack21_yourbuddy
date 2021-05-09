<?php
$insert=false;

if(isset($_POST['lname'])){
	$server = "localhost";
	$username="root";
	$password = "";

	$con = mysqli_connect($server, $username, $password);

	mysqli_select_db($con , 'registrations');

if(isset($_POST['firstname'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$lname = $_POST['lname'];
	$pass_word = $_POST['password'];




	$sql = "INSERT INTO `users` (`first_name`, `last_name`, `age`, `username`, `password` ) VALUES('$firstname', '$lastname', '$age', '$lname', '$pass_word'); ";

	//echo $sql;

	if($con->query($sql) == true){
		//echo "Successful inserted";
		$insert=true;
	}
	else
	{
		echo "ERROR: $sql <br> $con->error";
	}

	$con->close();
	}
}

?> 


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css">
		<style>
            .container .box
            {
                position: absolute;
                top: 50px;
                left: 80px;
            }
            .submitMsg{
            	color: white;
    			font-size: 18px;
    			text-align: center;
            }
        </style>
    </head>
    <body>
    	
        <div class=container>
        	<?php
				if($insert==true){ echo '<p class="submitMsg">You are successfully registered</p>';}
			?>
            <div class="box">
				<form action="http://localhost/log/index.php" method="post">
					<label class="uname" for="fname">First Name:</label><br>
					<input type="text" id="fname" name="firstname">
					<br><br><br>
					<label class="uname" for="lname">Last Name:</label><br>
					<input type="text" id="lname" name="lastname">
					<br><br><br>
					<label id="age" for="age">Age:</label><br>
                    <input type="number" id="age" name="age">
					<br><br><br>
                    <label class="uname" for="lname">Userame:</label>
                    <br>
                    <input type="text" id="lname" name="lname"><br><br><br>
					<label class="uname" for="lname">Enter Password:</label>
                    <br>
                    <input type="password" id="password" name="password"><br><br><br>
				  	<input type="submit" value="Register">
				  </form>
            </div>
        </div>

    </body>
</html>