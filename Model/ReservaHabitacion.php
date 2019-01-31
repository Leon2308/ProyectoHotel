<?php
include_once 'HotelDB.php';
/**
 * Clase para obtener datos de habitación y Cliente.
 *
 * @author Moisés
 */
class ReservaHabitacion {

    private $codHabitacion;
    private $tipo;
    private $capacidad;
    private $planta;
    private $tarifa;
    private $fechaEntrada;
    private $fechaSalida;

     function __construct($codHabitacion, $tipo, $capacidad, $planta, $tarifa, $fechaEntrada, $fechaSalida) {
        $this->codHabitacion = $codHabitacion;
        $this->tipo = $tipo;
        $this->capacidad = $capacidad;
        $this->planta = $planta;
        $this->tarifa = $tarifa;
        $this->fechaEntrada = $fechaEntrada;
        $this->fechaSalida = $fechaSalida;
    }
    

}
