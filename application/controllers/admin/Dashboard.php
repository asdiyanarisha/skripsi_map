<?php  
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/pengguna/login");
		}
		
		$data['judul'] = "Halo ini halaman admin";
		$this->themeadmin->tampilkan('admin/home',$data);
	}
}
?>