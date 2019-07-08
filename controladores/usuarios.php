<?php
require_once '../transacciones/genericas/consultas.php';
require_once '../transacciones/conexion/conexion.php';
require_once '../transacciones/genericas/eliminar.php';
require_once '../transacciones/trans_usuarios.php';

class cl_usuarios 
{
  private $ob_Conexion = null;
  private $ob_Generico_Consulta = null;
  private $ob_Generico_Eliminar = null;
  private $cp_Id_Conexion = null;
  private $ob_Trans_Usuarios = null;

  public function __construct() 
  {
    $this->ob_Conexion = new cl_conexion();
    $this->cp_Id_Conexion = $this->ob_Conexion->getConexion();
    $this->ob_Generico_Consulta = new cl_consultas($this->cp_Id_Conexion);
    $this->ob_Trans_Usuarios = new cl_trans_usuarios($this->cp_Id_Conexion);
  }

  public function nuevoUsuario($pv_identificacion, $pv_nombres)
  {
    $this->ob_Trans_Usuarios->setusr_login($pv_identificacion);
    $this->ob_Trans_Usuarios->setusr_passw($pv_identificacion);
    $this->ob_Trans_Usuarios->setcod_evento($pv_cod_evento);
    $this->ob_Trans_Usuarios->setid_rol($pv_tipo_usuario);
    if ($this->ob_Trans_Usuarios->agregar())
    {
      $this->ob_Trans_Usuarios->setcod_evento($pv_cod_evento);
      $this->ob_Trans_Usuarios->setnombres($pv_nombres);
      $this->ob_Trans_Usuarios->setidentificacion($pv_identificacion);
      return $this->ob_Trans_Usuarios->agregarParticipante();
    }
  }

  public function verListaUsuarios()
  {
    $vl_sql = "SELECT id, nombre FROM usuarios";
    $this->ob_Generico_Consulta->setSql($vl_sql);
    return $this->ob_Generico_Consulta->getConsulta();
  }
}