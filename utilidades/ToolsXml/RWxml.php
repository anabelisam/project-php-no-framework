<?php
/*
 * Descripcion de RWxml
 */
class cl_RWxml {

    private $cp_ruta_archivo = null;

    public function __construct() {
        
    }

    public function setRuta_archivo($pv_ruta) {
        $this->cp_ruta_archivo = $pv_ruta;
    }

    public function verificarXML() { #nombre a "iniciarXML
        $vl_xml = simplexml_load_file($this->cp_ruta_archivo);
        if (!is_object($vl_xml)){
            return false;
        }else{
            return $vl_xml;
        }
        /*
         * $vl_xml = simplexml_load_file($this->cp_ruta_archivo);
         * if (!$vl_xml) {
         *     return false;
         * }else{
         *     return $vl_xml
         * } 
         */
    }

    public function leer_Xml($pv_profundida, $pv_etiqueta, $pv_subEtiqueta) {
        $vl_xml = simplexml_load_file($this->cp_ruta_archivo);
        foreach ($vl_xml->children() as $vl_hijo) {
            //echo $hijo->getName() . ": " . $hijo . "<br>"; //nombre del elemento hijo y su valor
            switch ($pv_profundida) {
                case '1':
                    if ($vl_hijo->getName() == $pv_etiqueta) {
                        echo $vl_hijo.' '.$pv_etiqueta;
                    }
                    break;
                case '2':
                    if ($vl_hijo->getName() == $pv_etiqueta) {
                        foreach ($vl_hijo->children() as $vl_nieto) {
                            if ($vl_nieto->getName() == $pv_subEtiqueta) {
                                return $vl_nieto;
                            }
                        }
                    }
                    break;
            }
        }
    }
    
    public function leer_Xml_1($pv_etiqueta) {
        $vl_xml = simplexml_load_file($this->cp_ruta_archivo);
        $vl_dato = '';
        foreach ($vl_xml->children() as $vl_hijo) {            
            if ($vl_hijo->getName() == $pv_etiqueta) {
                        $vl_dato =  $vl_hijo;
                    }
                    
            
            
        }
        return $vl_dato;
    }

}

?>
