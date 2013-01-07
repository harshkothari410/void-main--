<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon"  
      href="images/favicon.png">
<title>Welcome to void main()</title>
<style type="text/css">
* { margin:0;
    padding:0;
}
body { background:#000; height: 1000px }
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
<table style="margin-top: 0%" width=100%>
<tr>
<td>
<div class="logo_sec">
<div style="float:left"> 
<a href="login.php"><img src="images/void.png" style="margin-top: 7%;margin-left: 2%;" /></a>
</div>
<div style="margin-left: 2% ;float:left;">
<br>
&nbsp;&nbsp;&nbsp;<font size=+2><b>Event Starts ln</b></font>
<?php
	include("conter.php");
?>
</div>
<div style="margin-left:70%; font-size: 14px; float:left; margin-top: -5%">
<form method="post" action="logout.php" style="margin-left: 150px;">
<div style="color: white;"><?php echo "Welcome ".$_SESSION['username'];?> | <input type="submit" value="Logout" name="logout" style="width:100px;"></div>
</form>
</div>
</td>
</div>
</table>

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
if(!isset($_SESSION['username']))
{
	header("location:index.php?upload1_error=Please Log in");
}
	
	$connection=mysql_connect("localhost");
	$db=mysql_select_db("test",$connection);
	$query = "SELECT COUNT(file) FROM up where loginName='$username'"; 
	$result=mysql_query($query) or die("Couldn't execute the query");

	while($row=mysql_fetch_array($result))
	  if($row['COUNT(file)']>=8)
	  {
		echo header("location:alluploads.php");
		echo "All files uploaded";
		echo "<br />";
	  } 
?><br /><br />
<h1>Important Instruction:</h1><br />
<div style="margin-left: 45px">
<ul>
<li>Upload your files one by one after checking it properly.</li><br />
<li>The name of the file must be as per mentioned below:</li><br />
	1. For Problem Statement-1 the name of the file should be your_username_1.c/.cpp/.java.<br />
		<small>(If your username is <b>amit</b> then the name of your file name must be: <b>amit_1.c or amit_1.cpp or amit_1.java</b> as per the language used.)</small><br />
	<br />2. In a similar way you have to name your other files and upload them one by one.<br />
</div>
	<br /><br />
<div style="margin-left: 250px">
<form action="check.php" method="post"
enctype="multipart/form-data">	
<label for="file">Filename:</label>
<input type="file" name="file1" id="file1"/> 
<br />
<br/>
<input type="submit" name="submit" value="Submit" style="width:100px; margin-left:70px;" /><br />
</form>
</div>
<br /><br />
</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>