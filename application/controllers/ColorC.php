<?php 
class ColorC extends CI_Controller
{
public function show(){
    $this->load->model('ColorM');
    $data['Color']=$this->ColorM->getColor();
    $this->load ->view('headers/head.php');
    $this->load ->view('headers/menu.php');
    $this->load ->view('headers/footer.php');     
}

}?> 