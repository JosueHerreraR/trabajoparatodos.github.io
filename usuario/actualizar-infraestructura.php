<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="autor" content="Abdiel Cen, Luis Chuc, Joel Herrera, Jose Poot y Wilfrido Puc"/>
        <meta name="copyright" content=""/> 
        <meta name="description" content="Sistema de Control Escolar de Educacion Media Superior">
        <link rel="icon" type="image/jpg" href="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar-Infraestructura</title>
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
                <h1 class="head">ACTUALIZAR INFRAESTRUCTURA</h1>
            </div>
        </section>

        <section>
            
            <div class="container-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th> NO </th>
                            <th> ELEMENTOS </th>
                            <th> CANTIDAD </th>
                       </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> ADMINISTRACION </td>
                            <td> <input type="text" value="Ingrese los datos"></td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> DIRECCION </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td> PREFECTURA</td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 4</td>
                            <td> AULAS </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td> AULAS ARTISTICAS </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td> SILLAS POR AULA </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td> CAPACIDAD DE ALUMNOS EN TURNO MATUTINO  </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td> CAPACIDAD DE ALUMNOS EN TURNO VESPERTINO </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td> BIBLIOTECAS </td>
                            <td> <input type=" text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td> LABORATORIOS </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                         <tr>
                            <td> 11 </td>
                            <td> SALA DE MAESTROS </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 12 </td>
                            <td> COOPERATIVA </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 13 </td>
                            <td> ESTACIONAMIENTO </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 14 </td>
                            <td> RAMPAS PARA DISCAPACIDAD </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 15 </td>
                            <td> SILLAS </td>
                            <td> <input type="text" value="Ingrese los datos"> </td>
                        </tr>
                        <tr>
                            <td> 16 </td>
                            <td> PROYECCION DE CRECIMIENTO </td>
                            <td> <input type="text" value="('Si cuenta con terreno adicional')"> </td>
                        </tr>
                    </tbody>
                </table>

            </div>

           <div class="container-form">
                <div class="cont-form">
                    <input class="boton" type="submit" value="Actualizar">
                </div>
            </div>

        </section>  

        <footer>
            <div class="derechos">
                <p>Todos los derechos reservados &copy; 2022 Secretaria de Educación de Quintana Roo y Universidad Autonoma del Estado de Quintana Roo</p>
            </div>  
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
    </body>
</html>