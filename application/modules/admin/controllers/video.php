<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class video extends MY_Controller {

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
		$data['konten'] = $this->load->view('video/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		$user = $this->session->userdata('astrosession');

		$id  = $user->id;
		$petugas = $user->uname;

		$data['kode_petugas'] = $id;
		$data['nama_petugas'] = $petugas;
		$data['judul'] = $this->input->post("judul");
		$data['link'] = $this->input->post("link");
		$data['tanggal'] = date('Y-m-d');
			//$data['kategori_id'] = $this->input->post("kategori");
		$this->db->insert("video", $data);
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';    
			//echo $this->db->last_query();        
		
	}	

	public function daftar()
	{
		
		$data['konten'] = $this->load->view('video/daftar', NULL, TRUE);
		$this->load->view('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('video/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('video/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {

		$data['judul'] = $this->input->post("judul");
		$data['link'] = $this->input->post("link");
		$id 			    = $this->input->post("id");
		$data['tanggal'] = date('Y-m-d');
		$data['kode_petugas'] = $this->input->post("kode_petugas");
		$data['nama_petugas'] = $this->input->post("nama_petugas");
			//$data['kategori_id'] = $this->input->post("kategori");
		$this->db->update("video", $data, "id = " . $id);
			//echo $this->db->last_query();
		echo '<div class="alert alert-success">Berhasil diubah.</div>';
		
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('video', array('id' => $key));
		echo '<div class="alert alert-success">Data Video Berhasil Dihapus.</div>';    
	}
}