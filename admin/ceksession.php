<?php

session_start();
if(!isset($_SESSION['username'])){
    //jika session belum di set/register
    ?>
	 <script language="JavaScript">
            alert('Harap Login Terlebihdahulu !');
            document.location='../';
        </script>
       <?php

}
?>
