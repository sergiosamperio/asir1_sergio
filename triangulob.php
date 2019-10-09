<?php
function angulo ($a, $b, $c) {
				$r="acutangulo";
						if ($a==90 or $b==90 or $c==90) 
								$r="rectangulo";
						if ($a>90 or $b>90 or $c>90)
								$r="obtusangulo";
						return $r;
}
echo angulo (120, 120, 90). "<br>";
echo angulo (50, 70, 50). "<br>";
echo angulo (90, 90, 90). "<br>";
?>

		