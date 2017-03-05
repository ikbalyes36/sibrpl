<?php
    include "config.php";
    $username=$_POST['username'];
    $passbaru=$_POST['passbaru'];
    $passlama=$_POST['passlama'];

    $temp=mysql_query("SELECT password FROM tabeldataadminfakultas where username='$username'");
    $row = mysql_fetch_array($temp, MYSQL_ASSOC);
    $ini=$row['password'];
  
    if ($passlama == $ini){
        $tampung=mysql_query("UPDATE password SET password='$passbaru' where username='$username' ");
        ?>
            <script language="JavaScript">
                alert('Berhasil !');
                document.location='cp.php';
            </script>
        <?php
    }
    else{
        ?>
            <script language="JavaScript">
                alert('Password Lama Tidak Sesuai');
                document.location='cp.php';
            </script>
        <?php
            }
        

    mysql_close($Open);
?>
