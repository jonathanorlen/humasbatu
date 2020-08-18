<div class="content-wrapper" style="min-height: 916px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> 
      Daftar Artikel
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Daftar Artikel</li>
    </ol>
  </section>

<div class="form-group">
              <div class="col-md-4">
              <br>
              <select id="kode_kategori" name="kode_kategori" class="form-control" required="" style="margin-top: 10px">
                <option value="">Filter by Kategori :</option >
                  <?php 
              $get_cari =$this->db->get("kategori_artikel");
              $hasil_get_cari = $get_cari->result();

              foreach ($hasil_get_cari as $cari) {
                  ?>
                  <option value="<?php echo $cari->nama_kategori;?>"><?php echo $cari->nama_kategori;?></option>

              <?php } ?>
                </select>
              </div>
            </div>
    <button style="margin-top: 15px;" type="submit" class="btn blue" id="btncari">Submit</button>


  


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->

        <div class="box">          
          <div class="box-body">
           <div class="sukses" ></div>
           <div class="box-footer clearfix">
            <a style="padding:13px;" class="btn btn-app green" href="<?php echo base_url() . 'admin/artikel/tambah' ?>">
              <i class="fa fa-edit"></i> Tambah
            </a>
          </div>
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

              $get_product =$this->db->get("artikel");
              $hasil_product = $get_product->result_array();

              foreach ($hasil_product as $item) {
                $string_foto = $item['foto'];
                list($name_img) = (explode('|',$string_foto));
                ?>                

                <tr>
                  <td><?php echo $item['id'];?></td>
                  <td><?php echo $item['nama_kategori'];?></td>
                  <td><?php echo $item['judul'];?></td>
                  <td><?php echo substr($item['isi'],0,100);?></td>
                  <td><img alt="" class="img-responsive zoom-img" src="<?php echo base_url().'component/upload/foto/uploads/'.$name_img; ?>" width="150" height="150"/></td>
                  <td><?php echo TanggalIndo($item['tanggal']);?></td>
                  <td><?php echo get_detail_edit_delete($item['id']); ?></td>
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
          url :"<?php echo base_url() . 'admin/artikel/hapus' ?>",  
          cache :false,  
          data :({key:$(this).attr('key')}),
          success : function(data) { 
            $(".sukses").html(data);   
            setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/artikel/daftar' ?>";},1500);              
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

$(function () {

          $("#btncari").click(function()

          {
            var kategori = $('#kode_kategori').val();

            $.ajax( {  
              type :"post",  
              url : "<?php echo base_url() . 'admin/artikel/cari' ?>",  
              cache :false,  
              data :({key:kategori}),
              success : function(data) {  
                $(".box_ajax").html(data); 
                              delete_art();
              },  
              error : function() {  
                alert("Data gagal dimasukkan.");  
              }  
            });

            return false;   


          });

        });

</script>
<script type="text/javascript">
  function delete_art()
  {
     $("a#hapus").click( function() {    
      var r =confirm("Anda yakin ingin menghapus data ini ?");
      if (r==true)
      {
        $.ajax( {  
          type :"post",  
          url :"<?php echo base_url() . 'admin/artikel/hapus' ?>",  
          cache :false,  
          data :({key:$(this).attr('key')}),
          success : function(data) { 
            $(".sukses").html(data);   
            setTimeout(function(){$('.sukses').html('');window.location = "<?php echo base_url() . 'admin/artikel/daftar' ?>";},1500);              
          },  
          error : function() {  
            alert("Data gagal dimasukkan.");  
          }  
        });
        return false;
      }
      else {}        
    });
  }
</script>
