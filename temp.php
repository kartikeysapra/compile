<html>
<head>
<?PHP
if(isset($_POST['submit']))
{
if ((($_FILES["file"]["type"] == "text/x-c++src")|| ($_FILES["file"]["type"] == "text/x-csrc") || ($_FILES["file"]["type"] == "application/octet-stream")&& ($_FILES["file"]["size"] < $filesize)))
{	
	if ($_FILES["file"]["error"] > 0)
    	{	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    	}
  	else
    	{
    		$cppFileName='q1.cpp';

    		exec('mv '.$_FILES["file"]["tmp_name"].' '.$cppFileName);
		echo exec('mv'.$cppFileName.' '.'/7mNeDaDz');
		$sForFork=strlen(exec('grep fork '.$cppFileName))."<br>";
		$sForSystem=strlen(exec('grep system '.$cppFileName));
		if($sForFork==0 && $sForSystem==0)
		{
echo "hi";
			$outFile='q1';
			$error=exec('g++ '.$cppFileName.' -o'.$outFile.' 2>&1',$out,$ret)."<br>";
//			$out=str_replace($cppFileName,$_FILES["file"]["name"],$out);
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
			}
			else echo "error";
		}
	}
}
}
?>
</head>
<body>
		        <form name="f1" method="post" enctype="multipart/form-data">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file" />
			<input type="submit" name="submit" value="Submit"/>
			</form>
</body>
</html>
