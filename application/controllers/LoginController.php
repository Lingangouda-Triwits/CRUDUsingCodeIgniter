<?php
class LoginController extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->model('LoginModel'); //load model
	}

	public function index()
	{

		if($this->input->post('login'))
		{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->LoginModel->check_data($username,$password);

	}else{
	$this->load->view('LoginView');
	}
	}

	public function welcome(){
		$this->load->view('WelcomeView');
	}
}
?>