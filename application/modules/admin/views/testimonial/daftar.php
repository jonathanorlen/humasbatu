<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> 
      Daftar Testimonial
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Daftar Testimonial</li>
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
           <table id="tabel_daftar" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="50px;">ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Isi</th>
                <th width="133px;">Tanggal</th>
                <th width="200px;">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php 

              $get_product = $this->db->get('testimonial');
              $hasil_product = $get_product->result_array();

              foreach ($hasil_product as $item) {
                ?>                

                <tr>
                  <td><?php echo $item['id'];?></td>
                  <td><?php echo $item['nama'];?></td>
                  <td><?php echo $item['email'];?></td>
                  <td><?php echo $item['isi'];?></td>
                  <td><?php echo TanggalIndo($item['tanggal']);?></td>
                  <td><?php echo get_detail($item['id']); ?></td>
                </tr>

                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                  <th width="50px;">ID</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Isi</th>
                  <th>Tanggal</th>
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
          url :"<?php echo base_url() . 'admin/testimonial/hapus' ?>",  
          cache :false,  
          data :({key:$(this).attr('key')}),
          success : function(data) { 
            $(".sukses").html(data);   
            setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/testimonial/daftar' ?>";},1500);              
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