<?php
	include_once 'json_classperson.php';
	$aClass = new AClass();
	
	$person1 = new Person();
	$person2 = new Person();
	$person3 = new Person();
	
	$person1->age=18;
	$person1->name="张三";
	$person1->address[] = "111";
	$person1->address[] = "112";
	$person2->age=19;
	$person2->name="李四";
	$person2->address[] = "211";
	$person2->address[] = "212";
	$person3->age=20;
	$person3->name="王五";
	$person3->address[] = "311";
	$person3->address[] = "312";
	
	$aClass->students[0] = $person1;
	$aClass->students[1] = $person2;
	$aClass->students[2] = $person3;
	
	$jsonString = json_encode($aClass->students);
	echo $jsonString;
	file_put_contents($classfilename, $jsonString);
	echo 'write ok.'
?>
	