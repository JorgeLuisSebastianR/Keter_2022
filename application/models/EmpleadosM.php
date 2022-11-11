<?php 
class EmpleadosM extends CI_Model{
    //funcion ver para ver en la pantalla principal
    function getEmpleados(){
        $query=$this->db->get('Empleado');
       return $query->result();
       }
}?>