
<script type="text/javascript">
$(function () {

  $(".select2").select2();

  $("#data_form").submit( function() {    
    $.ajax( {  
      type :"post",  
      url : "<?php echo base_url() . 'admin/contact/simpan_tambah' ?>",  
      cache :false,  
      data :$(this).serialize(),
      success : function(data) {  
        $(".sukses").html(data);   
        setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/contact/daftar' ?>";},1500);              
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
      Contact Us
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
                <label>Isi</label>
                <textarea name="isi" class="textarea" placeholder="Isi" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>  
               <div class="form-group">
                <label>ID YM</label>
                <input type="text" class="form-control" name="id_ym" placeholder="ID YM" />
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="Email" class="form-control" name="email" placeholder="Email" />
              </div>
              <div class="form-group">
                <label>Telepon</label>
                <input type="text" class="form-control" name="telepon" placeholder="Telepon" />
              </div>
              <div class="form-group">
                <label>Handphone</label>
                <input type="text" class="form-control" name="handphone" placeholder="Handphone" />
              </div>
              <div class="form-group">
                <label>Pin BBM</label>
                <input type="text" class="form-control" name="pin_bb" placeholder="PIN BBM" />
              </div>                 
              <div class="form-group">
                <label>Fb</label>
                <input type="text" class="form-control" name="fb" placeholder="Facebook" />
              </div>
              <div class="form-group">
                <label>Instagram</label>
                <input type="text" class="form-control" name="ig" placeholder="Instagram" />
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
              </div>
            </form>
          </div>
        </div>
      </section><!-- /.Left col -->      
    </div><!-- /.row (main row) -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
