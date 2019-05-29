<?php  
class Map extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_map');
	}
	function index()
	{
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/pengguna/login");
		}
		
		$data['judul'] = "Halo ini halaman Peta";
		$data['map'] = $this->M_map->tampil();
		$this->themeadmin->tampilkan('admin/tampilmap',$data);
	}
	function tambah()
	{
		if($this->input->post())
		{
			$inputan = $this->input->post();
			$this->M_map->simpan($inputan);
			redirect ("admin/map");
		}

		$data['judul'] = "Tambah ";
		$this->themeadmin->tampilkan("admin/tambah/addmap",$data);
	}
	function ubah($id)
	{
		if($this->input->post())
		{
			$inputan = $this->input->post();
			$this->M_map->ubah($inputan,$id);
			redirect("admin/map");
		}

		// 1. mengambil data
		$data['judul']= "Ubah Data";
		$data['map'] = $this->M_map->ambil($id);


		// 2. menaruh di view ubahkategori
		$this->themeadmin->tampilkan("admin/ubah/editmap",$data);
	}
	function hapus($id)
	{
		if(!$this->session->userdata('admin'))
		{
			redirect("admin/pengguna/login");
		}

		$this->M_map->hapus($id);
		redirect("admin/map");
	}
	function detail_map($id)
	{
		$data['map'] = $this->M_map->ambil($id);
		$data['detail'] = $this->M_map->ambil_data_map($id);
		$this->themeadmin->tampilkan("admin/detailmapinfo",$data);
	}

}
?>