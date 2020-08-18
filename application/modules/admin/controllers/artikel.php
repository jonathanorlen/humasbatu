<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();			
		if ($this->session->userdata('astrosession') == FALSE) {
			redirect(base_url('authenticate'));			
		}
	}

	public function tambah()
	{
		$data['konten'] = $this->load->view('artikel/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$user = $this->session->userdata('astrosession');

		$id  = $user->id;
		$petugas = $user->uname;


		$data['kode_kategori'] = $this->input->post("kode_kategori");
		$data['nama_kategori'] = $this->input->post("nama_kategori");
		$data['judul'] = $this->input->post("judul");
		$data['isi'] = $this->input->post("isi");
		$data['kode_petugas'] = $id;
		$data['nama_petugas'] = $petugas; 
        $data['bulan'] = date("m");
        $data['tahun'] = date("Y"); 
		$name_foto = $this->input->post("foto_name_upload");		
		$foto = '';
		for($i=0; $i < count($name_foto); $i++)
		{				
			$foto = $name_foto[$i].'|'.$foto;				

		} 			

		$data['foto'] = $foto;
		$data['tanggal'] = date('Y-m-d');
			//$data['kategori_id'] = $this->input->post("kategori");
		$this->db->insert("artikel", $data);
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';    
			//echo $this->db->last_query();    

		
	}	
	public function get_kode()
	{
		
		$kode=$this->input->post("kode_kategori");
		$this->db->where('kode_kategori',$kode);
		$get = $this->db->get("kategori_artikel");
		$hasil_get = $get->row();

		echo json_encode($hasil_get);
	}

	public function daftar()
	{
		
		$data['konten'] = $this->load->view('artikel/daftar', NULL, TRUE);
		$this->load->view('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('artikel/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('artikel/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function cari()
	{
		
		$data['key'] = $this->input->post("key");
		$this->load->view ('artikel/cari');
	}
	
	public function simpan_ubah() {

		$data['kode_kategori'] = $this->input->post("kode_kategori");
		$data['nama_kategori'] = $this->input->post("nama_kategori");
		$data['judul'] = $this->input->post("judul");
		$data['isi'] = $this->input->post("isi");
		$id 			    = $this->input->post("id");
		$data['tanggal'] = date('Y-m-d');
		$data['kode_petugas'] = $this->input->post("kode_petugas");
		$data['nama_petugas'] = $this->input->post("nama_petugas");
        $data['bulan'] = date("m");
        $data['tahun'] = date("Y");
		
		$get_old_file = $this->db->query("SELECT * FROM artikel where id='$id'");
		$hasil_old_file = $get_old_file->row();
		$string_file = $hasil_old_file->foto;
		list($name_old_file) = (explode('|',$string_file));			

		$name_foto = $this->input->post("foto_name_upload");

		if (!empty($name_foto)) {
			$path = $_SERVER['DOCUMENT_ROOT'].'/SC/component/upload/foto/uploads/'.$name_old_file;

				//unlink($path);
		}

		$foto = '';
		for($i=0; $i < count($name_foto); $i++)
		{				
			$foto = $name_foto[$i].'|'.$foto;				
		} 

		if (!empty($name_foto)) {
			$data['foto'] = $foto;
		}

			//$data['kategori_id'] = $this->input->post("kategori");
		$this->db->update("artikel", $data, "id = " . $id);
			//echo $this->db->last_query();
		echo '<div class="alert alert-success">Berhasil diubah.</div>';

	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('artikel', array('id' => $key));
		echo '<div class="alert alert-success">Product sudah dihapus.</div>';    
	}
}