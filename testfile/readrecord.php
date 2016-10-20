<?php
ignore_user_abort(true); // 后台运行
set_time_limit(0); // 取消脚本运行时间的超时上限

while(1){
	$file = fopen("record.txt", "r");
	$user=array();
	$i=0;
	//输出文本中所有的行，直到文件结束为止。
	while(! feof($file))
	{
		$user[$i]= fgets($file);//fgets()函数从文件指针中读取一行
		$i++;
	}
	fclose($file);
	$user=array_filter($user);
	print_r($user);
	sleep(15);
}
?>