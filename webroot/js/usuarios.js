$(document).ready(function()
{
  //Nuevo Usuario
  var btnNuevoUsuario = $('#btnNuevoUsuario');
  var ven_nuevoUsuario = $('#ven_nuevoUsuario');
  var identificacion_usr = $('#identificacion_usr');
  var nombres_usr = $('#nombres_usr');
  var btnGuardarUsuario = $('#btnGuardarUsuario');

  btnNuevoUsuario.click(function()
  {
    identificacion_usr.val('');
    nombres_usr.val('');
    ven_nuevoUsuario.modal('show');
  });

  btnGuardarUsuario.click(function()
  {
    $.ajax(
    {
      type:'POST',
      url:'../enlaces/enlace_usuarios.php',
      data:{
        vx_accion:'NuevoUsuario',
        vx_identificacion: identificacion_usr.val(),
        vx_nombres: nombres_usr.val()
      },
      datatype:'TEXT',
      success:function(respuestaServidor)
      {
        var respuesta = eval(respuestaServidor);
          if (respuesta == '1')
        {
          $.growl.notice({ title: "Operación Exitosa", message: "Se agregó el usuario" });
          ven_nuevoUsuario.modal('hide');
        }else{
          $.growl.error({ title: "Error!", message: "Ha ocurrido un problema" });
        }
      }
    });
  });

});