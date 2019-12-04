<?php
function angulo ($a, $b, $c) {
	$r="acutangulo";
	if ($a==90 or $b==90 or $c==90) 
	$r="rectangulo";
	if ($a>90 or $b>90 or $c>90)
	$r="obtusangulo";
	return $r;
}
function longitud ($d, $e, $f) {
	$r="escaleno";
	if ($d==$e || $e==$f) {
	$r="isosceles";
	if ($e==$f and $d==$f)
	$r="equilatero";
	}
	return $r;
}
function triangulo($a, $b, $c, $d, $e, $f) {
	return angulo ($a, $b, $c).' y '.longitud ($d, $e, $f);
}
echo triangulo(100, 70, 50, 2, 4, 5). "<br>";
echo triangulo(80, 30, 70, 3, 4, 4). "<br>";
echo triangulo(90, 90, 90, 5, 5, 5). "<br>";
?>

		