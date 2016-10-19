<?php
	echo "<hr>file_get_contens method  <p>";
	$filename = "data/bigdata.txt";
	$datastring = file_get_contents($filename);
	if($datastring != null){
		echo "读取文件内容到字符串中，字符串大小： ".strlen($datastring);
	}else{
		echo "read big data failed.";
	}
	
	echo "<hr>file method (从文件中读取数据到数组中)";
	$lines=file($filename);
	echo "<p>lines size is ".sizeof($lines);
?>