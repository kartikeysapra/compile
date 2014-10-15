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
	$con = mysql_connect("localhost","root","mano");
	if (!$con)
	{
	  echo "Could not connect";
	}
	mysql_select_db("cfcf1", $con);
	if (isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$pattern = '/^[a-z0-9]{1,}[ ]{0,}[a-z0-9]{1,}$/i';
		$userName=$username;
		if(preg_match($pattern, $userName))
		{
			$teamPassword=$password;
			$pattern = '/^[a-z0-9]{5,}$/i';
			if(preg_match($pattern, $teamPassword))
			{
				$check = mysql_query("SELECT * FROM user WHERE username = '$username'");
				$info = mysql_fetch_array( $check );
				if ($password == $info['password']) 
				{
					$check = mysql_query("SELECT * FROM user WHERE username = '".$_POST['username']."'");
					$check2 = mysql_num_rows($check);
					if ($check2 == 0)
					{
						echo "That user does not exist";
					}
					else
					{
						$info = mysql_fetch_array( $check );
						if ($_POST['password'] != $info['password'])
						{
							echo "Incorrect password please try again";
						}
						else
						{
							session_start();
							$_SESSION['username']=$_POST['username'];
							$_SESSION['password']=$_POST['password'];
							header("Location: questionI.php");
						}
					}
				}else{echo "Wrong username or password! Try to login again!";}
			}else{echo "Wrong username or password! Try to login again!";}
		}else{echo "Wrong username or password! Try to login again!";}
	}
	else
	{
		echo "Wrong username or password! Try to login again!";
	}
	mysql_close($con);
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
