<?php

    class Usuario extends Conectar{

            public function login(){
                $conectar=parent::Conexion();
                parent::set_names();
                if(isset($_POST["enviar"])){

                    $password = $_POST["password"];
                    $usuario = $_POST["username"];
                    
                    if(empty($usuario) and empty($password)){
                        header("Location:".Conectar::ruta()."/index.php?m=2");
                        exit();
                    }
                    else{
                        $sql = "SELECT * FROM usuarios where usuario_usu=? and usuario_pass=? and usuario_estado=1";
                        $sql = $conectar->prepare($sql);
                        $sql->bindValue(1, $usuario);
                        $sql->bindValue(2, $password);
                        $sql->execute();
                        $resultado = $sql->fetch();
                            if(is_array($resultado) and count($resultado)>0){
                                $_SESSION["usuario_id"] = $resultado["usuario_id"];
                                $_SESSION["usuario_nom"] = $resultado["usuario_nom"];
                                $_SESSION["usuario_ape"] = $resultado["usuario_ape"];
                                $_SESSION["usuario_usu"] = $resultado["usuario_usu"];
                                $_SESSION["usuario_pass"] = $resultado["usuario_pass"];
                                $_SESSION["usuario_rol"] = $resultado["usuario_rol"];
                                header("Location:".Conectar::ruta()."/view/Home/");
                                exit();
                            }else {
                                header("Location:".Conectar::ruta()."/index.php?m=1");
                                exit();
                            }
                    }
                }
            }

            /* TODO: FUNCION CREAR USUARIO */
            public function registrar_usuario($usuario_nom,$usuario_ape,$usuario_correo,$usuario_usu,$usuario_pass){
                $conectar=parent::conexion();
                parent::set_names();
                $sql="INSERT INTO usuarios VALUES(null,?,?,?,?,?,null,null,null,1";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1,$usuario_nom);
                $sql->bindValue(2,$usuario_ape);
                $sql->bindValue(3,$usuario_correo);
                $sql->bindValue(4,$usuario_usu);
                $sql->bindValue(5,$usuario_pass);
                $sql->execute();
            }
            
            /* TODO: FUNCION VALIDAR EXISTENCIA DEL CORREO */
            public function obtener_correo($usuario_correo){
                $conectar=parent::conexion();
                parent::set_names();
                $sql="SELECT * FROM usuarios WHERE usuario_correo=? AND usuario_estado=1 ";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1,$usuario_correo);
                $sql->execute();
                return $resultado=$sql->fetchAll();
            }

            /* TODO: FUNCION VALIDAR EXISTENCIA DEL USUARIO */
            public function obtener_usuario($usuario_usu){
                $conectar=parent::conexion();
                parent::set_names();
                $sql="SELECT * FROM usuarios WHERE usuario_usu=?  AND usuario_estado=1";
                $sql=$conectar->prepare($sql);
                $sql->bindValue(1,$usuario_usu);
                $sql->execute();
                return $resultado=$sql->fetchAll();
            }
            

    }