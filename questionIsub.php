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
	<td class="tr2" onclick="loccontest()">Contest</td>
	<td class="tr2" onclick="locleaderboard()">LeaderBoard</td>
	<td class="tr2" onclick="loclogout()">Log out</td>
	<td class="tr2" onclick="loccontact()">SCORE</td>
	
</tr>
<tr class="tr-3"><td colspan="9"></td></tr>
<tr class="tr-4">
	<td colspan="1" class="tr_4_col_1"></td>
	<td colspan="7" style="background-image:url('ninja/raphael_teenage_mutant_ninja_turtles-wide.jpg');background-size:100% 100%;background-repeat:no-repeat;">
	<table border="1">
	<tr >
	<td style="width:20%;">
		<table border="0" class="qTableQno">
		<tr>
		<td class="qTableQno-currentTab" onclick="locQuestionOne()">Question-I</td>
		</tr>
		<tr>
		<td>Question-II</td>
		</tr>
		<tr>
		<td>Question-III</td>
		</tr>
		<tr>
		<td>Question-IV</td>
		</tr>
		</table>
	</td>
	<td style="width:80%;" >
	<div id="printOutput" style="background-color:rgba(38,52,63,0.6);">Your program execution has excedded time!!!! </div>
	</td>
	</tr>
	</table>
	</td>
	<td colspan="1" class="tr_4_col_1"></td>
</tr>
</table>
<div id="hidden" hidden>
<?php
session_start();
$filesize = 5120;
if(isset($_SESSION['username']) && isset($_SESSION['password']) )
{
if ((($_FILES["file"]["type"] == "text/x-c++src")|| ($_FILES["file"]["type"] == "text/x-csrc") || ($_FILES["file"]["type"] == "application/octet-stream")&& ($_FILES["file"]["size"] < $filesize)))
{	if ($_FILES["file"]["error"] > 0)
    	{	
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    	}
  	else
    	{
    		$cppFileName='7mNeDaDz/'.$_SESSION['username'].'q1.cpp';
    		exec('mv '.$_FILES["file"]["tmp_name"].' '.$cppFileName);
		$sForFork=strlen(exec('grep fork '.$cppFileName))."<br>";
		$sForSystem=strlen(exec('grep system '.$cppFileName));
		if($sForFork==0 && $sForSystem==0)
		{
			$outFile='7mNeDaDz/'.$_SESSION['username'].'q1';
			$error=exec('g++ '.$cppFileName.' -o'.$outFile.' 2>&1',$out,$ret)."<br>";
			$out=str_replace($cppFileName,$_FILES["file"]["name"],$out);
			if(sizeof($out)==0)
			{	echo "Compilation Sucessful!"."<br>";
				$testcase="2 '\nabab' '\ncot'";
				$ansfortcase=array('abab','cot');
				echo "Total testcases:".sizeof($ansfortcase)."<br>";
				$count=0;
				exec("echo ".$testcase." | timeout 5s ".$outFile,$out,$ret);
				foreach ($ansfortcase as $key=>$value)
				{	if($key < sizeof($ansfortcase))
					{	if($value==$out[$key])
						{$count+=1;
						echo "Test case ".$key.": <span style='color:green;'>PASS</span><br>";
						}
						else
						{
						echo "Test case ".$key.": <span style='color:red;'>FAIL!</span><br>";
						}
					}
		
					if($key==(sizeof($ansfortcase)+10))
					break;
					
				}
				echo "Total Testcases Passed: ".$count."<br>";
				
				$con = mysql_connect("localhost","root","mano");
			        if (!$con)
			        {die('Could not connect: ' . mysql_error());
				}
				mysql_select_db("cfcf1", $con);
				$check = mysql_query("SELECT q1,q2,q3,q4,q5 FROM user WHERE username = '" . $_SESSION['username'] . "'");
				$info = mysql_fetch_array($check);
				if($info['q1']<$count)
				{mysql_query("UPDATE user SET q1='".$count."' WHERE username = '" . $_SESSION['username'] . "'");
				$check = mysql_query("SELECT q1,q2,q3,q4,q5 FROM user WHERE username = '" . $_SESSION['username'] . "'");
				$info = mysql_fetch_array($check);
				$sum = $info['q1'] + $info['q2'] + $info['q3'] + $info['q4'] + $info['q5'];
				mysql_query("UPDATE user SET point='".$sum."' WHERE username = '" . $_SESSION['username'] . "'");
				
				}
				
			}
			else
			{	foreach ($out as $key=>$value)
				{echo $value."<br>";
				}
			}

	
		}
		else
		{	echo "next!!!";
		}
	}
}
else
{	
	echo "Unknow Error!!!!";
}

}
else{echo "your session has expired";}
?>
<script>var outPut=innerHTML=document.getElementById("hidden").innerHTML;
	var currentCn=0;
		function outputText(string1)
		{
		if(document.getElementById("hidden")!=null)
		{
			var tText=document.getElementById("printOutput");
			currentCn=currentCn%string1.length;
			tText.innerHTML=string1.substring(0,currentCn)+"|";
			currentCn++;
			if(currentCn==string1.length)
			{clearInterval(outPutV);	
			}
		}
		}
	var outPutV=setInterval(function(){outputText(outPut)},20);
</script>
</div>
</body>
</html>
