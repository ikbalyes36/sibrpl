<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
  ?>
	 <script language="JavaScript">
            alert('Loged Out !');
            document.location='../index.php';
        </script>
       <?php
}
?>