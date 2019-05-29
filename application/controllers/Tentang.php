<?php
class Tentang extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_map');

	}
	public function index()
	{
		$data['judul'] = "GIS Asrama";
		$data['map'] = $this->M_map->tampil();
		$this->load->view("tentang",$data);
	}
}