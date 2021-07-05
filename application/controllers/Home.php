<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PasienModel');
	}

	public function index()
	{
		$data = [
			'totalPasien' => $this->PasienModel->getTotalPasien(),
			'totalPonekPasien' => $this->PasienModel->getPonekPasien(),
			'totalNonPonekPasien' => $this->PasienModel->getNonPonekPasien()
		];
		$this->load->view('home', $data);
	}
}
