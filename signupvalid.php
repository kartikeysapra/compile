<html>
<head>
<link rel="stylesheet" type="text/css" href="onlyTables.css">
<script src="javaScriptForCf.js"></script>
</head>
<body onload="thisisfun()">
<table border="0">
<tr class="tr-2">
	<td id="terminalText" class="terminal"></td>
	<td colspan="3"></td>
	<td class="tr2" onclick="locindex()">Home</td>
	<td class="tr2" onclick="loccontest()">Contest</td>
	<td class="tr2" onclick="loclogin()">Login</td>
	<td class="tr2" onclick="locsignup()">Sign Up</td>
	<td class="tr2" onclick="loccontact()">Score</td>
</tr>
<tr class="tr-3"><td colspan="9"></td></tr>
<tr class="tr-4">
	<td colspan="1" class="tr_4_col_1"></td>
	<td colspan="7" style="background-image:url('ninja/raphael_teenage_mutant_ninja_turtles-wide.jpg');background-size:100% 100%;background-repeat:no-repeat;">
	<table style="background-color:rgba(38,52,63,0.6);width:100%;height:100%;vertical-align:text-bottom;">
	<tr>
	<td>
<?php
if(isset($_POST['sub_form']))
{
session_start();
$errors="";
$ecount=0;
$userName=$_POST["username"];
$pattern = '/^[a-z0-9]{1,}[ ]{0,}[a-z0-9]{1,}$/i';
	if(preg_match($pattern, $userName))
	{
	}else
	{$ecount+=1;$errors=$errors."error in user name<br>";}
$teamName=$_POST["team"];
$pattern = '/^[a-z0-9]{1,}[ ]{0,}[a-z0-9]{1,}$/i';
	if(preg_match($pattern, $teamName))
	{
	}else
	{$ecount+=1;$errors=$errors."error in team name<br>";}
$teamPassword=$_POST["password"];
$pattern = '/^[a-z0-9]{5,}$/i';
	if(preg_match($pattern, $teamPassword))
	{
	}else
	{$ecount+=1;$errors=$errors."error in password<br>";}

$memberOne=$_POST["user1"];
$pattern = '/^[a-z]{1,}[ ]{0,}[a-z]{1,}$/i';
	if(preg_match($pattern, $memberOne))
	{
	}else
	{$ecount+=1;$errors=$errors."error in member one name<br>";}
$memberTwo=$_POST["user2"];
$pattern = '/^[a-z]{0,}[ ]{0,}[a-z]{0,}$/i';
	if(preg_match($pattern, $memberTwo))
	{
	}else
	{$ecount+=1;$errors=$errors."error in member two name<br>";}
$txtCaptcha=$_POST["txtCaptcha"];
$pattern = '/^[a-z0-9]{5}$/i';
	if(preg_match($pattern, $txtCaptcha) && $txtCaptcha==$_SESSION["security_code"])
	{
	}else
	{$ecount+=1;$errors=$errors."error in txtCaptcha<br>";}
if($ecount==0)
{
	$con = mysql_connect("localhost","root","mano");
	if (!$con)
	{
	  echo "Could not connect";
	}
	mysql_select_db("cfcf1", $con);
	$sql="INSERT INTO user (username, password, team, user1, user2) VALUES
('$_POST[username]','$_POST[password]','$_POST[team]','$_POST[user1]','$_POST[user2]')";
	if (!mysql_query($sql,$con))
  	{
  		echo "Incorrect form details!";
  	}
	echo "Sign-up Succesfull !";
	echo "Login to Play!";
}
echo "<br>".$errors." Total errors: ".$ecount;
}
else
{
	echo "error-sv-ns:unknown error!";
}
?>
	</td>
	</tr>
	</table>
	</td>
	<td colspan="1" class="tr_4_col_1"></td>
</tr>
</table>
</body>
</html>
