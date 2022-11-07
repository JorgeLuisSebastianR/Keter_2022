<?php 
class ClientesC extends CI_Controller
{
    //vista principal de producto
public function show(){

    $this->load->model('ClientesM');
    $data['clientes']=$this->ClientesM->getClientes();

    $this->load ->view('headers/head.php');
    $this->load ->view('headers/menu.php');
    $this->load ->view('clientes/principalClientes.php',$data);
    $this->load ->view('headers/footer.php');    
}

//boton ver
public function detalleCliente($id_Cliente){
    $this->load->model('ClientesM');
    $data['cliente']=$this->ClientesM->getCliente($id_Cliente);

    $this->load ->view('headers/head.php');
    $this->load ->view('headers/menu.php');
    $this->load ->view('clientes/detalleCliente.php', $data);
    $this->load ->view('headers/footer.php');
}
//boton borrar
public function borrarCliente($id_Cliente){
    $this->load->model('ClientesM');
    if($this->ClientesM->deleteCliente($id_Cliente)){
        redirect(base_url('index.php/ClientesC/show'),'refresh');

    }
    
}

//boton insertar
public function insertCliente(){
    $this->load->model('ClientesM');
    $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
            $this->form_validation->set_rules('razonSocial', 'razonSocial', 'required');
            if ($this->form_validation->run() == FALSE)
            {		
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('clientes/insertCliente');
                    $this->load->view('headers/footer.php');
            }
            else
            {
                   $this->ClientesM->insertCliente();
                   redirect(base_url('index.php/ClientesC/show'),'refresh');
            }
}

//funcion para boton actualizar
public function updateCliente($id_Cliente){
    $this->load->model('ClientesM');
    $data['cliente']=$this->ClientesM->getCliente($id_Cliente);

    $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
            $this->form_validation->set_rules('razonSocial', 'razonSocial', 'required');
            if ($this->form_validation->run() == FALSE)
            {		
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('clientes/updateCliente',$data);
                    $this->load->view('headers/footer.php');
            }
            else
            {
                   $this->ClientesM->updateCliente($id_Cliente);
                   redirect(base_url('index.php/ClientesC/show'),'refresh');
            }
}


}?>  