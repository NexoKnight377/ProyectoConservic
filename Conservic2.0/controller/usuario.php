<?php 
    require_once('../config/conexion.php');
    require_once('../models/Usuario.php');
    $usuario = new Usuario();


    switch($_GET["op"]){

        case "guardar";
            $datos = $usuario->obtener_correo($_POST["txt_usuario_correo"]); //llamamos la funcion obtener correo y validamos si el correo del formulario existe
                if($_POST["usuario_pass"] == $_POST["usuario_pass_confirm"]){ //validamos que ambas contraseñas sean iguales
                    if(is_array($datos)== true and count($datos)==0){ //validamos que obtengamos un array de datos y si al validar el correo nos da 0 resultados (no existe un correo registrado asi) seguimos al condicional
                        $usuario->registrar_usuario($_POST["usuario_nom"],$_POST["usuario_ape"],$_POST["usuario_correo"],$_POST["usuario_usu"],$_POST["usuario_pass"]); //llamamos la funcion registrar usuario y le enviamos todos los POST, para registrar al usuario.
                    }
                }
            
        break;
    }