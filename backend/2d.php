 <?php
 function calcula($a, $b) {
	$r=null;
	$r=$r. 'Suma'.$a.'+'.$b.'=' . ($a+$b) . '</br>';
	$r=$r. 'Resta'.$a.'-'.$b.'=' . ($a-$b) . '</br>';
	$r=$r. 'Producto'.$a.'*'.$b.'=' . ($a*$b) . '</br>';
	if($b!=0) $r=$r. 'División'.$a.'/'.$b.'=' . ($a/$b) . '</br>';
	return $r;
}
$r=calcula(12,2);
echo $r;
echo calcula(24,0);


?>
