<?php

session_start();

$con = mysqli_connect('localhost','root',"");

mysqli_select_db($con , 'registrations');



$username = $_SESSION['username'];



?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale = 1">
    <title>Challenge 2</title>
    <style>
    body{
    background: #ffe6e6;
    }

.container{
    position: absolute;
    top: 0%;
    left: 0%;
}
.maincontainer-one{
  position: relative;
  width: 200px;
  height: 150px;
  background: none;
  top: 400px;
  left: 150px;
  padding: 0 0 50px 50px;
  transform: translate(-50%, -50%);

}

.maincontainer-two{
  position: relative;
  width: 200px;
  height: 150px;
  background: none;
  top: -1000px;
  left: 750px;
  padding: 0 0 50px 50px;
  transform: translate(-50%, -50%);

}

.maincontainer3{
  position: relative;
  width: 200px;
  height: 150px;
  background: none;
  top: -2400px;
  left: 1300px;
  padding: 0 0 50px 50px;
  transform: translate(-50%, -50%);

}



/* THE CARD HOLDS THE FRONT AND BACK FACES */
.thecard{
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  transform-style: preserve-3d;
  transition: all 0.8s ease;
}

/* THE PSUEDO CLASS CONTROLS THE FLIP ON MOUSEOVER AND MOUSEOUT */
.thecard:hover{
  transform: rotateY(180deg);
}

/* THE FRONT FACE OF THE CARD, WHICH SHOWS BY DEFAULT */
 .thefront{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  backface-visibility: hidden;
  overflow: hidden;
  background: #6155a6;
  color: #fff;
}

/* THE BACK FACE OF THE CARD, WHICH SHOWS ON MOUSEOVER */
.theback{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  backface-visibility: hidden;
  overflow: hidden;
  background: #a685e2;
  color: #fff;
  text-align: center;
  transform: rotateY(180deg);
}


/*This block (starts here) is merely styling for the flip card, and is NOT an essential part of the flip code */
.thefront h1, .theback h1{
  font-family: 'zilla slab', sans-serif;
  padding: 30px;
  font-weight: bold;
  font-size: 24px;
  text-align: center;
}

.thefront p, .theback p{
  font-family: 'zilla slab', sans-serif;
  padding: 30px;
  font-size: 15px;
  text-align: top;
}
.btn{
  background: #6155a6;
  color: #fff;
}
.h1{
  color: #a685e2;
  text-align: center;
  font-size: 60px
}

.p{
  font-size: 20px;
}

#GFG{
  text-decoration: none;
}
/*This block (ends here) is merely styling for the flip card, and is NOT an essential part of the flip code */
    </style>
  </head>

  <body>

<h1 class="h1"> Challenge 2</h1>
<p class="p"> In this challenge you have to complete some taske given to you and in some flask card there are some quotes wich will help you to relax your mind.</p>



  <?php


$s = "select * from users where username = '$username'";

$result = mysqli_query($con, $s);

while($row = mysqli_fetch_array($result)){
    
    $points = $row["Points"];
}
echo "<h4>Today's Point: <span id='thisone'> '$points' </span></h4>";
?>

  <div class=" container">
    <div class="maincontainer-one">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 1</h1></div>

        <div class="theback"><h4>It's your first day make it simple and write journal of how do you feel.</h4>
        <button class="btn" id="1" onclick="one()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-one">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 4</h1></div>

        <div class="theback"><h4>Today is brisk walking day.</h4>
        <button class="btn" id="4" onclick="four()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-one">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 7</h1></div>

        <div class="theback"><h4>Lets do some exercise.Let's start with situps(20).</h4>
        <button class="btn" id="7" onclick="seven()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-one">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 10</h1></div>

        <div class="theback"><h4>Today is relaxing day. Lets do some meditaion</h4>
        <button class="btn" id="10" onclick="ten()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-one">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 13</h1></div>

        <div class="theback"><h4>Lets do some running today short and healty.</h4>
        <button class="btn" id="13" onclick="thirteen()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>

    </div>

    <div class="maincontainer-one">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 16</h1></div>

        <div class="theback"><h4>give rest to your body and listen some nice song. And strech your self</h4>
        <button class="btn" id="16" onclick="sixteen()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>

    </div>

    <div class="maincontainer-one">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 19</h1></div>

        <div class="theback"><h4>We'll do SuryaNamaskar today 10 atleast.</h4>
        <button class="btn" id="19" onclick="nineteen()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>

    </div>


    <div class="maincontainer-two">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 2</h1></div>

        <div class="theback"><h4>Let's go for morning walk</h4>
        <button class="btn" id="2" onclick="two()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-two">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 5</h1></div>

        <div class="theback"><h4>Brisk Walking is todays task.</h4>
        <button class="btn" id="5" onclick="five()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-two">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 8</h1></div>

        <div class="theback"><h4>Let's go for badminton.</h4>
        <button class="btn" id="8" onclick="eight()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-two">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 11</h1></div>

        <div class="theback"><h4>Today is nice day for table tennis.</h4>
        <button class="btn" id="11" onclick="eleven()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-two">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 14</h1></div>

        <div class="theback"><h4>Let's exhale our problems</h4>
        <button class="btn" id="14" onclick="forteen()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-two">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 17</h1></div>

        <div class="theback"><h4>Take Walk fo 30 min.</h4>
        <button class="btn" id="17" onclick="seventeen()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer-two">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 20</h1></div>

        <div class="theback"><h4>Skipping is good way to exercise.</h4>
        <button class="btn" id="20" onclick="twenty()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>
    </div>

    <div class="maincontainer3">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 3</h1></div>

        <div class="theback"><h4>Let's Jog for 1hr.</h4>
        <button class="btn" id="3" onclick="three()" type="button"><a id=GFG href="home.html">Done</a></button>
        </div>

      </div>

    </div>

    <div class="maincontainer3">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 6</h1></div>

        <div class="theback"><h4>Swimming is good way to burn clories and have fun.</h4>
        <button class="btn" id="6" onclick="six()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>

    </div>

    <div class="maincontainer3">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 9</h1></div>

        <div class="theback"><h4>Let's go Running </h4>
        <button class="btn" id="9" onclick="nine()" type="button"><a id=GFG href="home.html">Done</a></button>
        </div>

      </div>

    </div>

    <div class="maincontainer3">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 12</h1></div>

        <div class="theback"><h4>Ready to do some yoga</h4>
        <button class="btn" id="12" onclick="tweleve()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>

    </div>

    <div class="maincontainer3">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 15</h1></div>

        <div class="theback"><h4>Let's have rest</h4>
        <button class="btn" id="15" onclick="fifteen()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>

    </div>

    <div class="maincontainer3">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 18</h1></div>

        <div class="theback"><h4>1 hour social media limit for today</h4>
        <button class="btn" id="18" onclick="eighteen()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>

    </div>

    <div class="maincontainer3">

      <div class="thecard">

        <div class="thefront"><h1><br>Day 21</h1></div>

        <div class="theback"><h4>Write Journal of how do you feel today.</h4>
        <button class="btn" id="21" onclick="twentyone()" type="button"><a id=GFG href="points2.php">Done</a></button>
        </div>

      </div>

    </div>

</div>
<script>
  function one()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("1").disabled = true;
  }

    function two()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("2").disabled = true;
  }

    function three()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("3").disabled = true;
  }

    function four()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("4").disabled = true;
  }

    function five()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("5").disabled = true;
  }

    function six()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("6").disabled = true;
  }

    function seven()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("7").disabled = true;
  }

    function eight()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("8").disabled = true;
  }

    function nine()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("9").disabled = true;
  }

    function ten()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("10").disabled = true;
  }

    function eleven()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("11").disabled = true;
  }

    function tweleve()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("12").disabled = true;
  }

    function thirteen()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("13").disabled = true;
  }

    function forteen()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("14").disabled = true;
  }

    function fifteen()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("15").disabled = true;
  }

    function sixteen()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("16").disabled = true;
  }

    function seventeen()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("17").disabled = true;
  }

    function eighteen()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("18").disabled = true;
  }

    function nineteen()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("19").disabled = true;
  }

    function twenty()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("20").disabled = true;
  }

    function twentyone()
  {
    var foo = document.getElementById('thisone').innerHTML;
    foo++;
    document.getElementById('thisone').innerHTML=foo;

    document.getElementById("21").disabled = true;
  }

</script>
  </body>
</html>