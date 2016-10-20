<?php
include_once 'DES.php';
include_once 'TripleDES.php';

$des = new DES(); 

$rawData = "100,20170101";
$key = "peterren";
$encryptData = $des->encrypt($rawData, $key);
$decryptData = $des->decrypt($encryptData, $key);

echo "测试 DES加密解密<hr>";
echo "<p>原始 数据:".$rawData;
echo "<p>des->encrypt($rawData):".$encryptData;
echo "<p>des->decrypt($encryptData):".$decryptData;


$key="abcdefghij";
$iv ="0123456789";

$tripleDes = new TripleDES($key, $iv);
$encryptData = $tripleDes->encrypt($rawData);
$decryptData = $tripleDes->decrypt($encryptData);

echo "<hr><hr>测试3DES加密解密<hr>";
echo "<p>原始 数据:".$rawData;
echo "<p>tripleDes->encrypt($rawData):".$encryptData;
echo "<p>tripleDes->decrypt($encryptData):".$decryptData;
