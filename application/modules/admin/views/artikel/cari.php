<div class="box_ajax">
<table id="tabel_daftar" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th width="50px;">ID</th>
      <th>Kategori</th>
      <th>Judul</th>
      <th>Isi</th>
      <th>Foto</th>
      <th width="150px;">Tanggal</th>
      <th width="133px;">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $kode_kategori = $this->input->post("key");
    $get_product =$this->db->get_where("artikel",array('nama_kategori'=>$kode_kategori));
    $hasil_product = $get_product->result();

    foreach ($hasil_product as $item) {
      $string_foto = $item->foto;
      list($name_img) = (explode('|',$string_foto));
      ?>                

      <tr>
        <td><?php echo $item->id;?></td>
        <td><?php echo $item->nama_kategori;?></td>
        <td><?php echo $item->judul;?></td>
        <td><?php echo $item->isi;?></td>
        <td><img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" width="150" height="150"/></td>
        <td><?php echo TanggalIndo($item->tanggal);?></td>
        <td><?php echo get_detail_edit_delete($item->id); ?></td>
      </tr>

      <?php } ?>

    </tbody>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Foto</th>
        <th>Tanggal</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
  </div>