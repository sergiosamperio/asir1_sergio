<?php
function longitud ($a, $b, $c) {
				$r="triangulo escaleno";
						if ($a==$b || $b==$c) {
								$r="triangulo isosceles";
						if ($b==$c and $a==$c)
								$r="triangulo equilatero";
						}
						return $r;
}
echo longitud (4, 2, 4). "<br>";
echo longitud (3, 3, 3). "<br>";
echo longitud (2, 1, 1). "<br>";
?>

		