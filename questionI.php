<html>
<head>
<link rel="stylesheet" type="text/css" href="onlyTables.css">
<script src="javaScriptForCf.js"></script>
</head>
<body onload="thisisfun()">
<table border="0">
<tr class="tr-2">
	<td id="terminalText" class="terminal">
	<td colspan="3"></td>
	<td class="tr2" onclick="locindex()">Home</td>
	<td class="tr2-currentTab" onclick="loccontest()">Contest</td>
	<td class="tr2" onclick="locleaderboard()">LeaderBoard</td>
	<td class="tr2" onclick="loclogout()">Log out</td>
	<td class="tr2" onclick="loccontact()">SCORE</td>
	
</tr>
<tr class="tr-3"><td colspan="9"></td></tr>
<tr class="tr-4">
	<td colspan="1" class="tr_4_col_1" ></td>
	<td colspan="7" style="background-image:url('ninja/ninja1.jpg');background-size:100% 100%;background-repeat:no-repeat;">
	<table border="0">
	<tr >
	<td style="width:20%;">
		<table border="0" class="qTableQno">
		<tr>
		<td  class="qTableQno-currentTab" onclick="locQuestionOne()">Question-I</td>
		</tr>
		<tr>
		<td >Question-II</td>
		</tr>
		<tr>
		<td>Question-III</td>
		</tr>
		<tr>
		<td>Question-IV</td>
		</tr>
		</table>
	</td>
	<td style="width:80%;">
		<table border="1" class="qTable">
		<tr style="height:10%;">
		<td>
	
			<form action="questionIsub.php" method="post"
			enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file" />
			<input type="submit" name="submit" value="Submit" class="button" style="width:auto;" />
			</form>
		</td>
		</tr>
		<tr style="height:80%;">
		<td style="text-align:left;font-size:15px;">
		
The Utopian tree goes through 2 cycles of growth every year. The first growth cycle of the tree is during the monsoon season when it doubles in height. The second growth cycle is during the summer when it increases in height by 1 meter. If a new Utopian tree sapling of height 1 meter is planted just before the onset of the monsoon season, can you find the height of the tree after N cycles?<br><br>
Input Format<br>
The first line of the input contains an integer T, the number of testcases.<br>
T lines follow each line containing the integer N, indicating the number of cycles.<br>
<br>
Constraints<br>
1 <= T <= 10<br>
0 <= N <= 60<br><br>

Output Format<br>
Print the height of the Utopian tree after N cycles.<br><br>

Sample Input #00:<br><br>

2<br>
0<br>
1<br><br>

Sample Output #00:<br><br>

1<br>
2<br><br>

Explanation #00:<br>
There are 2 testcases. When N = 0, the height of the tree remains unchanged. When N = 1, the tree doubles its height as it/’s planted just before the onset of monsoon.<br><br>

Sample Input: #01:<br><br>

2<br>
3<br>
4<br><br>

Sample Output: #01:<br><br>
Explanation: #00:<br>
There are 2 testcases. When N = 3, the height of the tree at the end of the 1st cycle doubles to 2, at the end of the 2nd cycle it increases by 1 and at the end of the 3rd cycle, it doubles its height to 6. When N = 4, the height of the tree increases from 6 to 7.
		
		</td>
		</tr>
		</table>
	</td>
	</tr>
	</table>
	</td>
	<td colspan="1" class="tr_4_col_1"></td>
</tr>
</table>
</body>
</html>
