<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kategori Artikel     
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Daftar Kategori Artikel</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->


        <div class="box">          
          <div class="box-footer clearfix">
            <a style="padding:13px;" class="btn btn-app green" href="<?php echo base_url() . 'admin/Kategori_artikel/tambah' ?>">
              <i class="fa fa-edit"></i> Tambah
            </a>
          </div>
          <div class="box-body">
           <div class="sukses" ></div>
           <table id="tabel_daftar" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="50px;">ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
                <th width="133px;">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              $get = $this->db->get('Kategori_artikel');
              $hasil_get = $get->result();

              foreach ($hasil_get as $item) {                

                ?>                

                <tr>
                  <td><?php echo $item->id;?></td>
                  <td><?php echo $item->kode_kategori;?></td>
                  <td><?php echo $item->nama_kategori;?></td>
                  <td><?php echo get_detail_edit_delete($item->id); ?></td>
                </tr>

                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                  <th width="50px;">ID</th>
                  <th>Kode Kategori</th>
                  <th>Nama Kategori</th>
                  <th width="133px;">Action</th>
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
          url :"<?php echo base_url() . 'admin/kategori_artikel/hapus' ?>",  
          cache :false,  
          data :({key:$(this).attr('key')}),
          success : function(data) { 
            $(".sukses").html(data);   
            setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/kategori_artikel/daftar' ?>";},1500);              
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