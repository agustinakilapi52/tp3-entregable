<?php

class Pasajero{
    
    private $nombrePasajero;
    private $apellidoPasajero;
    private $dniPasajero;
    private $telefonoPasajero;
    
   
    public function __construct ($nombrePasajero, $apellidoPasajero, $dniPasajero, $telefonoPasajero){
        $this -> nombrePasajero = $nombrePasajero;
        $this -> apellidoPasajero = $apellidoPasajero;
        $this -> dniPasajero = $dniPasajero;
        $this -> telefonoPasajero = $telefonoPasajero;
    }

   
    public function getnombrePasajero (){
       return $this -> nombrePasajero;
    }
    public function setnombrePasajero ($nombrePasajero){
        $this -> nombrePasajero = $nombrePasajero;
    }

    public function getapellidoPasajero (){
        return $this -> apellidoPasajero;
    }

    public function setapellidoPasajero ($apellidoPasajero){
        $this -> apellidoPasajero = $apellidoPasajero;
    } 

    public function getdniPasajero(){
        return $this -> dniPasajero;
    }
    public function setdniPasajero ($dniPasajero){
        $this -> dniPasajero = $dniPasajero;
    } 

    public function gettelefonoPasajero (){
        return $this -> telefonoPasajero; 
    }

    public function settelefonoPasajero ($telefonoPasajero){
        $this -> telefonoPasajero = $telefonoPasajero;
    }


    public function __toString (){
        $nombre = $this -> getnombrePasajero ();
        $apellido = $this -> getapellidoPasajero();
        $dni = $this -> getdniPasajero();
        $telefono = $this -> gettelefonoPasajero();
        $infoPersona = "    Nombre: ". $nombre. "\n
        Apellido: ". $apellido ."\n
        DNI: ". $dni. "\n
        Telefono: ". $telefono. "\n";
        return $infoPersona;
    }

    
}