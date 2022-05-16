<?php
include_once "viaje.php";
//clase hija Aereo
class Aereo extends Viaje {
    private $numeroVuelo;
    private $categoriaAsiento;
    private $aerolinea;
    private $cantidadEscala;

    public function __construct($codigo, $destino, $maxPasajero, $pasajero, $responsable, $importe, $idaOvuelta, $numeroVuelo, $categoriaAsiento, $aerolinea, $cantidadEscala)
    {
        parent :: __construct ($codigo, $destino, $maxPasajero, $pasajero, $responsable, $importe, $idaOvuelta);
        $this -> numeroVuelo = $numeroVuelo;
        $this -> categoriaAsiento = $categoriaAsiento;
        $this -> aerolinea = $aerolinea;
        $this -> cantidadEscala = $cantidadEscala;
    }

    //metodos de acceso

    public function getnumeroVuelo (){
        return $this -> numeroVuelo;
    }

    public function setnumeroVuelo ($vuelo){
        $this -> numeroVuelo = $vuelo;
    }


    public function getcategoriaAsiento (){
        return $this -> categoriaAsiento;
    }

    public function setcategoriaAsiento ($categoria){
        $this -> categoriaAsiento = $categoria;
    }

    public function getaerolinea (){
        return $this -> aerolinea;
    }
    public function setaerolinea ($aerolinea){
        $this -> aerolinea = $aerolinea;
    }

    public function getcantidadEscala(){
        return $this -> cantidadEscala;
    }
    public function setcantidadEscala($cantidad){
        $this -> cantidadEscala = $cantidad;
    }


    public function __toString()
    {
        $terrestre = "VIAJE AEREO:\n" . 
        "Categoría: ". $this -> getcategoriaAsiento(). 
        "\nAerolínea: ". $this -> getaerolinea(). 
        "\nCantidad de escalas: ". $this -> getcantidad_escalas. "\n".parent :: __toString();
        return $terrestre;
    }

    public function venderPasaje ($pasajero){
        parent :: venderPasaje($pasajero);
        $importe = $this -> getimporte();
        $asiento = $this -> getcategoriaAsiento();
        $escalas = $this -> getcantidadEscala();
        if ($escalas > 0){
            if ($asiento == "primera clase"){
                $importe = $importe * 1.60;
            } else {
                $importe = $importe * 1.40;
            }
        }
        return $importe;
    }
    

}