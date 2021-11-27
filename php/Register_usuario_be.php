<?php

    include 'conexion_be.php';

    $Nombre_Completo = $_POST['Nombre_Completo'];
    $correo = $_POST ['Correo'];
    $usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];

    //Encriptamiento//
    $contraseña = hash('sha512', $contraseña);

    $query= "INSERT INTO usuarios(nombre_completo, correo , usuario , contraseña) 
            VALUES('$Nombre_Completo' , '$correo' , '$usuario' ,'$contraseña')";


    //Verficar que el correo no se repita//
    

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'  ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script> 
            alert("Este correo ya esta registrado, Intenta con otro");
            window.location = "../index.php";
        </script>
        ';

        exit ();
        

    }
    //Verficar que el usuario no se repita//

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'  ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script> 
            alert("Este Usuario ya existe, Intenta con otro");
            window.location = "../index.php";
        </script>
        ';

        exit ();
        

    }

    




    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
         <script> 

         alert("Usted se registro exitosamente")
         window.location = "../index.php"
         
         </script>
        ';
    }else{
        echo '
        <script> 

        alert("Usuario No registrado")
        window.location = "../index.php"
        
        </script>
       ';

    }

    mysqli_close($conexion);
6  
?>