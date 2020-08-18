<?php
$id = $this->uri->segment(3);
$get = $this->db->query("SELECT * FROM galeri where id='$id'");
$hasil = $get->row();	
?>
<div data-lk="1" class="gallery_item_full">
	<div class="box">
		<?php
		$string_foto = $hasil->foto;
		list($name_img) = (explode('|',$string_foto)); 
		?>
		<img src="<?php echo base_url() . 'component/upload/foto/uploads/' . $name_img;?>" style="width:100px;" />
		<h3><?php echo $hasil->judul;?></h3>
		<p><?php echo $hasil->isi;?></p>
	</div>
</div>

