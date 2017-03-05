<?php
    include "config.php";
    $usernamefak=$_POST['usernamefak'];
    $passbaru=$_POST['passbaru'];
    $passlama=$_POST['passlama'];

    $temp=mysql_query("SELECT password FROM adminfakultas where usernamefak='$usernamefak'");
    $row = mysql_fetch_array($temp, MYSQL_ASSOC);
    $ini=$row['password'];
	
	if(empty($passbaru) or empty($passlama)){
        $status="false";
        ?>
        <script language="JavaScript">
            alert('Data Gagal diinput, Tidak Boleh Ada field yang kosong!');
            document.location='ubahpassword.php';
        </script>
    <?php
    }
	
    if ($passlama == $ini){
        $tampung=mysql_query("UPDATE adminfakultas SET password='$passbaru' where usernamefak='$usernamefak' ");
        ?>
            <script language="JavaScript">
                alert('Berhasil !');
                document.location='ubahpassword.php';
            </script>
        <?php
    }
    else{
        ?>
            <script language="JavaScript">
                alert('Password Lama Tidak Sesuai');
                document.location='ubahpassword.php';
            </script>
        <?php
        }
    mysql_close($Open);
?>