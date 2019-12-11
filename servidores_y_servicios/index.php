<?php
if(isset($_POST['submit']))
{$name = $_POST['name'];
 
echo "Registo completado : <b> $name </b><br><br>";
  $archivo="suscriptores.txt";
  $proceso=fopen($archivo,"a") or die("basura");
  $datos="Registro suscriptor:".$name."\r\n";
  fwrite($proceso,$datos);
  fclose($proceso);
 
}
?>

<h1>Formulario Suscriptores de Sergio</h1>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <br> Email: 
<input type="text" name="name"><br><br>
 
<input type="submit" name="submit" value="Submit Form"><br>
 
</form>