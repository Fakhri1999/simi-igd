<?php
class PenanggungjawabModel extends CI_Model
{
	public function insertData($data)
	{
		return $this->db->insert('penanggung_jawab', $data);
	}
}
