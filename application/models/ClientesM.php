<?php 
class ClientesM extends CI_Model{

    //funcion ver para ver en la pantalla principal
    function getClientes(){
         $query=$this->db->get('Clientes');
        return $query->result();
        }

//funcion para boton ver
        function getCliente($id_Cliente){
            $this->db->where ('id_Cliente',$id_Cliente);
              $query=$this->db->get('Clientes');
              return $query->result();
          }

//funccion para boton eliminar 
          function deleteCliente($id_Cliente){
            $this->db->where ('id_Cliente',$id_Cliente);
            $this->db->delete ('Clientes');
              return TRUE;
           
          }
//funcion para el boton agregar
          function insertCliente(){
            $data = array(
                'razonSocial' => $this->input->post('razonSocial'),
                'alias' => $this->input->post('alias'),
                'rfc' => $this->input->post('rfc'),
                'calle' => $this->input->post('calle'),
                'colonia' => $this->input->post('colonia'),
                'numeroExterior' => $this->input->post('numeroExterior'),
                'numeroInterior' => $this->input->post('numeroInterior'),
                'codigoPostal' => $this->input->post('codigoPostal'),
                'ciudad' => $this->input->post('ciudad'),
                'estado' => $this->input->post('estado'),
                'telefono' => $this->input->post('telefono'),
                'correoElectronico' => $this->input->post('correoElectronico'),
                'direccionEnvioAlternativa' => $this->input->post('direccionEnvioAlternativa')
            );
            
            $this->db->insert('Clientes', $data);
            }


            //funcion para el boton editar
            function updateCliente($id_Cliente){
                $data = array(
                    'razonSocial' => $this->input->post('razonSocial'),
                    'alias' => $this->input->post('alias'),
                    'rfc' => $this->input->post('rfc'),
                    'calle' => $this->input->post('calle'),
                    'colonia' => $this->input->post('colonia'),
                    'numeroExterior' => $this->input->post('numeroExterior'),
                    'numeroInterior' => $this->input->post('numeroInterior'),
                    'codigoPostal' => $this->input->post('codigoPostal'),
                    'ciudad' => $this->input->post('ciudad'),
                    'estado' => $this->input->post('estado'),
                    'telefono' => $this->input->post('telefono'),
                    'correoElectronico' => $this->input->post('correoElectronico'),
                    'direccionEnvioAlternativa' => $this->input->post('direccionEnvioAlternativa')
       
               );
                $this->db->where('id_Cliente',$id_Cliente);
               $this->db->update('Cliente', $data);
            }
         
           
          
    }
?>