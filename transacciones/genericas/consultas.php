<?php

class cl_consultas
{
  private $cp_Id_Conexion = null;
  private $pv_Sql = null;

  public function __construct($pv_ID_Conexion = NULL)
  {
    $this->cp_Id_Conexion = $pv_ID_Conexion;
  }

  public function setSql($pv_sql)
  {
    $this->pv_Sql = $pv_sql;
  }

  public function getConsulta()
  {
    $vl_datos = pg_query($this->cp_Id_Conexion, $this->pv_Sql);
    return pg_fetch_all($vl_datos);
  }

  public function getConsultaRecurso()
  {
    return pg_query($this->cp_Id_Conexion, $this->pv_Sql);
  }
}