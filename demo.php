

<?php
header('Content-Type: text/html; charset=utf-8');
$latitude = $_GET['lat'];
$longitude = $_GET['long'];
$useragent = $_GET['uagent']

// 将经纬度信息写入文件
$file = fopen("demo.md", "w") or die("无法打开文件");
$content = "纬度: " . $latitude . ",\n 经度: " . $longitude . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser Agent:" . $useragent;
fwrite($file, $content);
fwrite($file, '****************************************\n');
fclose($file);
?>