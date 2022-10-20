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
        <title>Crear-Usuario</title>
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
                <h1 class="head">ALTA DE USUARIOS</h1>
            </div>
        </section>
        
        <section>
            <div class="container-form">
                <div class="cont-form">
                    <h2>Crear Usuarios</h2>
                    <form action="" method="POST">
                        <input name="email" type="text" placeholder="Ingrese un Usuario">
                        <input name="password" type="password" placeholder="Ingrese una Contraseña">
                        <input name="confirm_password" type="password" placeholder="Confirme su Contraseña">
                        <select name="acceso" type="acceso">
                            <option value="1"> Cecyte Cancún I </option>
                            <option value="2"> Cecyte Cancún II </option>
                            <option value="3"> Cecyte Cancún III </option>
                            <option value="4"> Cecyte Cancún IV </option>
                            <option value="8"> Conalep Cancún I  </option>
                            <option value="11"> Conalep Cancún II </option>
                            <option value="12"> Conalep Cancún III </option>
                            <option value="14"> Conalep Cancún IV </option>
                            <option value="100"> Bachilleres Cancún I </option>
                            <option value="101"> Bachilleres Cancún II </option>
                            <option value="102"> Bachilleres Cancún III Bonfil </option>
                            <option value="103"> Bachilleres Cancún IV </option>
                            <option value="104"> CBTIS N°111 </option>
                            <option value="105"> CBTIS N°272 </option>
                        </select>
                        <input class="boton" type="submit" value="Crear">
                    </form> 
                </div>
            </div>
  
        <footer>
            <div class="derechos">
                <p>Todos los derechos reservados &copy; 2022 Secretaria de Educación de Quintana Roo y Universidad Autonoma del Estado de Quintana Roo</p>
            </div>  
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="../js/menu_responsive.js"></script>
        <script src="../js/header.js"></script>       
    </body>
<html>