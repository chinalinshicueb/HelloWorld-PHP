<?php
//echo phpinfo();
//test mysqli
$con = mysqli_connect("localhost", "root", "", "test");
if($con){
	
	echo 'localhost\'s test is connected<br>';
	$result = mysqli_query($con, "select username, password, uuid from users");
	while($rows = mysqli_fetch_array($result)){
		print_r($rows);
		echo "<br>";
	}
	mysqli_close($con);
}else{
	echo 'localhost\'s test failed';
}
?>