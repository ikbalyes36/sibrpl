<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIB | Admin Logistik Fakultas</title>

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
                <a class="navbar-brand" href="../fakultas/">ADMIN FAKULTAS <?php echo $_SESSION['fakultas']?></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                  <li class="dropdown">
					<a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                </li>
            </ul>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="ubahpassword.php"><i class="fa fa-fw fa-edit"></i> Ubah Password</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Pengajuan <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="inputdatapengajuan.php">Input Data Pengajuan</a>
                            </li>
							<li>
                                <a href="inputdatadetailpengajuan.php">Input Data Detail Pengajuan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demox"><i class="fa fa-fw fa-desktop"></i> Kelola Data Barang <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demox" class="collapse">
                            <li>
                                <a href="evaluasidatabarang.php">Evaluasi Data Barang </a>
                            </li>
                            <li>
                                <a href="lihatdatabarang.php">Lihat Data Barang </a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demox1"><i class="fa fa-fw fa-desktop"></i> Kelola Data Tanah <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demox1">
                            <li class="buka">
                                <a href="lihatdatatanah.php">Lihat Data Tanah </a>
                            </li>
                        </ul>
                    </li>
				</ul>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        
                         <p align="center">
                                
                                <div class="img">
                                    <a id="atitle">
                                    <center>UNIT LOGISTIK <?php echo $_SESSION['fakultas']?></center>
									</a>
                                </div>
                        </p>
                       <center>Lihat Data Tanah</center>  
                        </h1>
                        <p>
                                <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>ID Tanah</th>
                                                <th>Luas</th>
                                                <th>Kepemilikan</th>
                                                <th>Lokasi</th>
												<th>Keterangan</th>
                                                <th>Tanggal Input</th>
                                            </thead>
                                            <tbody>
                                              <tr class="active">
                                              <?php
                        
                                                    $select=$_SESSION['fakultas'];
                                                    include "config.php";
                                                    //view data mahasiswa di dalam database
                                                    $Lihat="SELECT * FROM tanah where kepemilikan='$select' ORDER BY tanggalinput desc";
                                                    $Tampil = mysql_query($Lihat);
                                                    $nomer=0;
                                                    while ( $hasil      = mysql_fetch_array ($Tampil)) {

                                                            $idtanah        = stripslashes ($hasil['idtanah']);
                                                            $luas      = stripslashes ($hasil['luas']);
                                                            $kepemilikan     = stripslashes ($hasil['kepemilikan']);
                                                            $lokasi      = stripslashes ($hasil['lokasi']);
                                                            $tanggalinput            = stripslashes ($hasil['tanggalinput']);
                                                            $keterangan      = stripslashes ($hasil['keterangan']);                                   
                                                        
                                                        {
                                                ?>
                                            <tr >
                                                <td><?=$idtanah?><div align="center"></div></td>
                                                <td><?=$luas?><div align="center"></div></td>
                                                <td><?=$kepemilikan?><div align="center"></div></td>
                                                <td><?=$lokasi?><div align="center"></div></td>
                                                <td><?=$keterangan?><div align="center"></div></td>
												<td><?=$tanggalinput?><div align="center"></div></td>
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

</body>

</html>
