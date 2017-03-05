s<!DOCTYPE html>
<html lang="en">

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
     <script>
        function myFunctionx(){
            var id_pengajuan = document.getElementById("tabelpengajuan").value;
            window.location.assign("?id_pengajuan="+id_pengajuan);
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
                <a class="navbar-brand">ADMIN FAKULTAS</a>
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
                                    <center>Unit Logistik Telkom University</center>
                                    </a>
                                </div>
                        </p>
                       <center>Input Detail Data Pengajuan</center>  
                        </h1>
                        <p>
                              <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Forms Input</h3>
                            </div>
                            <div class="panel-body">
                                  <div class="container">
                                          <form role="form" method="POST" action="inputpengajuan.php">
                                            <div class="form-group">
                                              <label >ID Pengajuan</label>
                                              <br>
                                              <select class="form-control" name="id_pengajuan" id="tabelpengajuan"  onchange="myFunctionx()" >
                                                    <option>--Pilih ID Pengajuan--</option>
                                                    <?php
                                                        $selectt=$_SESSION['fakultas'];
                                                        include "config.php";
                                                        $select = mysql_query( "SELECT id_pengajuan FROM tabelpengajuan WHERE username='$selectt' ");
                                                        while($data = mysql_fetch_array($select)){
                                                                ?>
                                                     <option value="<?php echo $data['id_pengajuan'] ?>"><?php echo $data['id_pengajuan'] ?></option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                                  <?php
                                                        include "config.php";
                                                        error_reporting(0);
                                                        $id_pengajuan = $_GET['id_pengajuan'];
                                                        $querysatu = mysql_query("SELECT status,username FROM tabelpengajuan where id_pengajuan='$id_pengajuan' ");
                                                        $bok = mysql_fetch_array($querysatu);
                                                    ?>
                                              <br>
                                              <input class="form-control" name="id_pengajuan" placeholder="ID Pengajuan" type="text" value ="<?php echo $id_pengajuan ?>">
                                              <br>
                                              <label > Status </label>
                                              <br>
                                              <input class="form-control" name="status" type="text" value ="<?php echo $bok['status'] ?>" >
                                              <br>
                                              <label > Diajukan Oleh </label>
                                              <br>
                                              <input class="form-control" name="username" type="text" value ="<?php echo $bok['username'] ?>" >
                                              <br>
                                              <label >Fakultas</label>
                                              <br>
                                              <input class="form-control" name="keterangan" type="text" >
                                              <br>
                                              <label> Fakultas </label>
                                              <select class="form-control" name="myselect" >
                                                  <option name="myselect" value="FIK" >FIK</option>
                                                  <option name="myselect" value="FIF" >FIF</option>
                                                  <option name="myselect" value="FTI" >FTI</option>
                                                  <option name="myselect" value="FEB" >FEB</option>
                                                  <option name="myselect" value="FMB" >FMB</option>
                                              </select>
                                              <br>
                                              <button type="submit" class="btn btn-sm btn-primary">Input</button>
                                              <button type="reset" class="btn btn-sm btn-warning">Reset</button>
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
