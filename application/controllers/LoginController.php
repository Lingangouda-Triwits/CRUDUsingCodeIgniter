<?php
class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel'); //load model
        $this->load->library('session'); // load session library
    }

    public function index()
    {
        if ($this->input->post('login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->LoginModel->check_data($username, $password);
        } else {
            $this->load->view('LoginView');
        }
    }

    public function fetch()
    {
        // Check if user is logged in
        if (!$this->session->userdata('user')) {
            // User is not logged in, redirect to LoginView
            redirect('http://localhost/codeigniter/index.php/LoginController');
        }

        $this->load->view('FetchView');
    }
}
?>
