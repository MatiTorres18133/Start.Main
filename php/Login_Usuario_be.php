<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST ['Correo'];
    $contraseña = $_POST['Contraseña'];
    $contraseña = hash('sha512', $contraseña);


    $Validar_Login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND
    Contraseña = '$contraseña'");

    if (mysqli_num_rows($Validar_Login) > 0){

        $_SESSION['usuario'] = $correo;

        header("location: ../Home.php");

        exit;



    }else{
        echo '

        <script>

        alert("El usuario no existe");
        window.location = "../index.php"
        
        </script>
        
        ';
    }

    exit;

?>

