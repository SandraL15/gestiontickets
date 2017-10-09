<?php
class Ctrl_Tickets extends CI_Controller {
     public function index(){
        $data['titre']="Gestion tickets ==> connexion";
        // $mdp=$_GET['mdp'];
        // $login=$_GET['login'];
        //$this->load->model("m_users"); 
        //$data['lesUsers'] = $this->m_users->GetAllUsers($mdp, $login);
         $this->load->view("v_accueil");
     }
     
     
     
}
