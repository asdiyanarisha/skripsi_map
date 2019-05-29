<?php  
class Mobil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_mobil');
		$this->load->model('M_map');
	}
	function index()
	{
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/pengguna/login");
		}
		
		$data['judul'] = "Halo ini halaman Peta";
		$data['mobil'] = $this->M_mobil->tampil_data();
		$this->themeadmin->tampilkan('admin/tampilmobil',$data);
	}
	function tambah()
	{
		if($this->input->post())
		{
			$inputan = $this->input->post();
			$this->M_mobil->simpan($inputan);
			redirect ("admin/mobil");
		}

		$data['judul'] = "Tambah ";
		$data['map'] = $this->M_map->tampil();
		$this->themeadmin->tampilkan("admin/tambah/addmobil",$data);
	}
	function ubah($id)
	{
		if($this->input->post())
		{
			$inputan = $this->input->post();
			$this->M_mobil->ubah($inputan,$id);
			redirect("admin/mobil");
		}

		// 1. mengambil data
		$data['judul']= "Ubah Data";
		$data['map'] = $this->M_map->tampil();
		$data['mobil'] = $this->M_mobil->ambil($id);


		// 2. menaruh di view ubahkategori
		$this->themeadmin->tampilkan("admin/ubah/editmobil",$data);
	}
	function hapus($id)
	{
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/pengguna/login");
		}

		$this->M_mobil->hapus($id);
		redirect("admin/mobil");
	}
}
?>