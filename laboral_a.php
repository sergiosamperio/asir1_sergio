<table>
<tr>
	<td>n</td>
	<td>s</td>
	<td>fecha</td>
	<td>D</td>
</tr>



<?php
$r=[];
for($i=1;$i<366;$i++){
	$r[]=[
	'n'=>$i,
	's'=>round($i/7)+1,
	'fecha'=>date('Y-m-d',strtotime('2019-01-01')+($i-1)*24*60*60),
	'D'=>date('D',strtotime('2019-01-01')+($i-1)*24*60*60),
	];
}
/*
echo '<pre>';
print_r($r);
echo '</pre>';
*/
foreach($r as $f){
	echo '<tr>';
	// día año
	echo '<td>';
	echo $f['n'];
	echo '</td>';	
	// día semana
	echo '<td>';
	echo $f['s'];
	echo '</td>';
	// fecha
	echo '<td>';
	echo $f['fecha'];
	echo '</td>';	
	// día de la semana
	echo '<td>';
	echo $f['D'];
	echo '</td>';	
	
	echo '</tr>';
}
?>

</table>