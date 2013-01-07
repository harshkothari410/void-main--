<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Registration Form</title>
<style type="text/css">
* { margin:0;
    padding:0;
}
body { background:#000;height: 1000px }
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
<link rel="stylesheet" href="style.css" />

</head>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}
?>
<body>
<div class="logo_sec"  >
<div style="float:left"> 
<a href="login.php"><img src="images/void.png" style="margin-top:7%" /></a>
</div>
<div style="float:left;margin-top:1%">
<br><?php
	include("conter.php");
?>
</div>
<div style="margin-left: 65%; margin-top:-5%; font-size: 14px;float:left">
<form method="post" action="logout.php" style="margin-left: 150px;">
<div style="color: white;"><?php echo "Welcome ".$_SESSION['username'];?> | <input type="submit" value="Logout" name="logout" style="width:100px;"></div>
</form>
</div>
</div>

<!--<div id="menu" style="margin-top: 18%;">-->
<div id="menu" style="position:relative;margin-top: 0%;">
    <ul class="menu" style="margin-left: -7%; color:white; width: 110%">
        <li><a href="login.php" class="parent"><span style="color:white" >Home</span></a>
        </li>
        <li><a href="problem_login.php" class="parent"><span style="color:white">Problem Statements</span></a></li>
		<li><a href="upload1.php" class="parent"><span style="color:white">Upload Programs</span></a></li>
        <li class="last"><a href="rank_login.php"><span style="color:white">Rankings</span></a></li>
        <li><a href="rules_login.php" class="parent"><span style="color:white">Rules</span></a></li>
        <li class="last"><a href="contact_login.php"><span style="color:white">Contact Us</span></a></li>
		<li class="last"><a href="result_login.php"><span style="color:white">Results</span></a></li>
	</ul>
</div>
<br>
<div class="main" style="height: 700px;">

<div id="text"><br />
<?php
$username=$_SESSION['username'];
$connection=mysql_connect("localhost") or die("Couldn't connect");
$db=mysql_select_db("test",$connection) or die("Couldn't select");
echo "Welcome ",$_SESSION['username'];
echo "<br />";
$query="select *,count(file) from up where loginName='$username'";
$result=mysql_query($query);
$sql="select * from reg where loginName='$username'";
$result1=mysql_query($sql);
echo "<br />";
while($row = mysql_fetch_array($result1))
{
	echo "<table><tr>";
	echo "<td>FirstName    :</td><td width='50%'>".$row['FirstName']."</td></tr>";
	
	echo "<tr>";
	echo "<td>LastName    :</td><td>".$row['LastName']."</td></tr>";
	
	echo "<tr>";
	echo "<td>Email    :</td><td>".$row['email']."</td></tr>";
	
	echo "<tr>";
	echo "<td>Phone Number:</td><td>".$row['phone']."</td></tr>";
	
	echo "<tr>";
	echo "<td>College:</td><td>".$row['college']."</td></tr>";
	echo "</table>";

	
	}
	
	
?>
<h2>Congratulations You Have uploaded all your Solutions!!!!!!!!!!!</h2>

</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>