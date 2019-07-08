<?php
require_once '../controladores/usuarios.php';

class cl_enlace_usuarios
{
  private $vp_Opcion = null;
  private $cp_ob_usuarios = null;

  public function __construct()
  {
    $this->cp_ob_usuarios = new cl_usuarios();
    $this->vp_Opcion = $_POST['vx_accion'];
    switch ($this->vp_Opcion)
    {
      case 'NuevoUsuario': //En uso SWEA
          $this->mt_NuevoUsuario();
          break;
      case 'verListaUsuarios': //En uso SWEA
          $this->mt_verListaUsuarios();
          break;
      default :
          echo 'No se ha recibido accion';
          break;
    }
  }

  private function mt_NuevoUsuario()
  {
      $vl_estado = 0;
      $vl_identificacion = $_POST['vx_identificacion'];
      $vl_nombres = $_POST['vx_nombres'];

      if ($this->cp_ob_usuarios->nuevoUsuario($vl_identificacion, $vl_nombres)) 
      {
        $vl_estado = 1;
      }
      echo $vl_estado;
  }

  private function mt_verListaUsuarios()
  {
    $vl_array_estado = array();
    $array_usuario = $this->cp_ob_usuarios->verListaUsuarios();
    if ($array_usuario)
    {
      array_push($vl_array_estado, '1');
      array_push($vl_array_estado, $array_usuario);
    } else
    {
      array_push($vl_array_estado, '0');
    }
    echo json_encode($vl_array_estado);
  }
}