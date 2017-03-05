<?php
    include "config.php";
    $idbarang  = $_POST['idbarang'];
    $namabarang   = $_POST['namabarang'];
    //$kepemilikan="test";
    $kepemilikan  =$_POST['myselect'];
    $jumlah   = $_POST['jumlah'];
    $kondisibaik  = $jumlah;
    $kondisiburuk=0;
    $keterangan="Kondisi Baik";
    $dt1=date("Y-m-d H:i:s");
    $usernameuniv="admin";
    $status="true";
    $cek=mysql_num_rows (mysql_query("SELECT idbarang FROM barang WHERE idbarang='$_POST[idbarang]'"));
    if ($cek > 0) {
        $status="false";
    ?>
        <script language="JavaScript">
            alert('ID_Barang Sudah ! Silahkan Input kembali');
            document.location='inputdatabarang.php';
        </script>
    <?php
    }

    if(empty($idbarang) or empty($namabarang) or empty($kepemilikan) or empty($jumlah) ){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Tidak Boleh Ada field yang kosong!');
            document.location='inputdatabarang.php';
        </script>
    <?php
    }

    if(strlen($idbarang)>7){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Id_barang mengandung terlalu banyak karakter');
            document.location='inputdatabarang.php';
        </script>
    <?php
    }
    
    if(!is_numeric($jumlah)){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Field Jumlah Harus Diisi Angka');
            document.location='inputdatabarang.php';
        </script>
    <?php
    }

    if($jumlah<=0){
        $status="false";
         ?>
        <script language="JavaScript">
            alert('Data Gagal diinput,jumlah barang tidak sesuai!');
            document.location='inputdatabarang.php';
        </script>
    <?php
    }

    
    if ($status=="true") {
            $input    ="INSERT INTO barang (idbarang, namabarang, kepemilikan, jumlah, kondisibaik, kondisiburuk, keterangan, tanggalinput, usernameuniv)
            VALUES ('$idbarang', '$namabarang', '$kepemilikan', '$jumlah', '$kondisibaik', '$kondisiburuk','$keterangan', Now(), '$usernameuniv')";
    $query_input =mysql_query($input);
    ?>
        <script language="JavaScript">
            alert('Data Berhasil diinput!');
            document.location='inputdatabarang.php';
        </script>
    <?php
    }
    else {
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Silahkan diulangi!');
            document.location='inputdatabarang.php';
        </script>
    <?php
    }

    mysql_close($Open);
?>
