<?php
class Pencarian extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_map');
		$this->load->model('M_mobil');

	}
	function hasil()
	{
		$data['judul'] = "Pencarian";
		$kata = $this->input->post("kata_kunci");
		$data['kata_kunci'] = $kata;
		$data['pencarian'] = $this->M_map->cari_map($kata);
		// $data['map'] = $this->M_map->tampil_map_hasil();

		$this->load->view("pencarian",$data);

	}
}