<?php
function nota ($nota){
	if ($nota>5) {
	$r= 'apto';
	}
	else{
	$r= 'no apto';
	}
	return $r;
}
echo nota (4);
?>
		