<?php
echo "<a href='http://192.168.0.91/asir1_javi/asir1.php'>Javi</a>";
echo "</br>";
echo '<a>Sergio Samperio Manteca</a>';
echo "</br>";
echo "<a href='http://192.168.0.60/asir1_luis/asir1.php'>Luis Gomez</a>";
$file = fopen("visitas.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
fwrite($file, date('Y-m-d H:i '));
echo fwrite($file,$ip);
fclose($file);
?>