
<?php
    include "config.php";
    $idbarang = $_POST['idbarang'];
    $kepemilikan =$_POST['kepemilikan'];
    $kondisibaik=$_POST['kondisibaik'];
    $kondisiburuk=$_POST['kondisiburuk'];
	$newketerangan = $_POST['newketerangan'];
    $newkondisibaik=$_POST['newkondisibaik'];
    $newkondisiburuk=$_POST['newkondisiburuk'];
    $tempkondisi=$newkondisibaik + $newkondisiburuk;
    $temp=mysql_query("SELECT password FROM adminfakultas where usernamefak='$kepemilikan'");
    $row = mysql_fetch_array($temp, MYSQL_ASSOC);

    if(empty($idbarang) or empty($newketerangan) or empty($newkondisibaik) or empty($newkondisiburuk)){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Tidak Boleh Ada field yang kosong!');
            document.location='evaluasidatabarang.php';
        </script>
    <?php
    }

    else if ($kondisibaik <> $tempkondisi){
         ?>
        <script language="JavaScript">
            alert('Data Evaluasi Gagal diinputkan, Data Evaluasi Tidak Realistis ');
            document.location='evaluasidatabarang.php';
        </script>
    <?php
    }
    else if ($newkondisibaik > $kondisibaik){
         ?>
        <script language="JavaScript">
            alert('Data Evaluasi Gagal diinputkan, Jumlah baru kondisi baik Melebihi jumlah Barang ');
            document.location='evaluasidatabarang.php';
        </script>
    <?php
    } elseif ($newkondisiburuk > $kondisibaik){
        ?>
        <script language="JavaScript">
            alert('Data Evaluasi Gagal diinputkan, Segera Buat Pengajuan Ke Admin Untuk Barang Baru ');
            document.location='evaluasidatabarang.php';
        </script>
    <?php
    }
        else{
        $input    ="UPDATE  barang SET kondisibaik='$newkondisibaik' , kondisiburuk='$newkondisiburuk', keterangan='$newketerangan',  tanggalinput=Now() WHERE idbarang='$idbarang' AND kepemilikan='$kepemilikan'";
        $query_input =mysql_query($input);
            if ($query_input) {
        ?>
            <script language="JavaScript">
                alert('Evaluasi Barang Berhasil diupdate!');
                document.location='evaluasidatabarang.php';
            </script>
        <?php
            }
        }

    mysql_close($Open);
?>
