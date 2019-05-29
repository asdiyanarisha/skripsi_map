<?php  

class M_pengguna extends CI_Model
{
	function login_pengguna($inputan)
	{
		// 1. enkripsi password
		$pass = sha1(md5($inputan['password']));

		// 2. cek data use di database
		$this->db->where('email',$inputan['email']);
		$this->db->where('password',$pass);
		$query = $this->db->get('user');

		// hitung data yang tercetak
		$yangcocok = $query->num_rows();

		// mengambil data user yang login
		$data = $query->row_array();

		// jika hasil input cocok dan ada di database
		if($yangcocok > 0)
		{
			// mendaftarkan di season
			$this->session->set_userdata('admin',$data);
			return TRUE;
		}
		// jika tidak ada yang cocok maka gagal login
		else
		{
			return FALSE;
		}


	}

	function simpan_pengguna($inputan)
	{
		$inputan['password'] = sha1(md5($inputan['password']));

		$simpan = elements(array('email','password'),$inputan);
		$this->db->insert('user',$simpan);
	}
}
?>