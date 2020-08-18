<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MY_Controller {

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
	}

	public function index()
	{
		redirect(base_url('web/beranda'));
		
	}
	//--------------   home   ------------------------

	// public function index()
	// {
	// 	$this->load->view('general/index');

	// }

	public function general()
	{
		$data['aktif'] = 'general';
		$data['konten'] = $this->load->view('general/content', NULL, TRUE);
		$this->load->view ('main', $data);
		
	}

	//------------beranda----------------//
	public function beranda()
	{
		$data['aktif'] = 'beranda';
		$data['konten'] = $this->load->view('beranda/content', NULL, TRUE);
		$this->load->view ('main', $data);
		
	}	

	//------------informasi----------------//
	public function informasi()
	{
		$kategori = $this->uri->segment(3);
		$get_kategori = $this->db->get_where('artikel',array('kode_kategori'=>$kategori));
		$hasil = $get_kategori->result();
		$jumlah_data = count($hasil);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'web/informasi/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);
		$data['aktif'] = 'informasi';
		$this->db->where('kode_kategori',$kategori);
		$data['infone'] = $this->db->get('artikel',$config['per_page'],$from)->result();
		$data['konten'] = $this->load->view('informasi/content', $data, TRUE);
		$this->load->view ('main', $data);

	}	


	public function detail_informasi()
	{
		$data['aktif'] = 'informasi';
		$data['konten'] = $this->load->view('informasi/detail_informasi', NULL, TRUE);
		$this->load->view ('main', $data);
		
	}	
	public function detail_info_kuliner()
	{
		$data['aktif'] = 'informasi';
		$data['konten'] = $this->load->view('informasi/detail_info_kuliner', NULL, TRUE);
		$this->load->view ('main', $data);
		
	}

	public function tambah_view()
	{
		$kode= $this->input->post("id");
		$get_art = $this->db->get_where("artikel",array('id'=>$kode));
		$hasil_get_art = $get_art->row();

		$data['jumlah_view'] = $hasil_get_art->jumlah_view + 1;
		$this->db->update("artikel", $data,array('id'=>$kode));
		
	}

	public function detail_kategori()
	{
		$data['aktif'] = 'kategori_artikel';
		$data['konten'] = $this->load->view('kategori_artikel/detail_kategori', NULL, TRUE);
		$this->load->view ('main', $data);
		
	}	

	//-------------profil------------------//
	public function profil()
	{
		$data['aktif'] = 'profil';
		$data['konten'] = $this->load->view('profil/content', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function sejarah_batu()
	{
		$data['aktif'] = 'profil';
		$data['konten'] = $this->load->view('profil/sejarah_batu', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function visi_pemkot()
	{
		$data['aktif'] = 'profil';
		$data['konten'] = $this->load->view('profil/visi_pemkot', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function struktur_pemkot()
	{
		$data['aktif'] = 'profil';
		$data['konten'] = $this->load->view('profil/struktur_pemkot', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function visi_humas()
	{
		$data['aktif'] = 'profil';
		$data['konten'] = $this->load->view('profil/visi_humas', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function struktur_humas()
	{
		$data['aktif'] = 'profil';
		$data['konten'] = $this->load->view('profil/struktur_humas', NULL, TRUE);
		$this->load->view ('main', $data);

	}


	//------------agenda----------------//
	public function agenda()
	{
		$data['aktif'] = 'agenda';
		$data['konten'] = $this->load->view('agenda/content', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function detail_agenda()
	{
		$data['aktif'] = 'detail_agenda';
		$data['konten'] = $this->load->view('agenda/detail_agenda', NULL, TRUE);
		$this->load->view ('main', $data);

	}



	public function event()
	{
		$data['aktif'] = 'event';
		$data['konten'] = $this->load->view('agenda/event', NULL, TRUE);
		$this->load->view ('main', $data);

	}



	//------------sambutan----------------//
	public function sambutan()
	{	
		$kode = $this->uri->segment(3);
		$sambutan = $this->db->get_where('sambutan',array('jenis_sambutan'=>$kode));
		$hasil_sambutan = $sambutan->result();
		$jumlah_data = count($hasil_sambutan);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'web/sambutan/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);
		$data['aktif'] = 'sambutan';
		$this->db->where('jenis_sambutan',$kode);
		$data['sambutane'] = $this->db->get('sambutan',$config['per_page'],$from)->result();
		$data['konten'] = $this->load->view('sambutan/content', $data, TRUE);
		$this->load->view ('main', $data);

	}


	public function detail_sambutan()
	{
		$data['aktif'] = 'sambutan';
		$data['konten'] = $this->load->view('sambutan/detail_sambutan', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	//-----------download-------------//
	public function download()
	{
		$kode = $this->uri->segment(3);
		$get = $this->db->get_where('download', array('jenis_dokumen' => $kode));
		$hasil_get = $get->result_array();
		$jumlah_data = count($hasil_get);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'web/download/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(2);
		$this->pagination->initialize($config);
		$data['aktif'] = 'download';
		$this->db->where('jenis_dokumen',$kode);
		$data['downloadne'] = $this->db->get('download',$config['per_page'],$from)->result_array();
		$data['konten'] = $this->load->view('download/content', $data, TRUE);
		$this->load->view ('main', $data);

		

	}

	public function detail_download()
	{
		$data['aktif'] = 'download';
		$data['konten'] = $this->load->view('download/detail_download', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	//------------berita----------------//
	/*public function berita()
	{
		$data['aktif'] = 'berita';
		$data['konten'] = $this->load->view('berita/content', NULL, TRUE);
		$this->load->view ('main', $data);

	}*/

	public function berita(){
		$jumlah = $this->db->get_where('artikel',array('kode_kategori'=>'001'));
		$hasil_data = $jumlah->result();
		$jumlah_data = count($hasil_data);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'web/berita/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);	
		$data['aktif'] = 'berita';
		$this->db->where('kode_kategori','001');
		$data['beritane'] = $this->db->get('artikel',$config['per_page'],$from)->result_array();
		$data['konten'] = $this->load->view('berita/content', $data,TRUE);
		$this->load->view ('main', $data);

		
	}

	public function detail_berita()
	{
		$data['aktif'] = 'berita';
		$data['konten'] = $this->load->view('berita/detail_berita', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	//------------buletin----------------//
	public function buletin()
	{
		$get = $this->db->get_where('artikel', array('nama_kategori' => 'Buletin'));
		$hasil_get = $get->result();
		$jumlah_data = count($hasil_get);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'web/buletin/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(2);
		$this->pagination->initialize($config);
		$data['aktif'] = 'buletin';
		$this->db->where('nama_kategori','Buletin');
		$data['buletine'] = $this->db->get('artikel',$config['per_page'],$from)->result_array();
		$data['konten'] = $this->load->view('buletin/content', $data, TRUE);
		$this->load->view ('main', $data);

	}





	public function detail_buletin()
	{
		$data['aktif'] = 'buletin';
		$data['konten'] = $this->load->view('buletin/detail_buletin', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	//------------galeri----------------//
	public function galeri()
	{
		$data['aktif'] = 'galeri';
		$data['konten'] = $this->load->view('galeri/content', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	//------------testimonial----------------//
	public function testimonial()
	{
		$data['aktif'] = 'testimonial';
		$data['konten'] = $this->load->view('testimonial/content', NULL, TRUE);
		$this->load->view ('main', $data);

	}


	//-------------kontak------------------//
	public function kontak()
	{
		$data['aktif'] = 'kontak';
		$data['konten'] = $this->load->view('kontak/content', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	//------------simpan testimonial--------//	
	public function simpan_tambah()
	{
		$data['id'] = $this->input->post("id");
		$data['nama'] = $this->input->post("nama");
		$data['email'] = $this->input->post("email");
		$data['tanggal'] = date("Y-m-d");
		$data['isi'] = $this->input->post("isi");
		$data['status'] = $this->input->post("status");
		$this->db->insert("testimonial", $data);
		$data['konten'] = $this->load->view('testimonial/content', $data, TRUE);
		$this->load->view ('main', $data);
	}

    //----------ARSIP ARTIKEL--------------//
	public function arsip_artikel()
	{
		$data['aktif'] = 'arsip_artikel';
		$data['konten'] = $this->load->view('arsip_artikel/arsip_artikel', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function kategori_artikel()
	{
		$data['aktif'] = 'kategori_artikel';
		$data['konten'] = $this->load->view('kategori_artikel/kategori_artikel', NULL, TRUE);
		$this->load->view ('main', $data);

	}

	public function detail_artikel()
	{
		$data['aktif'] = 'detail_artikel';
		$data['konten'] = $this->load->view('kategori_artikel/detail_artikel', NULL, TRUE);
		$this->load->view ('main', $data);

	}
	//------------detail galleri-----------//
	public function detail_galeri()
	{
		$data['aktif'] = 'galeri';
		$data['konten'] = $this->load->view('galeri/detail_galeri', NULL, TRUE);
		$this->load->view ('main', $data);
		
	}

	public function simpan_komentar(){
		$data = $this->input->post();
		$this->db->insert('komentar_artikel',$data);
	}
}

