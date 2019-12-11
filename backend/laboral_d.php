<table>




<?php
$Festivos= [
	'2019-10-12',
	'2019-09-15',
	'2019-09-14',
	'2019-09-21',
	'2019-09-22',
	'2019-09-28',
	'2019-09-29',
	'2019-10-05',
	'2019-10-06',
	'2019-10-13',
	'2019-10-19',
	'2019-10-20',
	'2019-10-26',
	'2019-10-27',
	'2019-10-28',
	'2019-10-29',
	'2019-10-30',
	'2019-10-31',
	'2019-11-01',
	'2019-11-02',
	'2019-11-03',
	'2019-11-09',
	'2019-11-10',
	'2019-11-16',
	'2019-11-17',
	'2019-11-23',
	'2019-11-24',
	'2019-11-30',
	'2019-12-06',
	'2019-12-24',
	'2019-12-25',
	'2019-12-26',
	'2019-12-27',
	'2019-12-28',
	'2019-12-29',
	'2019-12-30',
	'2019-12-31',
	'2020-01-01',
	'2020-01-02',
	'2020-01-03',
	'2020-01-06',
	'2020-01-07',
	'2020-02-24',
	'2020-02-25',
	'2020-02-26',
	'2020-02-27',
	'2020-02-28',
	'2020-04-13',
	'2020-04-14',
	'2020-04-15',
	'2020-04-16',
	'2020-04-17',
	'2020-05-01',
	];
$r['dias']=[];
$r['LMS']=[];
$r['FH']=[];
for($i=1;$i<289;$i++){
	$d=date('Y-m-d',($i-1)*24*60*60+strtotime('2019-09-11'));
	//echo $d;
	//echo date('D',strtotime($d));
	//echo '<br>';
	if(
		!in_array($d,$Festivos)
		and
		date('D',strtotime($d))!='Sat'
		and
		date('D',strtotime($d))!='Sun'
	){
		$r['dias'][]=[
		'n'=>$i,
		's'=>round($i/7)+1,
		'fecha'=>date('Y-m-d',strtotime('2019-09-11')+($i-1)*24*60*60),
		'D'=>date('D',strtotime('2019-09-11')+($i-1)*24*60*60),
		];
		if(	// LMS: lunes y miércoles (2h)
			date('D',strtotime($d))=='Mon' or
			date('D',strtotime($d))=='Wed'
			) $r['LMS'][]=['fecha'=>date('Y-m-d',strtotime('2019-09-11')+($i-1)*24*60*60)];
		if(	// FH: lunes, martes y miércoles
			date('D',strtotime($d))=='Mon' or
			date('D',strtotime($d))=='Tue' or
			date('D',strtotime($d))=='Wed' 
			) $r['FH'][]=['fecha'=>date('Y-m-d',strtotime('2019-09-11')+($i-1)*24*60*60)];
		
	}
}
echo '<pre>';
echo 'La asignatura LMS tiene '.(count($r['LMS'])*2).' horas lectivas.<br/>';
echo 'La asignatura FH tiene '.count($r['FH']).' horas lectivas.<br/>';
echo '</pre>';
function tabla($r,$contenido){
	echo '<tr style="background-color:aquamarine;"><td>'.$contenido.'</td></tr>';
	foreach($r[$contenido] as $f){
		echo '<tr>';
		// fecha
		echo '<td>';
		echo $f['fecha'];
		echo '</td>';	
		if($contenido=='dias'){
			// día año
			echo '<td>';
			echo $f['n'];
			echo '</td>';	
			// día semana
			echo '<td>';
			echo $f['s'];
			echo '</td>';
			// día de la semana
			echo '<td>';
			echo $f['D'];
			echo '</td>';	
		}
		echo '</tr>';
	}
}
?>

</table>