<?php
	echo "<hr>file_get_contens method  <p>";
	$filename = "data/bigdata.txt";
	$datastring = file_get_contents($filename);
	if($datastring != null){
		echo "string size is ".strlen($datastring);
	}else{
		echo "read big data failed.";
	}
	
	echo "<hr>file method (read data to an array from a file)";
	$lines=file($filename);
	echo "<p>lines size is ".sizeof($lines);
?>