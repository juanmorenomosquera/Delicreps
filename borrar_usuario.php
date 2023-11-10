<?
session_start();
include 'head.php';
$id=$_REQUEST['id'];
$id=trim($id);
?>
<div class="container">
    <div class="form-group">
    <?
    include 'conf/conexion.php';
    $sql='DELETE FROM tblusuarios WHERE id="'.$id.'"';
    $consulta=mysqli_query($con,$sql)
    or die("<div class='alert alert-success'>Error</div>");
    echo '<div class=" alert alert-success">Usuario Borrado</div>' ;
    header('location:lista_usuarios.php');
    ?>
</div>
</div>