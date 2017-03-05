<?php
session_start();
if(isset($_SESSION['fakultas'])){
	session_destroy();
  ?>

	 <script language="JavaScript">
            alert('Loged Out !');
            document.location='../';
        </script>
       <?php
}
?>