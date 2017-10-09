<?php
class m_mdp extends CI_Model{
    public function GetAllMdp($mdp){
   $sql = $this->db->query("select pwdUser from users where pwdUser=".$mdp);
   return $sql->result();
}
}
