
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Logistik Fakultas</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
include "ceksession.php";
?>

    <div id="wrapper">

        <!-- Navigation -->
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homeAdmin.php">ADMIN</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                      <a href="../login.html">
                    <i class="fa fa-fw fa-power-off">
                    </i> Logout</a>
                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="homeAdmin.php"><i class="fa fa-fw fa-dashboard"></i> Panel</a>
                    </li>
                         <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i> Pengajuan Barang <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="insertpengajuan.php">Input Data Pengajuan</a>
                            </li>
                            <li>
                                <a href="insertdetail.php">Input Detail Pengajuan</a>
                            </li>
                            <li>
                                <a href="lihatpengajuan.php">View Data Pengajuan</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demox"><i class="fa fa-fw fa-desktop"></i> Kelola Data <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demox" class="collapse">
                            <li>
                                <a href="viewdatabarang.php">Kelola Data Barang </a>
                            </li>
                        </ul>
                    </li>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        
                         <p align="center">
                                
                                <div class="img">
                                    <a target="" href="">
                                    <center><img src="img/telu.jpg" alt="Klematis" width="110"height="90"></center>
                                    <center>Unit Logistik Fakultas Telkom University</center>
                                    </a>
                                </div>
                        </p>
                       <center>View Data pengajuan</center>  
                        </h1>
                        <p>

                                              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>ID Pengajuan </th>
                        <th>Nama barang</th>
                        <th>Jumlah </th>
                        <th>Diajukan Fakultas</th>
         
                        <th>Waktu Pengajuan</th>
                                       <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <?php
                    include "config.php";
                    
                    $Lihat="SELECT id_pengajuan,nama,jumlah,username,date,status FROM tabelpengajuan natural join tabeldetailpengajuan ORDER BY date asc";
                    $Tampil = mysql_query($Lihat);
                    $nomer=0;
                    while ( $hasil      = mysql_fetch_array ($Tampil)) {
                    $id_pengajuan        = stripslashes ($hasil['id_pengajuan']);
                    $nama        = stripslashes ($hasil['nama']);
                    $jumlah        = stripslashes ($hasil['jumlah']);
                    $username     = stripslashes ($hasil['username']);
                    $date     = stripslashes ($hasil['date']);
                    $status    = stripslashes ($hasil['status']);

                    {
                    $nomer++;

                ?>
                                                <tr>
                                                <td><?=$nomer?><div align="center"></div></td>
                                                <td><?=$id_pengajuan?><div align="center"></div></td>
                                                <td><?=$nama?><div align="center"></div></td>
                                                <td><?=$jumlah?><div align="center"></div></td>
                                                <td><?=$username?><div align="center"></div></td>
                                                <td><?=$date?><div align="center"></div></td>
                                                
                                              
                                                <td>
                                                  <?php
                                                if ($status == "disetujui" or $status== "Disetujui" or $status=="Di Setujui" ) {
                                                ?>
                                                <span class="label label-success">Sudah Disetujui</span>
                                                <?php
                                                        }
                                                        else
                                                        {
                                                ?>
                                                             <span class="label label-warning">Belum Disetujui</span>
                                                <?php
                                                        }
                                                ?>
                                               
                                            </tr>
                                            </tr>
                                            <?php 
                                                         }
                                                    }
                                                        //Tutup koneksi engine MySQL
                                                            mysql_close($Open);
                                                        ?>
                    
                    </tbody>
                    <tfoot>
                      <tr>
                      <th>No</th>
                       <th>ID Pengajuan </th>
                        <th>Nama barang</th>
                        <th>Jumlah </th>
                        <th>Diajukan Fakultas</th>
                        <th>Waktu Pengajuan</th>
                                   <th>Status</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                            </p>
                    </div>
                </div>
                <!-- -->
                
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
     <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
     <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>

</body>
</html>