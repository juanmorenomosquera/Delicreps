<?include 'head.php';
$idusuario=$_REQUEST['id'];
$correo="";
$usuario="";
$perfil=0;
$nperfil="";

    include 'config/conexion.php';
    $instruccion = "SELECT id,usuario,correo,perfil FROM tblusuarios WHERE id='$idusuario'";
    $consulta = mysqli_query ($con,$instruccion) or die ("Fallo en la consulta usuario");
    while($reg=mysqli_fetch_array($consulta)){
        $usuario=$reg['usuario'];
        $correo=$reg['correo'];
        $perfil=$reg['perfil'];
    
    }
    mysqli_close($con);
    if($perfil==0){
        $nperfil="Bloqueado";
    }
    if($perfil==1){
    $nperfil="Admin";
    }
    if($perfil==2){
        $nperfil="Cajero";
      }
    if($perfil==3){
    $nperfil="Cliente";
     }
    if($perfil==4){
    $nperfil="Domiciliario";
     }
     if($perfil==5){
        $nperfil="Gerentes";
        }
?>
<div class="page_section" id="editar_usuario">
<div class="container">
<a href="lista_usuario.php"><img src="img/casa.png" ></a>
    <form method="post" action="salvar_usuario.php">
        <div class="form-group">
    <Label for="id">ID</Label>  
 <input type="text" 
         name="id"
        value=<?echo  $idusuario?>
        class="form-control"
        readonly>
 </div>
 <div class="form-group">
 <Label for="usuario">Usuario</Label>  
 <input type="text" 
         name="usuario"
        value=<?echo  $usuario?> 
        class="form-control"
        readonly>
 </div>
 <div class="form-group">
 <Label for="correo">Correo </Label>  
 <input type="text" 
         name="correo"
        value=<?echo  $correo?> 
        class="form-control"
        readonly>
 </div>
 <div class="form-group">
 <Label for="perfil">Perfil</Label>  
 <select name="perfil" class="form-contrl">
 <option value=<?echo $perfil?> selected>    <?echo $nperfil?> </option>
 <option value="0">Bloqueado</option>
 <option value="1">Admin</option>
 <option value="2">Cagero</option>
 <option value="3">Cliente</option>
 <option value="4">Domicilario</option>
 <option value="5">Gerente</option>
 </select> 
</div>
<br>
<div class="form-gropup">
<button type="submit" class="btn btn-danger">save</button>

</div>
</form>
</div>
</div>