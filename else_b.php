<?php
function nota ($nota){
	$r= 'pendiente';
	if ($nota>=5) {
	$r= 'aprobado';
	}
	if ($nota>=7) {
	$r= 'notable';
	}
	if ($nota>=10) {
	$r= 'sobresaliente';
	}

	return $r;
}
echo '4'.'='.nota (4).'<br>';
echo '5'.'='.nota (5).'<br>';
echo '7'.'='.nota (7).'<br>';
echo '10'.'='.nota (10).'<br>';

?>
		