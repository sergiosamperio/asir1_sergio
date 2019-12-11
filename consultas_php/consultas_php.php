
<?php // Vamos a realizar las consultas del entrenador en php
$conn = new mysqli('localhost','root','','provincias');
$conn->query("SET NAMES utf8;");
$provincias=$conn->query("
	SELECT * FROM provincias;
")->fetch_all(MYSQLI_ASSOC);
if(0){
	echo '<pre>';
	print_r($provincias);
	echo '</pre>';
}
if(0){ // provincias de Galicia
	foreach($provincias as $p){
		if($p['autonomia']=='Galicia'){
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}
if(0){ // provincias que empiezan por A
	foreach($provincias as $p){
		if($p['provincia'][0]=='A') {
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}
if(0){ // densidades de población de las provincias
	foreach($provincias as $p){
		echo $p['provincia'].' ';
		echo round($p['poblacion']/$p['superficie'],4).'<br/>';		
	}

if(0){ // listado de autonomias