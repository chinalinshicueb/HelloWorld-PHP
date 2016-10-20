<?php
	$rawData = "我的数据abc123";
	$rawDataFilename = "../testfile/data/10M.log";
	
	echo "<p>md5($rawData):".md5($rawData);
	echo "<p>md5($rawData, true):".md5($rawData, true);
	
	
	echo "<p>sha1($rawData):".sha1($rawData);
	echo "<p>sha1($rawData, true):".sha1($rawData, true);
	
	
	echo "<p>md5_file($rawDataFilename):".md5_file($rawDataFilename);
	echo "<p>md5_file($rawDataFilename, true):".md5_file($rawDataFilename, true);
	
	
	echo "<p>sha1_file($rawDataFilename):".sha1_file($rawDataFilename);
	echo "<p>sha1_file($rawDataFilename, true):".sha1_file($rawDataFilename, true);
	