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
        <title>Información</title>
        <link rel="shortcut icon" href="../img/icono_paems.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/form.css">
    </head>    
    <body>   
        <div class="container-principal">
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
                    <h1 class="head">INFORMACIÓN GENERACIONAL</h1>
                </div>
            </section>
            
            <section>
            
                <div class="container-table">
                    
                    <table class="table"> 
                        <caption>Generacion 2022-2023</caption>
                        <thead>
                            <tr>
                            <th>N° semestre</th>
                            <th>Registros</th>
                            <th>Actualizaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Semestre 1</td>
                                <td><a href="registrar-semestre.php"><button class="boton">Registrar</button></a></td>
                                <td><a href="actualizar-semestre.php"><button class="boton">Actualizar</button></a></td>
                            </tr>
                            <tr>
                                <td>semestre 2</td>
                                <td><a href="registrar-semestre.php"><button class="boton">Registrar</button></a></td>
                                <td><a href="actualizar-semestre.php"><button class="boton">Actualizar</button></a></td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>  

            </section>
    
            <footer>
                <div class="derechos">
                    <p>Todos los derechos reservados &copy; 2022 Secretaria de Educación de Quintana Roo y Universidad Autonoma del Estado de Quintana Roo</p>
                </div>  
            </footer>
        </div>
        

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
    </body>
<html>