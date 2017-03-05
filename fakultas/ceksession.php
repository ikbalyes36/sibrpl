<?php

session_start();
if(!isset($_SESSION['fakultas'])){
    //jika session belum di set/register

    ?>
	 <script language="JavaScript">
            alert('Harap Login Terlebih Dahulu !');
            document.location='../';
        </script>
       <?php

}
?>
