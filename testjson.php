<?php
$filename = "recommendMenu.json";
$json_string = file_get_contents($filename);
echo "read data from file<p>";
echo print_r($json_string,true);            //打印文件的内容
echo "<hr>";

$json2_string='{
  "tsnpm":{
    "name":"#特色牛排面#",
	"score":"(4.7分)",
	"price":"￥9.0",
	"description":"较劲十足，微辣畅爽。"
  },
  "mnnrm":{
    "name":"#:闽南牛肉面#",
	"score":"(4.8分)",
	"price":"￥8.5",
	"description":"爽滑可口，回味无穷。"
  },
  "hxncm":{
    "name":"#红烧牛杂面#",
	"score":"(4.8分)",
	"price":"￥8.0",
	"description":"清香诱人，五味杂成！"
  },
  "gwcsgjf":{
    "name":"#广味叉烧盖浇饭#",
	"score":"(4.7分)",
	"price":"￥8.5",
	"description":"滋补，养胃、美味、有劲"
  },
   "xhscd":{
    "name":"#西红柿炒蛋#",
	"score":"(4.8分)",
	"price":"￥2.0",
	"description":"口味怡人，物美价廉！"
  }
}';
echo "<hr>decode(json2_string)<p>";
$obj=json_decode($json2_string,true);
if (!is_array($obj)) die('no successful');
print_r($obj);
echo '<br>'.$obj['tsnpm']['name'];

echo "<hr>decode(json_file)<p>";
$obj=json_decode($json_string,true);
if (!is_array($obj)) die(' no successful');
print_r($obj);
echo '<br>'.$obj['tsnpm']['name'];

?>