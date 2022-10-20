<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Abdiel Cen, Luis Chuc, Joel Herrera, Jose Poot y Wilfrido Puc"/>
        <meta name="copyright" content=""/> 
        <meta name="description" content="Sistema de Control Escolar de Educacion Media Superior">
        <title>Administrar-Usuario</title>
        <link rel="icon" type="" href="">
        <link rel="shortcut icon" href="../img/icono_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/form.css">
    </head>    
    <body>   
        <header>
            <div class="img-logo">
                <img src="../img/QROO.webp" alt="">
                <img src="../img/seq-logo.png" alt="">
            </div>

            <div class="user">
                <button class="datos">
                    <?php
                        echo $_SESSION["usuario"];
                    ?>
                </button>
                <nav class="opciones">
                    <li><a href="../controlador/controlador_cerrar_session.php">Cerrar Sesión</a></li>
                </nav>
            </div>
        </header>
        
        <section class="hero" id="hero">
            <div class="container">
                <h1 class="head">ADMINISTRACIÓN DE USUARIOS</h1>
            </div>
        </section>

        <section class="content casillas">
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-users-cog"></i>
                    <h3>Administrador</h3>
                    <form action="actualizar-administrador.php" method="POST">
                        <button class="btn"><i class="far fa-hand-point-up"></i></button>
                    </form>
                </div>
                <div class="box">
                    <i class="fas fa-envelope-open"></i>
                    <h3>Nuevo Usuario</h3>
                    <form action="crear-usuario.php" method="POST"> 
                        <button class="btn" ><i class="far fa-hand-point-up"></i></button>
                    </form>
                </div>
            </div>
        </section>

        <section>

            <!-- <div class="container-form">
                <div class="cont-form">
                    <div>
                        <form action="actualizar-administrador.php" method="POST">
                            <h2>Administrador</h2>
                            <input class="boton" type="submit" value="Actualizar Contraseña">
                        </form>
                        <form action="crear-usuario.php" method="POST">
                            <h2>Nuevo Usuario</h2>
                            <input class="boton" type="submit" value="Crear Usuario">
                        </form>

                    </div>
                </div>
            </div> -->

            <div class="container-form">
                <div class="cont-form">
                    <h2>Panel de busqueda</h2>
                    <form class="example" target="iframe_box" method="post" action="buscar-usuario.php">
                        <h2>BUSCAR USUARIO: </h2>		      
                        <div >
                            <input type="text" placeholder="Buscar..." name="">
                            <button type="submit"><i class="fa fa-search"></i>🔎</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- hace que aparesca los resultados de la busqueda -->
            <div> <iframe  name="iframe_box" id="iframe_box" class="iframe" scrolling="no" frameborder="0"  width="100%" height="700px"></iframe></div>
            
        </section>
          
        <footer>
            <div class="derechos">
                <p>Todos los derechos reservados &copy; 2022 Secretaria de Educación de Quintana Roo y Universidad Autonoma del Estado de Quintana Roo</p>
            </div>  
        </footer>

        <script> 
            var div = document.getElementById("iframe_box"); 
            div.onload = function() 
            {           
            div.style.height = div.contentWindow.document.body.scrollHeight + 'px'; 
            div.style.width =  div.contentWindow.document.body.scrollWidth+'px';
            } 
    	</script> 
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="../js/menu_responsive.js"></script>
        <script src="../js/header.js"></script>      
    </body>
<html>