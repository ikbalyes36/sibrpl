<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIB | Admin Logistik TELKOM UNIVERSITY</title>

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
                    <a class="navbar-brand" href="../admin/">ADMIN UNIVERSITAS</a>
                </div>
                <!-- Top Menu Items -->

                <ul class="nav navbar-right top-nav">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Konfirmasi Pengajuan <b class="caret"></b> </a>
                        <ul class="dropdown-menu message-dropdown">
                            <!-- ISI -->
                            <li class="message-preview">
                                <?php
                                include "config.php";

                                $Lihat="SELECT idpengajuan,usernamefak,status,tanggalpengajuan FROM pengajuan";
                                $Tampil = mysql_query($Lihat);
                                $nomer=0;
                                while ( $hasil      = mysql_fetch_array ($Tampil)) {
                                $idpengajuan        = stripslashes ($hasil['idpengajuan']);
                                $usernamefak        = stripslashes ($hasil['usernamefak']);
                                $status        = stripslashes ($hasil['status']);
                                $tanggalpengajuan = stripslashes($hasil['tanggalpengajuan']);


                                {
                                if($status=="Setujui"){
                                $status="Sudah Disetujui";
                                }
                                $nomer++;
                                if ($nomer==2)
                                {
                                mysql_close($Open);
                                }
                                ?>
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="img/notif.jpg" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong><?=$usernamefak?> </strong><?=$idpengajuan?></h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> <?=$tanggalpengajuan?></p>
                                            <p><?=$status?></p>
                                        </div>
                                    </div>
                                </a>

                                <?php 
                                }
                                }

                                ?>                        
                            <li class="message-footer">
                                <a href="konfirmasipengajuan.php">Lihat Semua Pengajuan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Kelola Data Barang <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="inputdatabarang.php">Input Data Barang</a>
                                </li>
                                <li>
                                    <a href="searchdatabarang.php">Search Data Barang</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demox"><i class="fa fa-fw fa-desktop"></i> Kelola Data Tanah <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demox" class="collapse">
                                <li>
                                    <a href="inputdatatanah.php">Input Data Tanah </a>
                                </li>
                                <li>
                                    <a href="searchdatatanah.php">Search Data Tanah</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demox1"><i class="fa fa-fw fa-desktop"></i> Mutasi <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demox1" class="collapse">
                                <li>
                                    <a href="mutasidatabarang.php">Mutasi Data Barang</a>
                                </li>
                                <li>
                                    <a href="mutasidatatanah.php">Mutasi Data Tanah</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demox12"><i class="fa fa-fw fa-desktop"></i> Pelaporan <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demox12" class="collapse">
                                <li>
                                    <a href="pelaporandatabarang.php">Pelaporan Data Barang</a>
                                </li>
                                <li>
                                    <a href="pelaporandatatanah.php">Pelaporan Data Tanah</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        
                         <p align="center">
							<a id="atitle">UNIT LOGISTIK TELKOM UNIVERSITY</a>
						</p>
                       <center>Lihat Semua Pengajuan</center>  
                        </h1>
                        <p>

                                              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID Pengajuan </th>
                        <th>Nama barang</th>
                        <th>Jumlah </th>
                        <th>Diajukan Fakultas</th>
                        <th>Waktu Pengajuan</th>
                                       <th>Status</th>
                                       <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <?php
                    include "config.php";
                    
                    $Lihat="SELECT idpengajuan,namabarang,jumlah,usernamefak,tanggalpengajuan,status FROM pengajuan natural join detailpengajuan ORDER BY tanggalpengajuan asc";
                    $Tampil = mysql_query($Lihat);
                    while ( $hasil      = mysql_fetch_array ($Tampil)) {
                    $idpengajuan        = stripslashes ($hasil['idpengajuan']);
                    $namabarang        = stripslashes ($hasil['namabarang']);
                    $jumlah        = stripslashes ($hasil['jumlah']);
                    $usernamefak     = stripslashes ($hasil['usernamefak']);
                    $tanggalpengajuan     = stripslashes ($hasil['tanggalpengajuan']);
                    $status    = stripslashes ($hasil['status']);

                    {

                ?>
                                                <tr>
                                                <td><?=$idpengajuan?><div align="center"></div></td>
                                                <td><?=$namabarang?><div align="center"></div></td>
                                                <td><?=$jumlah?><div align="center"></div></td>
                                                <td><?=$usernamefak?><div align="center"></div></td>
                                                <td><?=$tanggalpengajuan?><div align="center"></div></td>
                                                <td>
                                              
                 <?php
                                                if ($status == "disetujui" or $status== "Disetujui" or $status=="Di Setujui" or $status=="Setujui" or $status=="setujui" ) {
                                                ?>
                                                <span class="label label-success">Sudah Disetujui</span>
                                                <?php
                                                        }
                                                        else if($status=="Tolak" or $status=="Ditolak"){
                                                            ?>
                                                            <span class="label label-danger">Di Tolak</span>
                                                            <?php

                                                        }
                                                        else{
                                                ?>
                                                             <span class="label label-warning">Belum Disetujui</span>
                                                <?php
                                                        }
                                                ?>
                                                <td><a href="konfirmasipengajuandetail.php?idpengajuan=<?php echo $hasil['idpengajuan'] ?>"align center> <button type="button" class="btn btn-xs btn-danger" align="center"> Aksi </button</a></td>    <!--membuat link ke file dan hapus.php-->
                                            
                                            </tr>
                                            </tr>
                                            <?php 
                                                         }
                                                    }
                                                        //Tutup koneksi engine MySQL
                                                            mysql_close($Open);
                                                        ?>
                    
                    </tbody>
                
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
     

</body>
</html>