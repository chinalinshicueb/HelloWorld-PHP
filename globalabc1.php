<?php
	include 'globalabc.php';

	//globalabc("abc1", "bcd1");
	GlobalABC::addOne();
	GlobalABC::addOne();
	echo "globalabc1:".GlobalABC::$counter;
?>