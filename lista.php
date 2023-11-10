<?
session_start();
include 'config/conexion.php';
?>
<!DOCTYPE html>
<html lang="en" >
<?include 'head.php'?>
<body><div class="container pt-3">
<h3>Seleccione el producto
<? echo $_SESSION['usuario_valido'];
$id=$_GET['id'];
$id =base64_decode($id);?></h3>
<form action="guardar_pedido.php" method="post">
<table class="table table-striped">
<?
$sql="SELECT * FROM tblproductos";
$consulta= mysqli_query($con, $sql) or die ("No tenemos productos");
while($reg=mysqli_fetch_array($consulta)){
$nombre=$reg['nombre'];
$descripcion=$reg['descripcion'];
$valor=$reg['valor'];
$id=$reg['id'];
$imagen=$reg['imagen'];
echo '<tr><td><img src=img/'.$imagen. '></td>';
echo'<td>'.$id.'</td>';
echo '<td> '.$nombre.'</td><td>'.$descripcion.'</td><td> $' .$valor. '</td>
 <td><a href="pedido.php?id='.base64_encode($reg['id']).'">
<img src="img/mango.php"></a></td>
<td> <input type="checkbox" name="pedido[]" value="'.$reg['id'].'" class="form-check-input"></td>
<td> <input type="text" name="valor[]" value="'.$reg['valor'].'" class="form-control mb-2 mr-sm-2"
readonly></td>
<td> <input type="numeric" name="cantidad[]" class="form-control mb-2 mr-sm-2"
placeholder="Cantidad"></td></tr>'; }//
mysqli_close($con); ?>
<tr colspan="8"><td><button input type="submit" class="btn btn-success">Enviar</button></td></tr>
</table></form></div></body></html>