<?
include 'AER.php';
?>
<!DOCTYPE html>
<html lang="en">
<body><div class="container pt-3">
<h3>Seleccione el producto
<table class="table table-striped">
<?
$sql="SELECT * FROM AER";
$consulta= mysqli_query($con, $sql) or die ("No tenemos productos");
while($reg=mysqli_fetch_array($consulta)){
$nombre=$reg['nombre'];
$codigo=$reg['codigo'];
echo '<tr>';
echo '<td> '.$nombre.'</td><td>'.$codigo.'</td><td>
</tr>'; }//
mysqli_close($con); ?>
