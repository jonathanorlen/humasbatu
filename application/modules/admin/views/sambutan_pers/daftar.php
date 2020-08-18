<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> 
      Daftar Sambutan Pers
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Daftar Sambutan Pers</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->

        <div class="box">          
          <div class="box-body">
           <div class="sukses" ></div>
           <div class="box-footer clearfix">
            <a style="padding:13px;" class="btn btn-app green" href="<?php echo base_url() . 'admin/sambutan_pers/tambah' ?>">
              <i class="fa fa-edit"></i> Tambah
            </a>
          </div>
          <table id="tabel_daftar" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="50px;">ID</th>
                <th>Jenis Sambutan</th>
                <th>Judul</th>
				        <th>Isi</th>
                <th>Foto</th>
                <th width="150px;">Tanggal</th>
                <th width="133px;">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              $get_product =$this->db->get_where("sambutan",array('jenis_sambutan'=>'pers'));
              $hasil_product = $get_product->result();


              foreach ($hasil_product as $item) {
                  $string_foto = $item->foto;
                  list($name_img) = (explode('|',$string_foto));
                ?>                

                <tr>
                  <td><?php echo $item->id;?></td>
                  <td><?php echo $item->jenis_sambutan;?></td>
                  <td><?php echo $item->judul;?></td>
                  <td><?php echo $item->isi;?></td>
                  <td><img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" width="150" height="150"/></td>
				          <td><?php echo $item->tanggal;?></td>
                  <td><?php echo get_detail_edit_delete($item->id); ?></td>
                </tr>

                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Jenis Sambutan</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Foto</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->      

        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div>

<script>
$(document).ready(function() {
 

  $("a#hapus").click( function() {    
    var r =confirm("Anda yakin ingin menghapus data ini ?");
    if (r==true)
    {
      $.ajax( {  
        type :"post",  
        url :"<?php echo base_url() . 'admin/sambutan_pers/hapus' ?>",  
        cache :false,  
        data :({key:$(this).attr('key')}),
        success : function(data) { 
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/sambutan_pers/daftar' ?>";},1500);              
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;
    }
    else {}        
  });
 $('#tabel_daftar').dataTable();

} );


</script>