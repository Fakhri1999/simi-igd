<?php
class PasienModel extends CI_Model
{
	public function getTotalPasien()
	{
		return $this->db->get('pasien')->result();
	}

	public function getPonekPasien()
	{
		return $this->db->where('jenis_pasien', 'ponek')->get('pasien')->result();
	}

	public function getNonPonekPasien()
	{
		return $this->db->where('jenis_pasien', 'non-ponek')->get('pasien')->result();
	}

	public function insertPasien($data)
	{
		$this->db->insert('pasien', $data);
		return $this->db->insert_id();
	}

	public function searchPasien($data)
	{
		$this->db->like('no_rm', $data);
		$this->db->or_like('no_identitas', $data);
		$this->db->or_like('nama', $data);
		$this->db->or_like('alamat', $data);
		return $this->db->get('pasien')->result();
	}
}
