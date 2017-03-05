<?php
    include "config.php";
    include "ceksession.php";
    $idtanah  = $_POST['idtanah'];
    $newketerangan   = $_POST['newketerangan'];
    $kepemilikan =$_POST['kepemilikan'];
    $newkepemilikan=$_POST['mynewselect'];
    $usernameuniv=$_SESSION['username'];
    if ($kepemilikan==$newkepemilikan){
         ?>
        <script language="JavaScript">
            alert(' Mutasi Gagal diinput, Mutasi Tidak dapat Dilakukan ');
            document.location='mutasidatatanah.php';
        </script>
    <?php
    } else {
    $input2    ="INSERT INTO mutasitanah (idtanah,kepemilikanawal,kepemilikanbaru,tanggalmutasi, usernameuniv) VALUES ('$idtanah', '$kepemilikan', '$newkepemilikan', now(),'$usernameuniv' ) ";
    $query_input2 =mysql_query($input2);
    $input    ="UPDATE tanah SET kepemilikan='$newkepemilikan' , keterangan='$newketerangan',  tanggalinput=Now() WHERE idtanah='$idtanah' AND kepemilikan='$kepemilikan'";
    $query_input =mysql_query($input);
        if ($query_input) {
    ?>
        <script language="JavaScript">
            alert('Mutasi Berhasil diinput!');
            document.location='mutasidatatanah.php';
        </script>
    <?php
       }
    }

    mysql_close($Open);
?>
