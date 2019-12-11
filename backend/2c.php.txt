 <?php
 function calcula($a, $b) {
	$r=null;
	$r=$r. 'Suma'.$a.'+'.$b.'=' . ($a+$b) . '</br>';
	$r=$r. 'Resta'.$a.'-'.$b.'=' . ($a-$b) . '</br>';
	$r=$r. 'Producto'.$a.'*'.$b.'=' . ($a*$b) . '</br>';
	$r=$r. 'División'.$a.'/'.$b.'=' . ($a/$b) . '</br>';
	return $r;
}
$s=calcula(12,2);
echo $s;
echo calcula(24,4);
?>
