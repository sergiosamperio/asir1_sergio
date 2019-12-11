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



function triangulos($l){
	list($a,$b,$c)=$l;
	

$x=($a**2-$b**2+$c**2)/(2*$c);
$h=sqrt($a**2-$x**2);
$A=atan($h/($c-$x))*360/(2*pi());
$B=atan($h/($c-$x))*360/(2*pi());
$C=180-$A-$B;


$r=[
	'angulos'=>[$A,$B,$C],
	'tipo_lados'=>longitud($a,$b,$c),
	'tipo_angulos'=>angulo($a,$b,$c),
	];
	
	return $r;
}

$r=triangulos([1,1,sqrt(2)]);
	echo '<pre>';
	print_r($r);
	echo '<pre>';