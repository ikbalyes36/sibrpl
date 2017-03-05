<?php
	session_start(); 
	mysql_connect("localhost","root",""); 
	mysql_select_db("inventaris"); 
	$username=$_POST['username']; 	
	$password=$_POST['password']; 	
 	if($password=="admin"){
	$query=mysql_query("select * from adminuniversitas where usernameuniv='$username' and password='$password'");	
	$xxx=mysql_num_rows($query);	
	if($xxx==TRUE){ 		
		if($username=="admin")	
		$_SESSION['username']=$username;
		header("location:admin/");  
		}
		else{
			?>
			 <script language="JavaScript">
            alert('Login Gagal, Masukkan Autentifikasi yang Benar!');
            document.location='index.php';
        </script>
		<?php
		}

	}
	else if($password!="admin"){
	$temp =mysql_query("SELECT password FROM adminfakultas where usernamefak='$username'");
    $row = mysql_fetch_array($temp, MYSQL_ASSOC);
    $ini=$row['password'];
	if($password==$ini){ 
		$_SESSION['fakultas']=$username;
		header("location:fakultas/");     
		}
		else
			?>
			 <script language="JavaScript">
            alert('Login Gagal, Masukkan Autentifikasi yang Benar!');
            document.location='index.php';
        </script>
		<?php

	}
	else{   				
		?>
        <script language="JavaScript">
            alert('Login Gagal, Masukkan Autentifikasi yang Benar!');
            document.location='index.php';
        </script>
    <?php
	}
?>