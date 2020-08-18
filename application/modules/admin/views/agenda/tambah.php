
<script type="text/javascript">
  $(function () {

    $(".select2").select2();

    $("#data_form").submit( function() {    
      $.ajax( {  
        type :"post",  
        url : "<?php echo base_url() . 'admin/agenda/simpan_tambah' ?>",  
        cache :false,  
        data :$(this).serialize(),
        success : function(data) {  
          $(".sukses").html(data);   
          setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/agenda/daftar' ?>";},1500);              
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
      Tambah Agenda
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin').'/dasboard' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">user</li>
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
            <h3 class="box-title">Tambah</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">              
            </div><!-- /. tools -->
          </div>
          <div class="box-body">            
            <div class="sukses" ></div>
            <form method="post" id="data_form">
             <div class="form-group">
              <div class="form-group">
                <label>Judul Agenda</label>
                <input type="text" class="form-control" name="judul_kegiatan" placeholder="Judul Agenda" required/>
              </div>
              <div class="form-group">
                <label>Tanggal Mulai</label>
                <input type="date" class="form-control" name="tanggal_mulai" placeholder="" required="" />
              </div>
              <div class="form-group">
                <label>Tanggal Selesai</label>
                <input type="date" class="form-control" name="tanggal_selesai" placeholder="" required="" />
              </div>
              <div>
                <label>Isi</label>
                <textarea name="isi" class="textarea" placeholder="Deskripsi Agenda" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <div class="form-group">
                <label>Jam Mulai</label>
                <input type="time" class="form-control" name="jam_mulai" placeholder="" required="" />
              </div>
              <div class="form-group">
                <label>Jam Selesai</label>
                <input type="time" class="form-control" name="jam_selesai" placeholder="" required="" />
              </div>
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" tabindex="-1" aria-hidden="true" name="status">
                  <option value="1">Aktif</option>
                  <option value="0">Tidak Aktif</option>
                </select>
              </div>
              <div class="box-footer clearfix">
               <button type="submit" class="pull-right btn btn-default" id="sendEmail">Simpan <i class="fa fa-arrow-circle-right"></i></button>
               <input type="button" class="btn default pull-right btn " value="Kembali"  style="margin-right: 5px;" onclick="history.go(-1);">
             </div>
           </form>
         </div>
       </div>
     </section><!-- /.Left col -->      
   </div><!-- /.row (main row) -->

 </section><!-- /.content -->
</div><!-- /.content-wrapper -->
