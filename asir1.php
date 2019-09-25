<?php
echo '<a>Sergio Samperio Manteca</a>';
echo "</br>";
echo "<a href='http://192.168.0.60/asir1_luis/asir1.php'>Luis Gomez</a>";
$file = fopen("visitas.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
echo fwrite($file,$ip);
fclose($file);
?>