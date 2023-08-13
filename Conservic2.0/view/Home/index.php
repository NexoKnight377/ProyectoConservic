<?php 
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usuario_id"])){
?>
<!doctype html>
<html lang="es" class="no-focus"> <!--<![endif]-->
    <head>
        <!-- TODO: META -->
        <?php require_once("../MainHead/mainhead.php"); ?>
        <title>Home | Conservic</title>
    </head>
    <body>
        <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
            <nav id="sidebar">
                <div id="sidebar-scroll">
                    <div class="sidebar-content">
                        <!-- TODO: SIDEBAR -->
                        <?php require_once("../MainSidebar/mainsidebar.php"); ?>
                        
                        <!--TODO: MENU DE NAVEGAVION -->
                        <?php require_once("../MainMenu/mainmenu.php"); ?>
                    </div>
                    
                </div>
            </nav>
            <!--TODO: HEADER -->
            <?php require_once("../MainHeader/mainheader.php"); ?>
            
            <!--TODO: MAIN CONTAINER -->
            <main id="main-container">
                <div class="content">
                    <h2 class="content-heading">Blank <small>Get Started</small></h2>
                    <p>Create your own awesome project!</p>
                </div>
            </main>
            
            <!-- TODO: FOOTER -->
            <?php require_once("../MainFooter/mainfooter.php"); ?>
        </div>
        <!-- TODO: SCRIPTS -->
        <?php require_once("../MainJS/mainjs.php");  ?>
    </body>
</html>
<?php 
    }else{
        header("Location:".Conectar::ruta()."/index.php");
        exit();
    }

?>