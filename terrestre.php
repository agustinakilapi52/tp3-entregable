<?php
include_once "viaje.php";
// clase hija Terrestre
class Terrestre extends Viaje {
    private $comodidad;

    //constructores de la clase padre Viaje y de la clase Terrestre
    public function __construct($codigo, $destino, $maxPasajero, $pasajero, $responsable, $importe, $idaOvuelta, $comodidad)
    {
        parent :: __construct ($codigo, $destino, $maxPasajero, $pasajero, $responsable, $importe, $idaOvuelta);
        $this -> comodidad_asiento = $comodidad;    
    }

    //metodos de acceso

    public function getcomodidadAsiento (){
        return $this -> comodidad_asiento;
    }

    public function setcomodidadAsiento ($asiento){
        $this -> comodidad_asiento = $asiento;
    }

   
    public function __toString()
    {
        $terrestre = "VIAJE TERRESTRE:\n" . 
        "Tipo de asiento: ". $this -> getcomodidadAsiento(). 
        "\n". parent :: __toString();
        return $terrestre;
    }

    public function venderPasaje ($pasajero){
        parent :: venderPasaje($pasajero);
        $importe = $this -> getimporte();
        $asiento = $this -> getcomodidadAsiento();
        if ($asiento == "cama"){
            $importe = $importe * 1.25;
        } 
        return $importe;
    }
}