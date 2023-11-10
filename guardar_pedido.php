<?
$pedido = $_POST['pedido'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valor'];
$usuario=$_POST['usuario'];
if (isset($_POST['pedido'])) {
 include('config/conexion.php');
 for ($i = 0; $i < count($pedido); $i++) {
 if($cantidad[$i]==0){
 $cantidad[$i]=1;
 }//Fin si
// echo $id.' <br>Còdigo : '.$pedido[$i]. ' Cantidad : '.$cantidad[$i]. ' vlr_unit '.$valor[$i]. ' =
 //'.$cantidad[$i]*$valor[$i];
 $sql = "INSERT INTO tbldetalle_pedido(id_pedido,cons,id_producto,cantidad,valor,iva)
 values (1,NULL, $pedido[$i], $cantidad[$i], $valor[$i],0.0)";
 $consulta=mysqli_query($con,$sql)or die("Error".$sql);
 }// Fin para
 mysqli_close($con);
 } else {
 echo 'No ha seleccionado ningún Producto';
 }
include "detalle_pedido.php";
?>