<?php
function longitud ($d,$e,$f) {
	$r="escaleno";
	if ($d==$e || $e==$f)
		$r="isosceles";
	if ($e==$f and $d==$f)
		$r="equilatero";
	return $r;
}
function Angulo ($a,$b,$c) {
		$r="acutangulo";
			if ($a==90 or $b==90 or $c==90)
				$r="rectangulo";
			if ($a>90 or $b>90 or $c>90)
				$r="obtusangulo";
			return $r;
}
$a= [
	'lados'=>[1.2,1,1.09],
	'angulo'=>[90,45,45],
	];
$a= [
	'lados'=>[1.6,1.2,1],
	'angulo'=>[50,45,70],
	];
function C ($a){
	return longitud(
		$a['lados'][0],
		$a['lados'][1],
		$a['lados'][2]).' y '.Angulo(
		$a['angulo'][0],
		$a['angulo'][1],
		$a['angulo'][2]);
}
echo C($a);
?>
		