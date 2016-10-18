<?php
date_default_timezone_set("PRC"); //地区：中国是PRC，或shanghai,chongqing都可
ignore_user_abort(true); // 后台运行
set_time_limit(0); // 取消脚本运行时间的超时上限
$filename="record.txt";
$con = mysqli_connect("localhost", "root", "", "test");
while(1){
	if($con){
		//echo 'localhost\'s test is connected<br>';
		$result = mysqli_query($con, "select username, password, uuid from users");
		while($rows = mysqli_fetch_array($result)){
			$word=$word."你好! ".date("Y-m-d H:i:s")." 秒数：".time()."  username=".$rows[username]."\r\n";	//清空写入
//			file_put_contents($filename, $word, FILE_APPEND); //追加写入
		}
		file_put_contents($filename, $word);
		$word="";
		sleep(5);
	}else{
//		echo 'localhost\'s test failed';
		break;
	}	
}
if($con)
	mysqli_close($con);

?>