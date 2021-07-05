<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function proccess()
	{
		$data = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		];
		$result = $this->LoginModel->getLoginData($data);
		if (!sizeof($result)) {
			redirect('login');
		}
		$this->session->set_userdata(['admin' => $result[0]]);
		redirect('');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
