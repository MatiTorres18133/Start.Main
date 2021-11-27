<?php 

session_start();


if(isset($_SESSION['usuario'])){
    header("location: Home.php");


}



?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Estilos -->
    <link rel="shortcut icon" href="img/START.MAIN (1).png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" type="text/css"" href="CSS/Login.css">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <meta name="viewport"  content="width=device-width, user-scalable=no ,initial-scale=1.0, maxium-scale=1.0">
   
    
    <title>Start.Main</title>
    
</head>

<body>

    <main class="Login">

    <center>
    <h3 class="hero_title2"><span class="typed"></span></h3>
    </center>
    <br>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tienes cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn_inciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Aun no tienes cuenta?</h3>
                    <p>Registrate para iniciar sesion</p>
                    <button id="btn_register">Registrarse</button>
                </div>

            </div>

            <div class="contenedor_login-register">

                <form action="php/Login_Usuario_be.php" method="POST" class="formulario_login">

                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="Correo">
                    <input type="password" placeholder="Contraseña" name="Contraseña">
                    <button >Entrar</button>


                </form>

                <form action="php/Register_usuario_be.php" method="POST" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="Nombre_Completo">
                    <input type="text" placeholder="Correo Electronico" name="Correo">
                    <input type="text" placeholder="Usuario" name="Usuario">
                    <input type="password" placeholder="Contraseña" name="Contraseña">
                    <button>Registrarse</button>
                </form>



            </div>



        </div>





    </main>


    



</body>

<br>





    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="JS/main.js"></script>
    <script src="JS/Script.js"></script>


<script src="JS/JS.js"></script>





<footer>

<p class="footer_copyright">
                 Sitio web creado por &copy; Matias Torres:

             </p>

    
</footer>

</body>











</html>