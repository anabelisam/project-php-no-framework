<?php

require_once '../utilidades/ToolsXml/RWxml.php';

class cl_conexion 
{
  #Campos de configuración de conexión
  private $cp_servidor = null;
  private $cp_puerto = null;
  private $cp_baseDatos = null;
  private $cp_usuario = null;
  private $cp_contrasena = null;
  #Identificadores de conexión
  private $cp_Id_Conexion = null;
  #Objeto Xml de parametros de conexión
  private $cp_ob_Rxml = null;

  public function __construct() 
  {
    $this->cp_ob_Rxml = new cl_RWxml();
    $this->conectarDB();
  }

  public function __destruct() 
  {
    unset($this->cp_ob_Rxml);
  }

  public function setServidor($pv_servidor)
  {
    $this->cp_servidor = $pv_servidor;
  }

  public function setPuerto($pv_puerto)
  {
    $this->cp_puerto = $pv_puerto;
  }

  public function setBaseDatos($pv_DB) 
  {
    $this->cp_baseDatos = $pv_DB;
  }

  public function setUsuario($pv_usuario)
  {
    $this->cp_usuario = $pv_usuario;
  }

  public function setContrasena($pv_contrasena)
  {
    $this->cp_contrasena = $pv_contrasena;
  }

  public function getConexion()
  {
    return $this->cp_Id_Conexion;
  }

  public function abrirConexion()
  {
    $vl_conectado = pg_connect("host=$this->cp_servidor port=$this->cp_puerto user=$this->cp_usuario password=$this->cp_contrasena dbname=$this->cp_baseDatos");
    if (!$vl_conectado) 
    {
      $this->cp_Id_Conexion = NULL;
      return FALSE;
    } else {
      $this->cp_Id_Conexion = $vl_conectado;
      return TRUE;
    }
  }

  public function cargarParametrosXml()
  {
    $ruta = '../configuracion/parametros.xml';
    $this->cp_ob_Rxml->setRuta_archivo($ruta);
    if ($this->cp_ob_Rxml->verificarXML()) {
      $this->setServidor($this->cp_ob_Rxml->leer_Xml('2', 'conexion', 'servidor'));
      $this->setPuerto($this->cp_ob_Rxml->leer_Xml('2', 'conexion', 'puerto'));
      $this->setBaseDatos($this->cp_ob_Rxml->leer_Xml('2', 'conexion', 'db'));
      $this->setUsuario($this->cp_ob_Rxml->leer_Xml('2', 'conexion', 'usuario'));
      $this->setContrasena($this->cp_ob_Rxml->leer_Xml('2', 'conexion', 'contrasena'));
      return true;
    } else {
      return false;
    }
  }

  public function conectarDB()
  {
    $this->cargarParametrosXml();
    return $this->abrirConexion();
  }
}