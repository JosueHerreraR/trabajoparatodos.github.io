<?php
  $usuario=$_POST['usuario'];
  $contraseña=$_POST['contraseña'];
  session_start();
  $_SESSION['usuario']=$usuario;

  $conexion=mysqli_connect("localhost","root","","login");

  $consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
  $resultado=mysqli_query($conexion,$consulta);

  $filas=mysqli_fetch_array($resultado);

  if($filas['rol_id'] == 1){ //administrador
    header("location: ../administrador/administrador.php");

  }else
  if($filas['rol_id'] == 2){ //cliente
    header("location: ../usuario/usuario.php");
  }
  else{
      ?>
      <?php
      include("index.php");
      ?>
      <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
      <?php
  }
mysqli_free_result($resultado);
mysqli_close($conexion);

?>