<?php
    include "config.php";
    include "ceksession.php";
    $idpengajuan  = $_POST['idpengajuan'];
	$tanggalpengajuan=date("Y-m-d H:i:s");
    $keterangan   = $_POST['keterangan'];
    $usernamefak = $_POST['usernamefak'];
    $status ="Belum Disetujui";
    $usernameuniv="admin";
	$validasi = "true";

    if(empty($idpengajuan) or empty($keterangan) or empty($usernamefak) ){
		$validasi = "false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Tidak Boleh Ada field yang kosong!');
            document.location='inputdatapengajuan.php';
        </script>
    <?php
    }

    if(strlen($idpengajuan)>7){
		$validasi = "false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, ID Pengajuan mengandung terlalu banyak karakter');
            document.location='inputdatapengajuan.php';
        </script>
    <?php
    }

    if($usernamefak!=$_SESSION['fakultas']){
		$validasi = "true";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Harap login Terlebih Dahulu Sebagai Fakultas <?=$usernamefak?>');
            document.location='inputdatapengajuan.php';
        </script>
    <?php
    }

    $cek=mysql_num_rows (mysql_query("SELECT idpengajuan FROM pengajuan WHERE idpengajuan='$_POST[idpengajuan]'"));
    if ($cek > 0) {
		$validasi = "false";
    ?>
        <script language="JavaScript">
            alert('Pengajuan Sudah pernah dilakukan ! Silahkan Input kembali');
            document.location='inputdatapengajuan.php';
        </script>
    <?php
    }
    if ($validasi == "true") {
		$input    ="INSERT INTO pengajuan (idpengajuan, tanggalpengajuan, keterangan, usernamefak, status,usernameuniv) VALUES ('$idpengajuan', Now(), '$keterangan', '$usernamefak', '$status', '$usernameuniv')";
		$query_input = mysql_query($input);
    ?>
        <script language="JavaScript">
            alert('Data Berhasil diinput!');
            document.location='inputdatadetailpengajuan.php';
        </script>
    <?php
    }
    else {
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Silahkan diulangi!');
            document.location='inputdatapengajuan.php';
        </script>
    <?php
    }

    mysql_close($Open);
?>
