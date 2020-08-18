<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengalaman_kerja extends MY_Controller {

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
		$data['konten'] = $this->load->view('pengalaman_kerja/tambah', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function simpan_tambah() {
		
			$data['judul'] = $this->input->post("judul");
			$data['isi'] = $this->input->post("isi");
            $data['tanggal'] = date('Y-m-d');
			$name_foto = $this->input->post("foto_name_upload");		
			$foto = '';
			for($i=0; $i < count($name_foto); $i++)
			{				
				$foto = $name_foto[$i].'|'.$foto;				

			} 			

			$data['foto'] = $foto;
			//$data['kategori_id'] = $this->input->post("kategori");
			$this->db->insert("pengalaman_kerja", $data);
			echo '<div class="alert alert-success">Sudah tersimpan.</div>';    
			//echo $this->db->last_query();        
		
	}	

	public function daftar()
	{
		//$item = 
		$data['konten'] = $this->load->view('pengalaman_kerja/daftar', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function detail()
	{
		$data['konten'] = $this->load->view('pengalaman_kerja/detail', NULL, TRUE);
		$this->load->view ('main', $data);
	}

	public function ubah()
	{
		$data['konten'] = $this->load->view('pengalaman_kerja/ubah', NULL, TRUE);
		$this->load->view ('main', $data);
	}
	
	public function simpan_ubah() {

			$data['judul'] 		= $this->input->post("judul");
			$data['isi'] = $this->input->post("isi_product");  
			$id 			    = $this->input->post("id");
            
			$get_old_file = $this->db->query("SELECT * FROM pengalaman_kerja where id='$id'");
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
			$this->db->update("pengalaman_kerja", $data, "id = " . $id);
			//echo $this->db->last_query();
			echo '<div class="alert alert-success">Berhasil diubah.</div>';
		
	}

	public function hapus() {      
		$key = $_REQUEST['key'];
		$this->db->delete('pengalaman_kerja', array('id' => $key));
		echo '<div class="alert alert-success">Product sudah dihapus.</div>';    
	}
}