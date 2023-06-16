<?php
class AllUsersController extends CI_Controller{
    public function index(){
        $this->load->model('AllUsersModel');
        $data['users'] = $this->AllUsersModel->getAllUsers();
        $this->load->view('AllUsersView', $data);
    }
}
?>