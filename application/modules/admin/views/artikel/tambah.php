<script type="text/javascript">
  $(function () {

    $(".select2").select2();

    $("#data_form").submit( function() {    
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/artikel/simpan_tambah' ?>",  
        cache :false,  
        data :$(this).serialize(),
        success : function(data) {  
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo
            base_url() . 'admin/artikel/daftar' ?>";},1500);              
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;                          
    });   

    $("#upload_foto").click( function() {    
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'component/upload/foto' ?>",  
        cache :false,  
        data :$(this).serialize(),
        success : function(data) {  
          $(".box_upload").html(data);           
        },  
        error : function() {  
          alert("Data gagal dimasukkan.");  
        }  
      });
      return false;                          
    });   


  });
</script>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Artikel
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin') . '/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Artikel</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">             
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        
        <!-- TO DO List -->

        <!-- quick email widget -->
        <div class="box box-info">
          <div class="box-header">
            <i class="fa fa-envelope"></i>
            <h3 class="box-title">Tambah Artikel</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">              
            </div><!-- /. tools -->
          </div>
          <div class="box-body">            
            <div class="sukses" ></div>
            <form method="post" id="data_form">


              <div class="form-group">
                <label>Nama Kategori</label>
                <?php
                $unit =$this->db->get('kategori_artikel');
                $hasil_unit = $unit->result();
                ?>
                <select onchange="get_kode()" class="form-control" name="kode_kategori" id="kode_kategori" required>
                  <option selected="true"  value="">Pilih</option>
                  <?php foreach($hasil_unit as $item){ ?>
                  <option value="<?php echo $item->kode_kategori ?>" <?php if (@$hasil_peralatan->kode_kategori == $item->kode_kategori){echo'selected="true"';} ?> ><?php echo $item->nama_kategori ?></option>
                  <?php } ?>
                </select>
              </div> 




              <div class="form-group">
                <?php
                $user = $this->session->userdata('astrosession');

                $id  = $user->id;
                $petugas = $user->uname;
                ?>
                <input type="hidden" class="form-control" id="uname" name="uname" value="<?php echo $petugas ?>" />
                <input type="hidden" class="form-control" id="kode_uname" name="kode_uname" value="<?php echo $id ?>" />
                <input type="hidden" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" />
              </div> 

              <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Nama Judul" />
              </div> 

              <div>
                <label>Isi</label>
                <textarea name="isi" class="textarea" placeholder="Deskripsi Artikel" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <!-- <div>
                <label>Status Produk</label>
                <select name="status_produk" class="form-control" tabindex="-1" aria-hidden="true">
                  <option value="None"  >None</option>
                  <option value="New" >New</option>
                  <option value="Big Sale">Big Sale</option>
                  <option <?php echo 'selected="true"'; ?> >Restock</option>                        
                </select>
              </div> -->
              
              <div class="box-footer clearfix">
                <label>Upload Foto</label>
                <a class="btn btn-app blue" id="upload_foto">
                  <i class="fa fa-edit"></i> Image
                </a>
              </div>

              
              <div class="box_upload"></div>
              <div class="foto_upload"></div>
              <label> Keterangan : Ukuran gambar untuk upload foto 555x350</label> 
              <div class="box-footer clearfix">
                <button type="submit" class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                <input type="button" class="btn default pull-right btn " value="Kembali"  style="margin-right: 5px;" onclick="history.go(-1);">
              </div>
            </form>
          </div>
        </div>
      </section><!-- /.Left col -->      
    </div><!-- /.row (main row) -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<script type="text/javascript">

  $("#kode_kategori").change( function() {
    var kode_kategori = $('#kode_kategori').val();
    $.ajax( {  
      type :"post",  
      url :"<?php echo base_url().'admin/artikel/get_kode' ?>",  
      cache: false,
      dataType: 'json',
      data:{kode_kategori: kode_kategori},
      success : function(data) { 
        $('#nama_kategori').val(data.nama_kategori);
      },  
    });
    return false;
  });

</script>