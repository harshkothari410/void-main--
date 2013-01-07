<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon"  
      href="images/favicon.png">
<link rel="icon"  
      href="images/favicon.png">
<title>Rules</title>
<style type="text/css">
* { margin:0;
    padding:0;
}
body { background:#000; height:1000px }
div#copyright {
    font:11px 'Trebuchet MS';
    color:#FFF;
    text-indent:30px;
    padding:300px 0 0 0;
}
div#copyright a { color:#0080ff; }
div#copyright a:hover { color:#F00000; }
div#menu {
    width:80%;
	margin-left: 9.7%
	}
</style>
<link type="text/css" href="menu.css" rel="stylesheet" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="menu.js"></script>
<meta name="keywords" 
content="Teqnix 2012,TEQNIX 2012,LDCE,L.D.,L.D.C.E.,L.D. College of Engineering,L D College of Engineering,Lalbhai Dalpatbhai College of Engineering,
void main(),Online Event of coding,Online event for the first time in Gujarat,void main online coding event,
Official festival of Lalbhai Dalpatbhai College of Engineering,Official festival of LDCE,Official festival of L.D. College of Engineering,
Official festival of LD College of Engineering,Coding in C, C++ and Java,Program Statements in C, C++ and Java,Programs of C, C++ and Java,
Upload correct programs and win prizes" />
<meta name="description"
content="We introduce you to the totally novice and unique concept void main() -online coding copetition for the first time in the history of Teqnix as well as in the history of Gujarat.
void main() is of utmost prominence in the world of programming. It would be blasphemous to even think about programming without using void main(). It is mind blasting to even think about dazzling Zeroes and Ones in the program who can do solve the complex and unrealistic looking problems and calculation in the pinch of time.
Hereby we provide you with an opportunity to showcase and enhance your programming skills,We serve you with this fantabulous opportunity at your doorsteps where you wouldn't even have to spend your money.
So gear up and accelerate your neural activity towards programming and prove yourself the best among programmers community" />
<link rel="stylesheet" href="style.css" />

<link rel="icon" 
      type="image/png" 
      href="C:\wamp\www\main\akash.jpg">

</head>
<body>
<div class="logo_sec"  >
<div style="float:left"> 
<img src="images/void.png" style="margin-top:15px" />
</div>
<div style="float:left;margin-top:15px"">
<br>
&nbsp;&nbsp;&nbsp;<font size=+2><b>Event Starts ln</b></font>
<?php
	include("conter.php");
?>
</div>
<div style="margin-left:1000px;margin-top:-55px; font-size: 14px;float:left; visibility: hidden">

<form method="post" action="check_login.php"  onSubmit="return Loginvalidates()" style="margin-right: 0%; margin-top: -15%; position:relative;"> 
LoginName : <input type="text" name="username" id="username" placeholder="Enter your Username">
<br />
Password &nbsp;&nbsp;:&nbsp;<input type="password" id="pass" name="pass" placeholder="Enter your password"><br />
<input type="submit" name="login" value="Login" style="width:100px">
<a href="reg.php">Not Registered Yet?</a>
<span id="check_user" style="visibility:hidden; color:red">Wrong Username or Password</span>
<span id="check_password" style="visibility:hidden;color:red">Wrong Username or Password</span>
</form>
</div>
</div>

<!--<div id="menu" style="margin-top: 18%;">-->
<div id="menu" style="position:relative;margin-top: 0%;">
    <ul class="menu" style="color:white;">
        <li><a href="index.php" class="parent"><span style="color:white" >Home</span></a>
        </li>
        <li><a href="problem.php" class="parent"><span style="color:white">Problem Statements</span></a>
     <!--   <li class="last"><a href="rank.php"><span style="color:white">Rankings</span></a></li> -->
        <li><a href="rules.php" class="parent"><span style="color:white">Rules</span></a>
        <li class="last"><a href="contact.php"><span style="color:white">Contact Us</span></a></li>
	<!--	<li class="last"><a href="result.php"><span style="color:white">Result</span></a></li> -->
	</ul>
</div>
<br>
<div class="main">

<div id="text"><br />
<marquee width="900px"><h4>For further information keep visiting our site.</h4></marquee>
<h2>Programming Languages Allowed</h2><BR/>
   The allowed programming languages are :
  <div id="ul" style="margin-left:45px">
  <ul>
 <li>C</li>
 <li>C++</li>
 <li>Java</li></ul>
 </div>
<br/> <br/><h2>Date of the Event</h2><BR/>
The competition will now be held on <font size=+2 color="red"><b>24th and 25th March, 2012.</b></font> The exact timings will be from <br /><font size=+2 color="red"><b>12:00 pm, Saturday to 11:59 am, Sunday.</b></font>
<br/><br/>


<h2>General Rules</h2>
<div id="ul" style="margin-left:45px"></BR>
<ul>
<li> Team consist of only 1 member.</li>
<li>Event manager’s decision will be final.</li>
<li>Result will be declared on 26th March.</li>
<li>All students with a valid identity card of their respective educational institutes are eligible to participate. </li>
</ul>
</div><br /><br />
<h2>Judging</h2><br />
<div id="ul" style="margin-left:45px">
<ul>
<li>Participant that submits highest number of true programs will be declared as a winner. 
<li>If more than one participant submit same number of programs, 
their program submission timing will be considered for the declaration of result.</li>
</ul>
<br/><br/>
</div>
	<h2>Rewards</h2><BR/>
	<div id="ul" style="margin-left:45px">
	<ul>
	<li>The Winner will be awarded prize.</li>
	
	<li>Top 20 programmers will be given wild card entry in the finale of the most successful event of the History of  ”Softmania” – ‘The Cradel of Bites’ or in the very Interesting and Innovative windows based event  ‘Fenestras’ (you have to pay the fees of this event).</li>
	<li>Top 50 programmers will be awarded certificates.</li>
	</ul>
	</div><br />
	<div>
	<br /><br />
	
</div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>