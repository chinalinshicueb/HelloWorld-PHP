<?php
	$rawData = "我的数据abc123";
	
	echo "<p>md5($rawData):".md5($rawData);
	echo "<p>md5($rawData, true):".md5($rawData, true);
	
	echo "<p>sha1($rawData):".sha1($rawData);
	echo "<p>sha1($rawData, true):".sha1($rawData, true);
	