<?php 
class M_map extends CI_Model
{
	function tampil()
	{
		// select * from kategori
		$query = $this->db->get('map');
		$dataarray = $query->result_array();
		return $dataarray;
	}
	function tampil_map_hasil()
	{
		$this->db->select('*');
		$this->db->join('mobil','mobil.id_map=map.id_map');
		$query = $this->db->get("map");
		$pecah = $query->result_array();
		return $pecah;


	}
	public function tampil_random()
	{

		$this->db->select('*');
		$this->db->from('map');
		// $this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk');
		$this->db->order_by("map.id_map",'RANDOM');
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

		$inputan['foto'] = $uploadgambar['file_name'];

		$disimpan = elements(array('nama','alamat','telpon','jam_buka','foto','deskripsi','longt','lat'),$inputan,"-");

		$this->db->insert('map',$disimpan);
	}
	function hapus($id)
	{
		// query hapus berita
		$this->db->where('id_map',$id);
		$this->db->delete('map');
	}
	function ambil($id)
	{
		$this->db->select('*');
		$query = $this->db->get_where('map',array('id_map'=>$id));
		return $query->row_array();
	}
	function cari_map($kata)
	{
		
		$this->db->select('*');
		$this->db->join('mobil','mobil.id_map=map.id_map');
		// $this->db->order_by("berita.id_berita",'DESC');
		// $this->db->where("berita.status_berita","published");
		$this->db->where("mobil.nama_mobil LIKE '%$kata%' OR mobil.deskripsi LIKE '%$kata%'");
		$query = $this->db->get("map");
		$pecah = $query->result_array();
		return $pecah;

	}
	function ubah($inputan,$id)
	{

		$config['upload_path']		='./assets/';
		$config['allowed_types']		='gif|jpg|png';
		$this->upload->initialize($config);
		// jika gambar diganti

		if($this->upload->do_upload('foto'))
		{
			$uploadgambar = $this->upload->data();
			$inputan['foto'] = $uploadgambar['file_name'];
			$datainputan = elements(array('nama','alamat','telpon','jam_buka','foto','deskripsi','longt','lat'),$inputan,"-");
		}
		// selain itu gambar tidak diganti
		else
		{

			$datainputan = elements(array('nama','alamat','telpon','jam_buka','deskripsi','longt','lat'),$inputan,"-");
			
		}
		
		$this->db->where('id_map',$id);
		$this->db->update('map',$datainputan);
	}
	function ambil_data_map($id)
	{
		$this->db->select('*');
		$this->db->from('mobil');
		$this->db->join('map','map.id_map = mobil.id_map');
		$this->db->where("map.id_map",$id);

		$query = $this->db->get();

		
		$dataarray = $query->result_array();

		
		return $dataarray;
	}
}
?>