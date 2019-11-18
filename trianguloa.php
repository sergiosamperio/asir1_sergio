<?php
function longitud ($a, $b, $c) {
	$r="triangulo escaleno";
		if ($a==$b || $a==$c ||$b==$c){
	$r="triangulo isosceles";
		if ($b==$c and $a==$c)
	$r="triangulo equilatero";
}
return $r;
}
echo "El triángulo es isosceles"."<br>";
echo longitud (4, 2, 4). "<br>";

echo "El triángulo es equilatero"."<br>";
echo longitud (3, 3, 3). "<br>";

echo "El triángulo es isosceles"."<br>";
echo longitud (2, 2, 1). "<br>";

echo "El triángulo es isosceles"."<br>";
echo longitud (2, 3, 2). "<br>";

echo "El triángulo es escaleno"."<br>";
echo longitud (3, 4, 5). "<br>";

echo "El triángulo es equilatero"."<br>";
echo longitud (4, 4, 4). "<br>";

echo "El triángulo es isosceles"."<br>";
echo longitud (3, 1, 1). "<br>";

echo "El triángulo es escaleno"."<br>";
echo longitud (6, 5, 4). "<br>";
?>

		