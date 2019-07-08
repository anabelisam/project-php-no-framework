<link rel="stylesheet" type="text/css" href="../webroot/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../webroot/bootstrap/css/plugins/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="../webroot/bootstrap/css/bootswatch.min.css">
<link rel="stylesheet" type="text/css" href="../webroot/bootstrap/css/css.css">
<link rel="stylesheet" type="text/css" href="../webroot/bootstrap/css/plugins/dataTables.responsive.css">
<link rel="stylesheet" type="text/css" href="../webroot/tema/css/css_custom.css">

<script src="../webroot/bootstrap/js/jquery-1.11.1.min.js"></script>
<script src="../webroot/bootstrap/js/jquery.dataTables.min.js"></script>
<script src="../webroot/bootstrap/js/dataTables.responsive.min.js"></script>
<script src="../webroot/bootstrap/js/dataTables.bootstrap.js"></script>

<script src="../webroot/js/usuarios.js"></script>
<script src="../webroot/js/utilidades.js"></script>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h4><i class="fa fa-group"></i> Usuarios</h4>
    </div>
    <div class="panel-body">
        <a id="btnNuevoUsuario" href="#" class="btn btn-primary">
            <i class="fa fa-plus-square"></i> Nuevo Usuario
        </a>
    </div>
</div>

<div id="ven_nuevoUsuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tNvoUsr" aria-hidden="true" data-backdrop="">
    <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <strong class="modal-title" id="tNvoUsr">Agregar Usuario</strong>
            </div>
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <label>Identificación</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-asterisk"></i>
                                </span>
                                <input class="form-control" type="text" id="identificacion_usr">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <label>Nombres y Apellidos</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input class="form-control" type="text" id="nombres_usr">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <a href="#" id="btnGuardarUsuario" class="btn btn-primary">Guardar</a>
            </div>
        </div>
    </div>
</div>