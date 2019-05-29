<?php 
class Themeadmin
{
	function __construct()
	{
		$this->ci =& get_instance();
	}

	function tampilkan($namafile, $datanya)
	{
		$data['konten'] = $this->ci->load->view($namafile,$datanya, TRUE);
		$this->ci->load->view('admin/themeadmin',$data);
	}
}
?>