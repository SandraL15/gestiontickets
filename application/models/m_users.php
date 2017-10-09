<?php

class m_users extends CI_Model{
    public function GetAllUsers($login){
   $sql = $this->db->query("select loginUser, pwdUser from users where loginUser =".$login);
   return $sql->result();
}
}