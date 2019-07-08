<?php

class cl_trans_usuarios
{
	private $cp_Id_Conexion = null;
	private $cp_usr_login = null;
	private $cp_usr_passw = null;
	private $cp_cod_evento = null;
	private $cp_id_rol = null;
	private $cp_nombres = null;
	private $cp_identificacion = null;

	public function __construct($pv_ID_Conexion = NULL)
  {
  	$this->cp_Id_Conexion = $pv_ID_Conexion;
	}

	public function setusr_login($usr_login)
  {
		$this->cp_usr_login = $usr_login;
	}

	public function getusr_login()
  {
		return $this->cp_usr_login;
	}

	public function setusr_passw($usr_passw)
  {
		$this->cp_usr_passw = $usr_passw;
	}

	public function getusr_passw()
  {
		return $this->cp_usr_passw;
	}

	public function setnombres($pv_nombres)
	{
		$this->cp_nombres = $pv_nombres;
	}

	public function getnombres()
	{
		return $this->cp_nombres;
	}

	public function setidentificacion($pv_identificacion)
	{
		$this->cp_identificacion = $pv_identificacion;
	}

	public function getidentificacion()
	{
		return $this->cp_identificacion;
	}

	public function agregar()
	{
		$vl_UsrLogin = $this->getusr_login();
		$vl_UsrPassw = $this->getusr_passw();

		$vl_Sql="INSERT INTO usuarios(usr_login, usr_passw) VALUES ('".$vl_UsrLogin."','".$vl_UsrPassw."')";
		return pg_query($this->cp_Id_Conexion, $vl_Sql);
	}
}