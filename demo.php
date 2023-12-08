

<?php
header('Content-Type: text/html; charset=utf-8');
$latitude = $_GET['lat'];
$longitude = $_GET['long'];

// 将经纬度信息写入文件
$file = fopen("location.txt", "w") or die("无法打开文件");
$content = "纬度: " . $latitude . ", 经度: " . $longitude;
fwrite($file, $content);
fclose($file);
?>