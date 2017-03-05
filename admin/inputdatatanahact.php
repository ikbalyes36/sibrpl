<?php
    include "config.php";
    $idtanah  = $_POST['idtanah'];
    $luas   = $_POST['luas'];
    $kepemilikan  =$_POST['myselect'];
    $lokasi   = $_POST['lokasi'];
	$keterangan = 'Lahan Kosong';
    $dt1=date("Y-m-d H:i:s");
    $usernameuniv="admin";
    $status="true";
    if(empty($idtanah) or empty($luas) or empty($kepemilikan) or empty($lokasi) ){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Tidak Boleh Ada field yang kosong!');
            document.location='inputdatatanah.php';
        </script>
    <?php
    }

    $cek=mysql_num_rows (mysql_query("SELECT idtanah FROM tanah WHERE idtanah='$_POST[idtanah]'"));
    if ($cek > 0) {
        $status="false";
    ?>
        <script language="JavaScript">
            alert('ID Tanah Sudah ada ! Silahkan Input kembali');
            document.location='inputdatatanah.php';
        </script>
    <?php
    }

    if(strlen($idtanah)>5){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, ID Tanah mengandung terlalu banyak karakter');
            document.location='inputdatatanah.php';
        </script>
    <?php
    }

        if ($status=="true") {
             $input    ="INSERT INTO tanah (idtanah, luas, kepemilikan, lokasi, keterangan, tanggalinput, usernameuniv)
            VALUES ('$idtanah', '$luas', '$kepemilikan', '$lokasi', '$keterangan', Now(), '$usernameuniv')";
    $query_input =mysql_query($input);
    ?>
        <script language="JavaScript">
            alert('Data Berhasil diinput!');
            document.location='inputdatatanah.php';
        </script>
    <?php
    }
    else {
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Silahkan diulangi!');
            document.location='inputdatatanah.php';
        </script>
    <?php
    }

    mysql_close($Open);
?>
