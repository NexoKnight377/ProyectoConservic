<?php 
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usuario_id"])){
?>
<!doctype html>
<html lang="es" class="no-focus"> <!--<![endif]-->
    <head>
        <!-- TODO: META -->
        <?php require_once("../MainHead/mainhead.php"); ?>
        <title>Nuevo Registro | Conservic</title>
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
                <div class="block">
                            <div class="block-header block-header-default">
                                <h2 class="block-title">Registrar Usuario</h2>
                            </div>
                    <div class="block-content block-content-full">
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Asunto</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Asunto">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-textarea-input">Descripción</label>
                            <div class="col-12">
                                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Content.."></textarea>
                            </div>
                        </div>
                        
                            <div class="col-md-6 justify-content-center row">
                                <div class="">
                                    <button type="button" class="btn btn-warning min-width-125" data-toggle="click-ripple">Adjuntar <i class=" si si-envelope-letter"></i></button>
                                </div>  
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-info min-width-125" data-toggle="click-ripple">Guardar <i class=" si si-envelope"></i></button>
                                </div>  
                            </div> 
                        
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="block">
                            <div class="block-header block-header-default">
                                <h2 class="block-title">Listado de Documentos <small>Inventario</small></h2>
                            </div>
                    <div class="block-content block-content-full">
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                    <thead>
                                        <tr>
                                            <th class="text-center"></th>
                                            <th>Nombre</th>
                                            <th class="d-none d-sm-table-cell">Nombre de Usuario</th>
                                            <th class="d-none d-sm-table-cell" style="width: 15%;">Acceso</th>
                                            <th class="text-center" style="width: 15%;">Perfil</th>
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
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="font-w600">Laura Carr</td>
                                            <td class="d-none d-sm-table-cell">customer2@example.com</td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">VIP</span>
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