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
	<td class="tr2-currentTab" onclick="loccontact()">Score</td>
</tr>
<tr class="tr-3"><td colspan="9"></td></tr>
<tr class="tr-4">
	<td colspan="1" class="tr_4_col_1"></td>
	<td colspan="7" style="background-image:url('ninja/raphael_teenage_mutant_ninja_turtles-wide.jpg');background-size:100% 100%;background-repeat:no-repeat;">
	<table style="background-color:rgba(38,52,63,0.6);width:100%;height:100%;" class="leaderB">
	<tr>
	<td>
	<?php
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['password']) )
	{
		$con = mysql_connect("localhost","root","mano");
		mysql_select_db("cfcf1", $con);
		$uName=$_SESSION['username'];
		$check = mysql_query("SELECT team,user1,user2,user3,point FROM user where username='$uName'");
		$info = mysql_fetch_array( $check );
		echo "Team Name : ";?></td><td><?php echo $info['team'];?></td></tr><tr><td>
	<?php	echo "Player-one : ";?></td><td><?php echo $info['user1'];?></td></tr><tr><td>
	<?php	echo "Player-two : ";?></td><td><?php echo $info['user2'];?></td></tr><tr><td>
	<?php	echo "Score : ";?></td><td><?php echo $info['point'];?></td></tr><tr><td>
	<?php
		mysql_close($con);
	}else echo "Login to know your score!";
	?>
	</td>
	</tr>
	<tr><td style="height:60%;"></td></tr>
	</table>
	</td>
	<td colspan="1" class="tr_4_col_1"></td>
</tr>
</table>
</body>
</html>
