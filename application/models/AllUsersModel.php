<?php
class AllUsersModel extends CI_Model{
    public function getAllUsers(){
        $query = $this->db->get('user');
        // $query = $this->db->order_by('slno', 'desc')->get('user');
        return $query->result_array();
    }
} 
?>