<?php
class Outro extends CI_Controller {
    public function Ola(){
        	$this->load->view('mypage');
    }
    public function teste(){
        echo $this->session->userdata("_ID");
    }
    public function sess(){
        $this->session->set_userdata("_ID","123");
        echo "Session setada com sucesso";
    }

}
