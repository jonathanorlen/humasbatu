<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class agenda extends MY_Controller {

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
		$data['konten'] = $this->load->view('agenda/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		

		$data['id'] = $this->input->post("id");
		$data['judul_kegiatan'] = $this->input->post("judul_kegiatan");
		$data['tanggal_mulai'] = $this->input->post("tanggal_mulai");
        $data['tanggal_selesai'] = $this->input->post("tanggal_selesai");
		$data['isi'] = $this->input->post("isi");
		$data['status'] = $this->input->post("status");
		$data['jam_mulai'] = $this->input->post("jam_mulai");
		$data['jam_selesai'] = $this->input->post("jam_selesai");
		$this->db->insert("agenda", $data);
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
	}	

	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('agenda/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('agenda/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('agenda/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {

		$data['judul_kegiatan'] = $this->input->post("judul_kegiatan");
		$data['tanggal_mulai'] = $this->input->post("tanggal_mulai");
        $data['tanggal_selesai'] = $this->input->post("tanggal_selesai");
		$data['isi'] = $this->input->post("isi");
		$data['status'] = $this->input->post("status");
		$data['jam_mulai'] = $this->input->post("jam_mulai");
		$data['jam_selesai'] = $this->input->post("jam_selesai");
		$id = $this->input->post("id");
		$this->db->update("agenda", $data, "id = " . $id);
		echo '<div class="alert alert-success">Berhasil diubah.</div>';
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('agenda', array('id' => $key));
		echo '<div class="alert alert-success">Berita sudah dihapus.</div>';    
	}
}
