<?php 
class M_mobil extends CI_Model
{
	function tampil()
	{
		// select * from kategori
		$query = $this->db->get('mobil');
		$dataarray = $query->result_array();
		return $dataarray;
	}
	public function tampil_data()
	{
		$this->db->select('*');
		$this->db->from('mobil');
		// $this->db->join('pengguna','pengguna.id_pengguna = berita.id_pengguna');
		$this->db->join('map','map.id_map = mobil.id_map');


		$query = $this->db->get();

		
		$dataarray = $query->result_array();

		
		return $dataarray;
	}
	public function tampil_random()
	{

		$this->db->select('*');
		$this->db->from('mobil');
		// $this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk');
		$this->db->order_by("mobil.id_mobil",'RANDOM');
		$this->db->limit(3);


		$query = $this->db->get();

		
		$dataarray = $query->result_array();

		
		return $dataarray;

	}
	function simpan($inputan)
	{

		$config['upload_path']		='./assets/';
		$config['allowed_types']		='gif|jpg|jpeg|png';
		
		$this->upload->initialize($config);

		$this->upload->do_upload('foto');

		$uploadgambar = $this->upload->data();

		$inputan['foto_mobil'] = $uploadgambar['file_name'];

		$disimpan = elements(array('id_map','nama_mobil','foto_mobil','harga','deskripsi'),$inputan,"-");

		$this->db->insert('mobil',$disimpan);
	}
	function hapus($id)
	{
		// query hapus berita
		$this->db->where('id_mobil',$id);
		$this->db->delete('mobil');
	}
	function ambil($id)
	{
		$this->db->select('*');
		$query = $this->db->get_where('mobil',array('id_mobil'=>$id));
		return $query->row_array();
	}
	function ubah($inputan,$id)
	{

		$config['upload_path']		='./assets/';
		$config['allowed_types']		='gif|jpg|png';
		$this->upload->initialize($config);
		// jika gambar diganti

		if($this->upload->do_upload('foto_mobil'))
		{
			$uploadgambar = $this->upload->data();
			$inputan['foto_mobil'] = $uploadgambar['file_name'];
			$datainputan = elements(array('id_map','nama_mobil','foto_mobil','harga','deskripsi'),$inputan,"-");
		}
		// selain itu gambar tidak diganti
		else
		{

			$datainputan = elements(array('id_map','nama_mobil','harga','deskripsi'),$inputan,"-");
			
		}
		
		$this->db->where('id_mobil',$id);
		$this->db->update('mobil',$datainputan);
	}
}
?>