<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tmplate Web</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href=" bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href=" bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href=" dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href=" dist/css/skins/_all-skins.min.css">
 
  <link rel="stylesheet" href="select2-master/dist/css/select2.min.css"/>

  <link rel="stylesheet" href=plugins/timepicker/bootstrap-timepicker.min.css">
  
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">


  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

      <header class="main-header">
        <a href=" index.php" class="logo" >
          <span class="logo-lg"><img src="dist/img/ybp1.png" align="center" class="float-center"></span>
          <span class="logo-mini"><img src="dist/img/ybp1.png" align="center" class="float-center" width="100%"></span>
        </a>
      
        <nav class="navbar navbar-static-top">
           <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>


      <aside class="main-sidebar">

         <section class="sidebar">
 
            <form action="#" method="get" class="sidebar-form">
               <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat" ><i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
            </form>
     
           <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
             <a href="#">
                <i class="fa fa-dashboard"></i> <span>Beranda</span>
                <span class="pull-right-container">
                </span> 
                  <li class="treeview">
                     <a href="#">
                <span>Berita</span>
                </span>
                     </a>
                 </li>
              </a>
            </li>
        <li>
          <a href="#">
             <span>Data Pelanggan</span>
          </a>
        </li>
         
        <li class="treeview">
          <a href="#">
            <span>Kontak</span>
          </a>
        </li> 
      </section>
    </aside>

  
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
         <div class="col-md-12">
           <div class="box box-primary">
             <div class="box-header with-border">
                <h3 class="box-title">Formulir Data Pelanggan</h3>
              </div>
              <form role="form-responsive">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama</label>
                       <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama">
                  </div>

                  <div class="form-group">
                    <label>Kota Lahir </label>
                        <select id="kota"  class="form-control" style="width: 100%">
                          <option value=""></option>
                          <option value="Jakarta">Jakarta</option>
                          <option value="Bogor">Bogor</option>
                          <option value="Depok">Depok</option>
                          <option value="Tangerang">Tangerang</option>
                          <option value="Bekasi">Bekasi</option>
                          <option value="Bandung">Bandung</option>
                          <option value="Semarang">Semarang</option>
                          <option value="Yogyakarta">Yogyakarta</option>
                          <option value="Surabaya">Surabaya</option>
                        </select>
                </div>

                <div class="form-group">
                    <label>Tanggal lahir</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                     <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
               </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control"  placeholder="Alamat">
                </div>

                <div class="form-group">
                  <label ">Email</label>
                  <input type="email" class="form-control"  placeholder="Email">
                </div>

                <div class="form-group">
                  <label >No. Handpone</label>
                  <input type="text" class="form-control"  placeholder="No. Handpone">
                </div>

                 <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                </div>
              </div>
              

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Pelanggan</h3>
            </div>

            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No.Handpone</th>
                  <th>OPSI</th>
                </tr>
                </thead>
                <tbody>
               
                <tr>
                  <td>Mukti Wibowo</td>
                  <td>Jalan Hj. Nipan</td>
                  <td>mukti@gmail.com</td>
                  <td>08571212123</td>
                  <td align="center" width="15%"><button class="btn btn-primary" align="center">Edit</button> <button class="btn btn-primary" align="center">Hapus</button></td>
                </tr>
                 <tr>
                  <td>Mukti Wibowo</td>
                  <td>Jalan Hj. Nipan</td>
                  <td>mukti@gmail.com</td>
                  <td>08571212123</td>
                  <td align="center" width="15%"><button class="btn btn-primary" align="center">Edit</button> <button class="btn btn-primary" align="center">Hapus</button></td>
                </tr>
                </tbody>
                <tfoot>
            
                </tfoot>
              </table>
            </div>
          </div>           
        </div>
      </div>
    </section>
  </div> 
</div>

  <footer align="center">

    <div>
    <strong>Copyright &copy; 2018
  </footer>

<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script src="vendor/select2/dist/js/select2.min.js"></script>
<!-- jQuery 3 -->
<script src=" bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src=" bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src=" bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src=" bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src=" bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src=" bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src=" dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="jquery-2.1.4.min.js"></script>
<script src="select2-master/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#kota").select2({
                    placeholder: "Please Select"
                });
            });
        </script>

<script>
  $(function () {

    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
  })
</script>

</body>
</html>
