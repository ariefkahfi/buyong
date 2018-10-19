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
        

<br>
<br>
<center> <H3> DATA ABSENSI </H3> </center>

          <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-">
            <!-- <a style="margin-bottom:3px" href="<?php echo base_url(); ?>karyawan/addkaryawan" class="btn btn-primary no-radius dropdown-toggle"><i class="fa fa-plus"></i> TAMBAH KARYAWAN </a> -->
              <div class="box">
                <!-- <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span> -->
                <div class="box-title">
                  
                </div><!-- /.box-title -->
                <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NIP POS</th>
                      <th>NAMA</th>
                      <th>JABATAN</th>
                      <th>TANGGAL</th>
                      <th>JAM</th>
                      <th>STATUS</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; foreach($data_absensi as $row) { $no++ ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row['nippos']; ?></td>
                      <td><?php echo $row['nama_kar']; ?></td>
                      <td><?php echo $row['jabatan']; ?></td>
                      <td><?php echo $row['tanggal']; ?></td>
                      <td><?php echo $row['jammasuk']; ?></td>
                      <td><?php echo $row['statuspost'];  ?> </td>
                       <td><?php if ($row['kodeabsensi'] == 1) { ?>
                     <h4><span class="label label-success">Masuk</span></h4>
                      <?php } else { ?>
                      <h4><span style="text-fonts:16px" class="label label-danger">Pulang</span></h4>
                      <?php } ?>
                    </td>
                      <td>
                      <a onclick="return confirm('SILAHKAN EDIT DATA DI BAWAH');" class="btn btn-warning data-toggle="tooltip" data-placement="left" title="Edit Disini" href="<?php echo base_url(); ?>absensi/editabsensi/<?php echo $row['id_abs']; ?>"><i class="fa fa-pencil"></i></a>
                      <a onclick="return confirm('Hapus data??');" class="btn btn-danger data-toggle="tooltip" data-placement="left" title="Hapus data" href="<?php echo base_url(); ?>absensi/hapuskat/<?php echo $row['id_abs']; ?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>

                    <tr>
                      <td>

<div>
  
                            <a href="update.php" class="btn btn-warning data-toggle="tooltip" data-placement="left" title=" APPROVE Semua Absensi "> APPROVE ALL  </a>
                          </div>
  </td>
</tr>

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
                <h3 class="box-title">FORM EDIT </h3>
              </div>
              <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                <div class="item">
                  <form role="form" action="<?php echo base_url(); ?>absensi/savedata" method="post">
                    <div class="form-group">


                      <label for="namalengkap"> TANGGAL </label>
                        <input type="text" class="form-control" value="<?php echo $tanggal; ?>" id="" name="tanggal" placeholder=" Edit Tanggal " required>

                        <label for="namalengkap"> JAM </label>
                        <input type="text" class="form-control" value="<?php echo $jammasuk; ?>" id="" name="jammasuk" placeholder=" Edit Jam  " required>

                        <label for="namalengkap"> STATUS </label>
                        <input type="text" class="form-control" value="<?php echo $statuspost; ?>" id="" name="statuspost" placeholder="Edit Status " required>


                        

                      </div>
                       <input type="hidden" name="id_abs" value="<?php echo $id_abs; ?>" />
                    <div class>

                      <button type="submit" class="btn btn-primary data-toggle="tooltip" data-placement="left" title="Menyimpan perubahan"> Simpan </button>
                        <?php if($status == "baru"){ echo '<button type="reset" class="btn btn-warning data-toggle="tooltip" data-placement="left" title="Batal mengedit">Batal</button>';?>
                      <?php } else { ?> 
                      <a href="<?php echo base_url(); ?>absensi" class="btn btn-warning data-toggle="tooltip" data-placement="left" title="Kembali ke halaman Absensi ">Kembali</a>
                    <?php } ?>
                    </div><!-- /.col -->
                  </form>
                </div><!-- /.item -->
               
              </div><!-- /.chat -->
            </div><!-- /.box (chat box) -->
          </section><!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
      

                   
                    
                      </td>
                    </tr>
              
                  </tbody>
                </table>
              </div>
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
        <!-- Main row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <!-- <b>Version</b> 2.0 -->
      </div>
      <strong>Copyright &copy; 2015 <a href="#"></a></strong>
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