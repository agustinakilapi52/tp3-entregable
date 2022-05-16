<?php

class Responsable{ 
    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombre;
    private $apellido;

  
    public function __construct($numeroEmpleado, $numeroLicencia, $nombre, $apellido)
    {
        $this -> numeroEmpleado = $numeroEmpleado;
        $this -> numeroLicencia = $numeroLicencia;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
    }

    public function getnumeroEmpleado (){
        return $this -> numeroEmpleado;
    }
    public function setnumeroEmpleado ($empleado){
        $this -> numeroEmpleado = $empleado;
    }

    public function getnumeroLicencia (){
        return $this -> numeroLicencia;
    }
    public function setnumeroLicencia ($licencia){
        $this -> numeroLicencia = $licencia;
    }

    public function getnombre (){
        return $this -> nombre;
    }
    public function setnombre ($nombre){
        $this -> nombre = $nombre;
    }

    public function getapellido (){
        return $this -> apellido;
    }
    public function setapellido ($apellido){
        $this -> apellido = $apellido;
    }
  
    public function __toString()
    {
        $numeroEmpleado = $this -> getnumeroEmpleado();
        $licencia = $this -> getnumeroLicencia();
        $nombre = $this -> getnombre();
        $apellido = $this -> getapellido();
        $responsable = "Número empleado: ". $numeroEmpleado. "\n
        Número licencia: ". $licencia. "\n
        Nombre: ". $nombre. "\n
        Apellido: ". $apellido ."\n";
        return $responsable;
    }


}