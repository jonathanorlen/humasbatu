<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class komentar_artikel extends MY_Controller {

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
	public function daftar()
	{
		$item = 
		$data['konten'] = $this->load->view('komentar_artikel/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('komentar_artikel/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	public function simpan_komentar() {
		
		$user = $this->session->userdata('astrosession');
		$petugas = $user->uname;

		$data['id'] = $this->input->post("id");
		$data['id_artikel'] = $this->input->post("id_artikel");
		$data['nama'] = $petugas;
		$data['komentar'] = $this->input->post("komentar_balasan");
		$data['tanggal'] = date("Y-m-d");
		$this->db->insert("komentar_artikel", $data);
		echo '<div class="alert alert-success">Sudah tersimpan.</div>';            
	}
}
