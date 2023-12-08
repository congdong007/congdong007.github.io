<?php
header('Content-Type: text/html; charset=utf-8');
echo "demo.php running..."
$myfile = fopen("demo.txt", "a") or die("Unable to open file!");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"];
fwrite($myfile, $txt);
$txt = "***********************************\n";
fwrite($myfile, $txt);
fclose($myfile);
?>