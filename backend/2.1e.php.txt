<?php
for ($n=1;$n<11;$n++) {
		echo '<div 
		float:left;
		margin:10px;
		;
	">';
	for ($i=1;$i<=10;$i++) {
			echo $n;
			echo ' * ';
			echo $i;
			echo ' = ';
			echo ($n*$i);
			echo '<br>';
	}
	echo '</div>';
}
?>

