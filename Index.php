<?php
    include('koneksi.php')
?>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
 
    	<?php 
	    if(isset($_GET['pesan'])){
		    $pesan = $_GET['pesan'];
		    if($pesan == "input"){
			    echo "Data berhasil di input.";
		    }  else if($pesan == "update"){
		    	echo "Data berhasil di update.";
	    	}else if($pesan == "hapus"){
			    echo "Data berhasil di hapus.";
		    }
	    }
	    ?>
 
	    <h3>Daftar Menu</h3>
	    <table border="1" class="table">
		    <tr>
                <th>No</th>
                <th>Menu</th>
		    	<th>Nama barang</th>
	    		<th>Variasi</th>
    			<th>Harga</th>
			    <th>   </th>		
		    </tr>
		    <?php 
                //pengambilan data dari database mysql yang sudah terkoneksi
                $sql = "SELECT * FROM makanan;"; //query sql
                $result = $db->query($sql); //execute query sql
		        $nomor = 1;
        		while( $file = $result->fetch_assoc()) {
		    ?>
		    <tr>
		    	<td><?php echo $nomor++; ?></td>
			    <td><?php echo $file['menu']; ?></td>
			    <td><?php echo $file['nama barang']; ?></td>
		    	<td><?php echo $file['variasi']; ?></td>
                <td><?php echo $file['harga']; ?></td>
    			<td>
				    <a class="order" href="order.php">Order</a>				
			    </td>
            </tr>
            <?php } ?>
	    </table>
    </body>
</html>