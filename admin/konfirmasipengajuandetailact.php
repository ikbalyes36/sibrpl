<?php
    include "config.php";
    $idpengajuan  = $_POST['idpengajuan'];
    $status =$_POST['myselect'];
    $keterangan=$_POST['keterangan'];

	$input    ="UPDATE pengajuan SET status='$status', keterangan='$keterangan'  WHERE idpengajuan='$idpengajuan'";
	$query_input =mysql_query($input);
	if ($query_input) {
	?>
		<script language="JavaScript">
			alert('Pengajuan Disetujui diupdate!');
			document.location='konfirmasipengajuan.php';
		</script>
	<?php
	}
    mysql_close($Open);
?>
