<html>
<head>
	<title>Validasi form</title>
</head>
<body>
	<h1>Validasi form</h1>
 
	<?php 
	if(isset($_GET['nama'])){
		if (!preg_match("/^[a-zA-Z .]*$/", $_GET['nama'])){
   		//keluarkan pesan error
	}
	else{
  	//jalankan
	}
	}
	?>
 
	<h4>Username :</h4>
	<form action="cek.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
				<td><input type="submit" value="simpan"></td>
			</tr>						
		</table>
	</form>
 
</body>
</html>

<form action="cek.php" method="post">
