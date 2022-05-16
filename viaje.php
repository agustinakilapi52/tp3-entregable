<?php

class Viaje{
    private $codigo;
    private $destino;
    private $max_pasajero;
    private $pasajero; 
    private $objResponsable;
    private $importe;
    private $idaOvuelta;


    public function __construct ($codigo, $destino, $max_pasajero, $pasajero, $responsable, $importe, $idaOvuelta){
        $this -> codigo = $codigo;
        $this -> destino = $destino;
        $this -> max_pasajero = $max_pasajero;
        $this -> pasajero = $pasajero;
        $this -> objResponsable = $responsable;
        $this -> importe = $importe;
        $this -> idaOvuelta = $idaOvuelta;
    }

    

    public function getcodigo (){
        return $this -> codigo;
    }

    public function setcodigo ($codigo){
        $this -> codigo = $codigo;
    }


    public function getdestino (){
        return $this -> destino;
    }

    public function setdestino ($destino){
        $this -> destino = $destino;
    }

    public function getmaxPasajero (){
        return $this -> maxPasajero;
    }

    public function setmaxPasajero ($maxPasajero){
        $this -> maxPasajero = $maxPasajero;
    }

    public function getpasajero(){
        return $this -> pasajero;
    }

    public function setpasajero ($pasajero){
        $this -> pasajero = $pasajero;
    }
    
    public function getobjResponsable (){
        return $this -> objResponsable;
    }

    public function setobjResponsable ($objResponsable){
        $this -> objResponsable = $objResponsable;
    }

    public function getimporte (){
        return $this -> importe;
    }

    public function setimporte ($importe){
        $this -> codigo = $importe;
    }

    public function getidaOvuelta (){
        return $this -> idaOvuelta;
    }
   
    public function setidaOvuelta ($idaOvuelta){
        $this -> codigo = $idaOvuelta;
    }

    public function __toString (){
      
        $infoPasajeros = $this -> infoPasajero();
        $infoViaje = "Código: ". $this -> getcodigo(). "\n 
        Destino: ". $this -> getdestino (). "\n 
        Responsable: \n". $this -> getobjResponsable(). "\n
        Cantidad máxima de pasajeros: ". $this -> getmaxPasajero (). "\n
        Importe: ". $this -> getimporte(). "\n
        Ida y vuelta: " . $this -> idaYVuelta() ."\n
        info pasajeros  \n" . $infoPasajeros;
        return $infoViaje;
    }

    public function hayPasajeros (){
        $pasajero = $this -> getpasajero();
        $existe = true;
        if (count ($pasajero) == 0){
            $existe = false;
        }
        return $existe;
    }

    public function idaYVuelta (){
        $idaOvuelta = $this -> getidaOvuelta();
        if ($idaOvuelta){
            $resultado = "ida y vuelta";
        } else {
            $resultado = "ida";
        }
        return $resultado;
    }



    public function infoPasajero (){
        $listar = " ";
        $pasajero = $this -> getpasajero ();
        for ($i = 0; $i < count ($pasajero); $i++){
            $nombre = $pasajero [$i] -> getnombrePasajero();
            $apellido = $pasajero [$i] -> getapellidoPasajero ();
            $dni = $pasajero [$i] -> getdniPasajero ();
            $telefono = $pasajero [$i] -> gettelefonoPasajero ();

            $listarPasajero = $listar. 
            "\n". "Pasajero ". ($i+1). ": \nNombre: ".$nombre. 
            "\nApellido: ". $apellido. "\nDNI: ". $dni. "\nTeléfono: ". $telefono."\n";
        }
        return $listarPasajero;
    }

    public function eliminarPasajero ($idPasajero){
        $pasajero = $this -> getpasajero();
        $pasajeroNuevo = array();
        for ($i=0; $i< count($pasajero); $i++){
            if ($i == $idPasajero){
            } else {
                array_push($pasajeroNuevo, $pasajero[$i]);
            }
        }
        $this -> setpasajero($pasajeroNuevo);
    }

    public function agregarPasajero ($objPasajero){
        $arrayPasajero = $this -> getpasajero();
        $i = count($arrayPasajero);
        $arrayPasajero [$i] = $objPasajero;
        $this -> setpasajero($arrayPasajero);
    }

   
   //modificar atributos de los pasajeros
 
    public function modificarNombrePasajero ($i,$nombreNuevo){
        $pasajero = $this -> getpasajero ();
        $pasajero [$i] -> setnombrePasajero ($nombreNuevo);
        $this -> setpasajero ($pasajero);
    }

    public function modificarApellidoPasajero ($i, $apellidoNuevo){
        $pasajero = $this -> getpasajero ();
        $pasajero [$i] -> setapellidoPasajero ($apellidoNuevo);
        $this -> setpasajero ($pasajero);
    }

    public function modificarDniPasajero ($id, $dniNuevo){
        $pasajero = $this -> getpasajero ();
        $pasajero [$id] -> setdniPasajero ($dniNuevo);
        $this -> setpasajero ($pasajero);
     }

    public function modificarTelefonoPasajero ($id, $telefonoNuevo){
        $pasajero = $this -> getpasajero ();
        $pasajero [$id] -> settelefonoPasajero ($telefonoNuevo);
        $this -> setpasajero ($pasajero);
    }
//modificar atributos del objeto responsable
    public function modificarNumeroEmpleadoResponsable ($numeroEmpleadoNuevo){
        $objResponsable = $this -> getobjResponsable ();
        $objResponsable -> setnumeroEmpleado ($numeroEmpleadoNuevo);
        $this -> setobjResponsable ($objResponsable);
    }

    public function modificarNumeroLicenciaResponsable ($numeroLicenciaNuevo){
        $objResponsable = $this -> getobjResponsable ();
        $objResponsable -> setnumeroLicencia ($numeroLicenciaNuevo);
        $this -> setobjResponsable ($objResponsable);
    }

    public function modificarNombreResponsable ($nombreResponsableNuevo){
        $objResponsable = $this -> getobjResponsable ();
        $objResponsable -> setnombre ($nombreResponsableNuevo);
        $this -> setobjResponsable ($objResponsable);
    }


    public function modificarApellidoResponsable ($apellidoResponsableNuevo){
        $objResponsable = $this -> getobjResponsable ();
        $objResponsable -> setapellido ($apellidoResponsableNuevo);
        $this -> setobjResponsable ($objResponsable);
    }

    public function pasajesDisponibles (){
        $maxPasajero = $this -> getmaxPasajero();
        $pasajero = $this -> getpasajero();
        if ($maxPasajero > count($pasajero)){
            $pasaje = true;
        } else {
            $pasaje = false;
        }
        return $pasaje;
    }

    public function venderPasaje ($pasajero){
        $importe = $this -> getimporte();
        $idaOvuelta = $this -> getidaOvuelta();
        $pasajes_disponible = $this -> pasajesDisponibles();
        if ($pasajes_disponible){
            $this -> agregarPasajero($pasajero);
            if ($idaOvuelta){
                $importe = $importe*1.5;
            }
        } else {
            $importe = -1;
        }
        return $importe;
    } 

      
}