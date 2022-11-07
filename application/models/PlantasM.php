<?php 
class PlantasM extends CI_Model{
    function getPlantas(){
         $query=$this->db->get('Plantas');
        return $query->result();
        }


        function getPlanta($id_Planta){
            $this->db->where ('id_Planta',$id_Planta);
              $query=$this->db->get('Plantas');
              return $query->result();
          }

          
        function deletePlanta($id_Planta){
            $this->db->where ('id_Planta',$id_Planta);
            $this->db->delete ('Plantas');
              return TRUE;
           
          }


          function insertPlanta(){
            $data = array(
                'Nombre' => $this->input->post('Nombre'),
                'Alias' => $this->input->post('Alias'),
                'Telefono' => $this->input->post('Telefono'),
                'Domicilio' => $this->input->post('Domicilio')
            );
        
                $this->db->insert('Plantas', $data);
           
          }

    }
?>