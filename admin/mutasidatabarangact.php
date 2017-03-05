<?php
    include "config.php";
    include "ceksession.php";
    $idbarang  = $_POST['idbarang'];
    $newketerangan   = $_POST['newketerangan'];
    $kepemilikan =$_POST['kepemilikan'];
    $newkepemilikan=$_POST['mynewselect'];
    $usernameuniv=$_SESSION['username'];
    if ($kepemilikan==$newkepemilikan){
         ?>
        <script language="JavaScript">
            alert('Data Mutasi Gagal diinput, Mutasi Tidak dapat Dilakukan ');
            document.location='mutasidatabarang.php';
        </script>
    <?php
    } else {
    $input111    ="INSERT INTO  mutasibarang (idbarang, kepemilikanawal, kepemilikanbaru,tanggalmutasi, usernameuniv) VALUES ('$idbarang', '$kepemilikan', '$newkepemilikan', now(),'$usernameuniv' ) ";
    $query_input111 =mysql_query($input111);
    $input    ="UPDATE  barang SET kepemilikan='$newkepemilikan' , keterangan='$newketerangan',  tanggalinput=Now() WHERE idbarang='$idbarang' AND kepemilikan='$kepemilikan'";
    $query_input =mysql_query($input);
        if ($query_input) {
    ?>
        <script language="JavaScript">
            alert('Mutasi Berhasil diinput!');
            document.location='mutasidatabarang.php';
        </script>
    <?php
       }
    }

    mysql_close($Open);
?>
