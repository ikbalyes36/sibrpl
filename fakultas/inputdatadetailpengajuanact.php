<?php
    include "config.php";
    include "ceksession.php";
    $idpengajuan  = $_POST['idpengajuan'];
    $status   = $_POST['status'];
    $namabarang = $_POST['namabarang'];
    $jumlah=$_POST['jumlah'];
    $password =$_POST['password'];
    $kepemilikan=$_POST['kepemilikan'];
    $temp=mysql_query("SELECT password FROM adminfakultas where usernamefak='$kepemilikan'");
    $row = mysql_fetch_array($temp, MYSQL_ASSOC);
    $ini=$row['password'];
    $status="true";
    if(empty($idpengajuan) or empty($namabarang) or empty($kepemilikan) or empty($jumlah) or empty($status) ){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Tidak Boleh Ada field yang kosong!');
            document.location='inputdatadetailpengajuan.php';
        </script>
    <?php
    }

    if(is_numeric($namabarang)){
        $status="false";
         ?>
        <script language="JavaScript">
            alert('Data gagal diinput, Field nama harus diisi Huruf');
            document.location='inputdatadetailpengajuan.php';
        </script>
    <?php
    }

    if(!is_numeric($jumlah)){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Field Jumlah Harus Diisi Angka');
            document.location='inputdatadetailpengajuan.php';
        </script>
    <?php
    }

    if($jumlah<=0){
        $status="false";
         ?>
        <script language="JavaScript">
            alert('Data Gagal diinput,jumlah barang tidak sesuai!');
            document.location='inputdatadetailpengajuan.php';
        </script>
    <?php
    }

    if($status=="Disetujui" or $status=="disetujui" or $status=="Setujui" or $status=="Ditolak"){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Pengajuan Sudah Pernah Disetujui/Ditolak !');
            document.location='inputdatadetailpengajuan.php';
        </script>
    <?php
    }
    elseif ($password != $ini){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Authentifikasi Salah!');
            document.location='inputdatadetailpengajuan.php';
        </script>
    <?php
    }
    else {
        if ($status=="true") {
            $input = "INSERT INTO detailpengajuan (idpengajuan, namabarang, jumlah)
            VALUES ('$idpengajuan', '$namabarang', '$jumlah')";
			$query_input =mysql_query($input);
            ?>
                <script language="JavaScript">
                    alert('Data Detail Pengajuan Berhasil diinput!');
                    document.location='inputdatadetailpengajuan.php';
                </script>
            <?php
        }
        else {
                ?>
                <script language="JavaScript">
                    alert('Data Gagal diinput, Silahkan diulangi!');
                    document.location='inputdatadetailpengajuan.php';
                </script>
                <?php
            }
    }
    mysql_close($Open);
?>
