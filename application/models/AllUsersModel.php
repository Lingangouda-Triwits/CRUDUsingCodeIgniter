<?php
class AllUsersModel extends CI_Model{
    public function getAllUsers(){
        $query = $this->db->get('user');
        return $query->result_array();
    }
} 
?>