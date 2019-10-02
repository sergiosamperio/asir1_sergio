<?php
$a= [
		'ene',
		'feb',
		'mar',
		'abr',
		'may',
		'jun',
		'jul',
		'ago',
		'sep',
		'oct',
		'nov',
		'dic',
	];
for ($i=0; $i<12; $i++)
		echo $a [$i]. '<br>';
foreach ($a as $mes)
	echo $mes. '<br>';
	
function mes ($i) {
		$a= [
			'ene',
			'feb',
			'mar',
			'abr',
			'may',
			'jun',
			'jul',
			'ago',
			'sep',
			'oct',
			'nov',
			'dic',
		];
		return $a [$i-1];
}
echo mes (1);

