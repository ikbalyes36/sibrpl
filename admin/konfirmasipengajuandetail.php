<!DOCTYPE html>
<html lang="en">

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
     <script>
        function myFunctionx(){
            var idpengajuan = document.getElementById("pengajuan").value;
            window.location.assign("?idpengajuan="+idpengajuan);
        }
        
    </script>
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
                       <center>Aksi Konfirmasi Pengajuan</center>  
                        </h1>
                        <p>
                              <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Forms Aksi Konfirmasi Pengajuan</h3>
                            </div>
                            <div class="panel-body">
                                  <div class="container">
                                          <form role="form" method="POST" action="konfirmasipengajuandetailact.php">
                                            <div class="form-group">
                                              <label >ID Pengajuan</label>
                                              <br>
                                              <select class="form-control" name="idpengajuan" id="pengajuan"  onchange="myFunctionx()" >
                                                    <option>--Pilih ID Pengajuan--</option>
                                                    <?php
                                                        include "config.php";
                                                        $status="Belum Disetujui";
                                                        $select = mysql_query( "SELECT idpengajuan FROM pengajuan where status='$status'");
                                                        while($data = mysql_fetch_array($select)){
                                                                ?>
                                                     <option value="<?php echo $data['idpengajuan'] ?>"><?php echo $data['idpengajuan'] ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                                  <?php
                                                        include "config.php";
                                                        error_reporting(0);
                                                        $idpengajuan = $_GET['idpengajuan'];
                                                        $querysatu = mysql_query("SELECT status FROM pengajuan where idpengajuan='$idpengajuan' ");
                                                        $bok = mysql_fetch_array($querysatu);
                                                    ?>
                                              <br>
                                              <input class="form-control" name="idpengajuan" readonly="readonly" placeholder="ID Pengajuan" type="text" value ="<?php echo $idpengajuan ?>">
                                              <br>
                                              <label > Status Sekarang </label>
                                              <br>
                                              <input class="form-control" name="status" readonly="readonly" type="text" value ="<?php echo $bok['status'] ?>" >
                                              <br>
                                              <div class="alert alert-info">
                                              <strong> Forms Persetujuan ! </strong> 
                                              </div>
                                              <select class="form-control" name="myselect" >
                                              <option>-- Pilih Aksi --</option>
                                                  <option name="myselect" value="Setujui" >Setujui</option>
                                                  <option name="myselect" value="Ditolak" >Tolak</option>
                                              </select>
                                              <br>
                                              <label >Keterangan Tambahan</label>
                                              <br>
                                              <input class="form-control" name="keterangan" type="text" placeholder="Isi Keterangan Jika Diperlukan" >
                                              <br>
                                              <button type="submit" class="btn btn-sm btn-primary">Setujui</button>
                                              <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                                              <br>
                                            </div>
                                            </form>

                            </div>
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
