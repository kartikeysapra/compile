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
	<td class="tr2-currentTab" onclick="loclogin()">Login</td>
	<td class="tr2" onclick="locsignup()">Sign Up</td>
	<td class="tr2" onclick="loccontact()">Score</td>
</tr>
<tr class="tr-3"><td colspan="9"></td></tr>
<tr class="tr-4">
	<td colspan="1" class="tr_4_col_1"></td>
	<td colspan="7" style="background-image:url('ninja/ninja1.jpg');background-size:100% 100%;background-repeat:no-repeat;">
	<table style="background-color:rgba(38,52,63,0.6);width:100%;height:50%;">
	<tr>
	<td style="background-color:rgba(38,52,63,0.1)"></td>
	<td>
	<?php
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['password']) )
	{
	  header("Location: questionI.php");			
	}
	?>
	<form action="loginvalid.php" method="post" id="inputForm" >
		Username: <input type="text" name="username" onblur="userNameCheck()"/><br><br>
		Password: <input type="password" name="password" onblur="tPassCheck()" /><br><br>
		<input type="submit" name="submit" value="Login" onclick="locloginvalid()" class="button" style="width:130;" />
	</form>
	</td>
	<td style="background-color:rgba(38,52,63,0.1)"></td>
	</tr>
	</table>
	</td>
	<td colspan="1" class="tr_4_col_1"></td>
</tr>
</table>
</body>
</html>
