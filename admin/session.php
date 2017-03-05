<?php
session_start();
if(session_is_registered('$unset($_SESSION['username']);')){
	session_unset();
	session_destroy();
}
else{
	?>
	 <script language="JavaScript">
            alert('Harap Login Terlebihdahulu !');
            document.location='insertdetail.php';
        </script>
       <?php
}