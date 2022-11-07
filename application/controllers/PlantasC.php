<?php 
class PlantasC extends CI_Controller
{
    //vista principal de producto
public function show(){
    $this->load->model('PlantasM');
    $data['plantas']=$this->PlantasM->getPlantas();

    $this->load ->view('headers/head.php');
    $this->load ->view('headers/menu.php');
    $this->load ->view('plantas/principalPlantas.php',$data);
    $this->load ->view('headers/footer.php');     
}


public function detallePlanta($id_Planta){
    $this->load->model('PlantasM');
    $data['planta']=$this->PlantasM->getPlanta($id_Planta);

    $this->load ->view('headers/head.php');
    $this->load ->view('headers/menu.php');
    $this->load ->view('plantas/detallePlanta.php', $data);
    $this->load ->view('headers/footer.php');
}


public function borrarPlanta($id_Planta){
    $this->load->model('PlantasM');
    if($this->PlantasM->deletePlanta($id_Planta)){
        redirect(base_url('index.php/PlantasC/show'),'refresh');

    }
    
}

	
public function insertPlanta(){
    $this->load->model('PlantasM');
    $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
           // $this->form_validation->set_rules('Nombre', 'planta', 'required');
            if ($this->form_validation->run() == FALSE)
            {		
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
                    $this->load->view('plantas/insertPlanta');
                    $this->load->view('headers/footer.php');
            }
            else
            {
                   $this->PlantasM->insertPlanta();
                   redirect(base_url('index.php/PlantasC/show'),'refresh');
            }
}







}?>  