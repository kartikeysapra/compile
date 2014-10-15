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
	<td class="tr2-currentTab" onclick="locsignup()">Sign Up</td>
	<td class="tr2" onclick="loccontact()">Score</td>
</tr>
<tr class="tr-3"><td colspan="9"></td></tr>
<tr class="tr-4">
	<td colspan="1" class="tr_4_col_1"></td>
	<td colspan="7" style="background-image:url('ninja/raphael_teenage_mutant_ninja_turtles-wide.jpg');background-size:100% 100%;background-repeat:no-repeat;">
	<table class="suClass" border="0">
	<tr>	<form action="signupvalid.php" method="post" onsubmit="return isEthinkAlright()">
		<td>User Name:</td>
		<td style="text-align:left;"><input type="text" name="username" placeholder="" onblur="userNameCheck()"/></td></tr>
	<tr>
		<td>Password :</td>
		<td style="text-align:left;"><input type="password" name="password" placeholder="" onblur="tPassCheck()"/></td></tr>
	<tr>
		<td>Team Name:</td>
		<td style="text-align:left;"><input type="text" name="team" placeholder="" onblur="teamNameCheck()"/></td></tr>
	<tr>
		<td>Player-One :</td>
		<td style="text-align:left;"><input type="text" name="user1" placeholder="" onblur="mOneCheck()"/></td></tr>
	<tr>
		<td>Player-Two :</td>
		<td style="text-align:left;"><input type="text" name="user2" placeholder="" onblur="mTwoCheck()"/></td></tr>
	<tr>
		<td ><img id="imgCaptcha" src="create_image.php"/></td
		><td style="text-align:left;"><input id="txtCaptcha" type="text" name="txtCaptcha" value="" placeholder=""/></td></tr>
	<tr>
           
            	<td colspan="2" style="text-align:center;"><input type="submit" name="sub_form" value="SUBMIT_FORM" class="button"/></td></tr>
        	</form>
       
	</table>
	</td>
	<td colspan="1" class="tr_4_col_1"></td>
</tr>
</table>
</body>
</html>
