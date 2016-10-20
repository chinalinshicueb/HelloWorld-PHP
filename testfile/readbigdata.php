<?php
	$filename = "data/bigdata.txt";
	echo "File:".$filename."<br>";
	echo "<hr>file_get_contens method  <p>";
	$starttime = time();	
	$datastring = file_get_contents($filename);
	$endtime = time();	
	if($datastring != null){
		echo "读取文件内容到字符串中，字符串大小： ".strlen($datastring);
	}else{
		echo "read big data failed.";
	}
	echo "<p>Start @".$starttime."  and end @".$endtime." and spend ".($endtime - $starttime)." seconds";
	
	echo "<hr>file method (从文件中读取数据到数组中)";
	$starttime = time();
	$lines=file($filename);
	$endtime = time();
	echo "<p>lines size is ".sizeof($lines);
	echo "<p>Start @".$starttime."  and end @".$endtime." and spend ".($endtime - $starttime)." seconds";
	
?>