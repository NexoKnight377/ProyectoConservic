<?php 
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usuario_id"])){
?>
<!doctype html>
<html lang="es" class="no-focus"> <!--<![endif]-->
    <head>
        <!-- TODO: META -->
        <?php require_once("../MainHead/mainhead.php"); ?>
        <title>Lista | Conservic</title>
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
                    <!-- TODO: TABLA DINAMICA-->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h2 class="block-title">Listado de Herramientas </h2>
                        </div>
                        <div class="block-content block-content-full">
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="d-none d-sm-table-cell">Nombre</th>
                                        <th class="d-none d-sm-table-cell" style="width: 40%;">Detalles</th>
                                        <th class="text-center" style="width: 15%;">Cantidad</th>
                                        <th class="text-center" style="width:15%">Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">Barbara Scott</td>
                                        <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Disabled</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
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