<?php  
class Pengguna extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengguna');
	}
	function index()
	{
		$data['judul'] = "Ini halaman list Admin";
		$this->themeadmin->tampilkan('admin/tampilpengguna',$data);
	}

	function login()
	{

		// skrip login

		if ($this->input->post())
		{
			$inputan = $this->input->post();
			
			$cek = $this->M_pengguna->login_pengguna($inputan);

			if($cek==TRUE)
			{
				redirect("admin/dashboard");
			}
			else
			{
				// pesan gagal
				$this->session->set_flashdata('pesan','login gagal');
				redirect("admin/pengguna/login");
			}

		}
		$data['judul'] = "Login Administrator";
		$this->load->view('admin/login',$data);
	}

	function tambah()
	{
		if($this->input->post())
		{
			$inputan = $this->input->post();
			$this->M_pengguna->simpan_pengguna($inputan);
			redirect("admin/dashboard");
		}
		$data['judul'] = "Ini tambah pengguna admin";
		$this->themeadmin->tampilkan('admin/tambahpengguna',$data);
	}
	function logout()
	{
		// mengahuncurkan session
		$this->session->unset_userdata('admin');
		redirect("admin/pengguna/login");
	}
}
?>