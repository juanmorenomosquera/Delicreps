<?include "head.php";
include('config/conexion.php');
$sql="SELECT p.imagen, dp.id_pedido,dp.cons,dp.id_producto,dp.cantidad,dp.valor,dp.iva,p.nombre
FROM tbldetalle_pedido dp, tblproductos p
WHERE p.id=dp.id_producto";
$consulta= mysqli_query($con, $sql) or die ("No tenemos productos");
echo '<div class="container pt-3">';
echo '<a href="lista.php">Regresar</a>';
echo '<table class="table tablestriped"><tr><td>id</td><td></td><td>Cons</td><td>Descripción</td><td>Valor/Unit</td>
<td>Cantidad</td><td>total</td><td>iva</td></tr>';
while($reg=mysqli_fetch_array($consulta)){
$id_pedido=$reg['id_pedido'];
$cons=$reg['cons'];
$valor=$reg['valor'];
$cantidad=$reg['cantidad'];
$iva=$reg['iva'];
$nombre=$reg['nombre'];
$imagen=$reg['imagen'];
echo'<tr><td>'.$id_pedido.'</td>';
echo '<td><img src=img/'.$imagen. '></td>';
echo '<td> '.$cons.'</td> <td>'.$nombre.'</td>
<td>'.$valor.'</td><td> ' .$cantidad. '</td>
<td> $' .$cantidad*$valor. '</td> <td> $' .$iva. '</td></tr>';
}//
mysqli_close($con);
echo '</table></div>';
?>