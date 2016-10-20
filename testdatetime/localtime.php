<?php
//获取服务器时间	
//	echo date("Y-m-d h:i:s");
//获取本地时间（也可以说是你所在时区时间）
	date_default_timezone_set("PRC"); //地区：中国是PRC，或shanghai,chongqing都可
	echo "服务器（北京时间）：".date("Y-m-d H:i:s");
?>