<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Variasi</td>
				<td><input type="text" name="variasi"></td>					
			</tr>	
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="text" name="jumlah"></td>					
			</tr>	
            <tr>
				<td>Tanggal</td>
				<td><input type="text" name="tanggal"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>