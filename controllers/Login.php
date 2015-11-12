<?php
class Login extends CI_Controller {
    
     public function entrar(){
            	$this->load->view('formlogin');
        }
        
     public function auth(){
        $nome = $_POST["nome"];
        $pass = $_POST["senha"];
        $this->load->model("model");
        $usr = $this->model->getUser($nome,$pass);
        if($usr !== false){
            if($usr === "admin"){
                $this->session->set_userdata("_ID","admin");// se nome e senha for root seta uma session
                redirect("/login/admin");
            }else{
                $this->session->set_userdata("_ID","comum");
                $this->session->set_userdata("_NOME",$nome);//autorização : o que é vc e autenticar: o sistema sabe que e vc

                redirect("/login/comum");
            }
        }else{
            redirect("/login/entrar");
        }
     }
    
        public function comum(){
            $nome = $this->session->userdata("_NOME");
            echo  "<h1> BEM-VINDO".$nome."</h1>";   
        }
        
        
        public function logout(){
            $this->session->unset_userdata("_ID");
             $this->session->unset_userdata("_NOME");
             echo "<h1>Até logo</h1>";
        }
        
     public function page(){
         if($this->session->userdata("_NOME") !=null){
             
             echo "Página de usuário";
             
         }else{
             redirect("/login/entrar");
         }
         
         
     }
     
     
     public function admin(){
         $a =  $this->session->userdata("_ID");
         if($a === "admin"){
             echo "<h1> BEM-VINDO ADMIN </h1>";
         }else{
             echo "<h1> VOCE NÃO ESTA AUTORIZADO </h1>";
         }
     } 
    public function comumview(){
      $this->load->view('novarota');
    }
    public function visitanteview(){
      $this->load->view('visitante');
    }
  
}

?>