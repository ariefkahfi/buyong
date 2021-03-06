<!DOCTYPE html>
<html>
<head>
  <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <?php $this->load->view('inc/head'); ?>
  
</head>
<body class="skin-blue">
  <!-- wrapper di bawah footer -->
  <div class="wrapper">

    <?php $this->load->view('inc/head2'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <?php $this->load->view('inc/sidebar'); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <center><b>DATA JABATAN</b> </center>

        </h1>
          <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">

              <div class="box">
                <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
                <div class="box-title">
                  
                </div><!-- /.box-title -->
                <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>JABATAN</th>
                      <th>TANGGAL INPUT</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; foreach($data_jabatan as $row) { $no++ ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row['jabatan']; ?></td>
                      <td><?php echo $row['tgl_input_jab']; ?></td>
                      <td>
                      <a class="btn btn-warning data-toggle="tooltip" data-placement="left" title="Edit Disini"" href="<?php echo base_url(); ?>jabatan/editjabatan/<?php echo $row['id_jab']; ?>"><i class="fa fa-pencil"></i></a>
                      <a onclick="return confirm('Hapus data??');" class="btn btn-danger data-toggle="tooltip" data-placement="left" title="Hapus data" href="<?php echo base_url(); ?>jabatan/hapuskat/<?php echo $row['id_jab']; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6">
            <!-- Chat box -->
            <div class="box">
              <div class="box-header">
                <i class="fa fa-plus"></i>
                <h3 class="box-title">FORM TAMBAH/EDIT JABATAN</h3>
              </div>
              <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                <div class="item">
                  <form role="form" action="<?php echo base_url(); ?>jabatan/savedata" method="post">
                    <div class="form-group">
                      <label for="namalengkap">Nama Jabatan</label>
                        <input type="text" class="form-control" value="<?php echo $jabatan; ?>" id="" name="jabatan" placeholder="Ubah jabatan" required>

                      <label for="namalengkap">Tanggal Input </label>
                        <input type="text" class="form-control" value="<?php echo $tgl_input_jab; ?>" id="" name="tgl_input_jab" placeholder="Ubah tanggal input " required>

                        <!-- <input type="text" class="form-control" value="<?php echo $jabatan; ?>" id="" name="jabatan" placeholder="Isikan jabatan" required> -->
                        
                    </div>
                    <input type="hidden" name="id_jab" value="<?php echo $id_jab; ?>" />
                    <input type="hidden" name="tgl_input_jab" value="<?php echo $tgl_input_jab; ?>" />
                    <input type="hidden" name="status" value="<?php echo $status; ?>" />
                    <div class>
                      <button type="submit" class="btn btn-primary data-toggle="tooltip" data-placement="left" title="Simpan Data">Simpan</button>
                      <?php if($status == "baru"){ echo '<button type="reset" class="btn btn-warning data-toggle="tooltip" data-placement="left" title="Batal edit">Batal</button>';?>
                      <?php } else { ?> 
                      <a href="<?php echo base_url(); ?>jabatan" class="btn btn-warning data-toggle="tooltip" data-placement="left" title="Kembali kehalaman jabatan">Kembali</a>
                      <?php } ?>
                    </div><!-- /.col -->
                  </form>
                </div><!-- /.item -->
               
              </div><!-- /.chat -->
            </div><!-- /.box (chat box) -->
          </section><!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

          </section><!-- right col -->
        </div><!-- /.row (main row) -->

      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <!-- <b>Version</b> 2.0 -->
      </div>
     
    </footer>
  </div><!-- ./wrapper -->
  <!-- page script -->
  

    
    <?php $this->load->view('inc/footer'); ?>
    <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false


        });
      });
            //waktu flash data :v
      $(function(){
      $('#pesan-flash').delay(4000).fadeOut();
      $('#pesan-error-flash').delay(5000).fadeOut();
      });
    </script>
</body>
</html>