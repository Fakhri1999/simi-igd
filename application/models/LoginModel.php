<?php
class LoginModel extends CI_Model
{
	public function getLoginData($data)
	{
		return $this->db->where($data)->get('admin')->result();
	}
}
