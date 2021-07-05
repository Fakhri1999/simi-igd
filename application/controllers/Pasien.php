<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('admin') == '') {
			redirect('login');
		}

		$this->load->model('PasienModel');
		$this->load->model('PenanggungjawabModel');
	}

	public function baru()
	{
		$this->load->view('pasienbaru');
	}

	public function simpan()
	{
		$pasienInput = [
			'no_rm' => $this->input->post('no_rm'),
			'nama' => $this->input->post('nama_pasien'),
			'no_identitas' => $this->input->post('nik_pasien'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('gender_pasien'),
			'kebangsaan' => $this->input->post('kebangsaan_pasien'),
			'agama' => $this->input->post('agama'),
			'status_menikah' => $this->input->post('status_menikah'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat_pasien'),
			'no_telp' => $this->input->post('no_telp_pasien'),
			'jenis_pasien' => $this->input->post('jenis_pasien'),
		];
		$pasienId = $this->PasienModel->insertPasien($pasienInput);

		$penanggungJawabInput = [
			'pasien_id' => $pasienId,
			'nama' => $this->input->post('nama_penanggungjawab'),
			'no_identitas' => $this->input->post('nik_penanggungjawab'),
			// 'jenis_kelamin' => $this->input->post('gender_pasien_2'),
			'alamat' => $this->input->post('alamat_penanggungjawab'),
			'no_telp' => $this->input->post('no_telp_penanggungjawab'),
			'hubungan' => $this->input->post('hubungan_penanggungjawab'),
		];
		$penanggungJawabId = $this->PenanggungjawabModel->insertData($penanggungJawabInput);
		redirect('');
	}

	public function cari()
	{
		$data = $this->PasienModel->searchPasien($this->input->get('search'));
		$this->load->view('cari_pasien', ['pasien' => $data, 'search' => $this->input->get('search')]);
	}
}
