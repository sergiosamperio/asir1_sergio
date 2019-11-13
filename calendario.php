<?php
function mes($n){
	$a=[
	[
		'mes'=>'enero',
		'dias'=>'31',
		'estacion'=>'invierno'
	],
	[
		'mes'=>'febrero',
		'dias'=>'28/29',
		'estacion'=>'invierno'
	],
	[
		'mes'=>'marzo',
		'dias'=>'31',
		'estacion'=>'primavera'
	],
	[
		'mes'=>'abril',
		'dias'=>'30',
		'estacion'=>'primavera'
	],
	[
		'mes'=>'mayo',
		'dias'=>'31',
		'estacion'=>'primavera'
	],
	[
		'mes'=>'junio',
		'dias'=>'30',
		'estacion'=>'verano'
	],
	[
		'mes'=>'julio',
		'dias'=>'31',
		'estacion'=>'verano'
	],
	[
		'mes'=>'agosto',
		'dias'=>'31',
		'estacion'=>'verano'
	],
	[
		'mes'=>'septiembre',
		'dias'=>'30',
		'estacion'=>'otoño'
	],
	[
		'mes'=>'octubre',
		'dias'=>'31',
		'estacion'=>'otoño'
	],
	[
		'mes'=>'noviembre',
		'dias'=>'30',
		'estacion'=>'otoño'
	],
	[
		'mes'=>'diciembre',
		'dias'=>'31',
		'estacion'=>'invierno'
	],
		
	];
	$r=null;
	$r=$r.'El mes del año es'.' '.$a[$n-1]['mes'];
	$r=$r.', este mes tiene'.' '.$a[$n-1]['dias'].' dias';
	$r=$r.' y la estación del año es'.' '.$a[$n-1]['estacion'].'<br>';
	return $r;
}
echo mes(2).'<br>';
echo mes(6).'<br>';
echo mes(8).'<br>';
echo mes(9).'<br>';
?>
		