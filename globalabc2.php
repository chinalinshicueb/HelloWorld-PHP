<?php
	include 'globalabc.php';

	//globalabc("abc2", "bcd2");
	GlobalABC::$counter++;
	echo "globalabc2:".GlobalABC::$counter;
?>