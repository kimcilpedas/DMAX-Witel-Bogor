<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$nama_pelangan = $_POST['nama_pelangan'];
		$alamat = $_POST['alamat'];
		$longlat = $_POST['longlat'];
		$paket = $_POST['paket'];
		$sto = $_POST['sto'];
		$kontak_sales = $_POST['kontak_sales'];
		$agency = $_POST['agency'];
		$channel = $_POST['channel'];
		$product = $_POST['product'];
		$kodesales = $_POST['kodesales'];
		$sql = "INSERT INTO pelanggan (nama_pelangan, alamat, longlat, paket, sto, kontak_sales, agency, channel, product, kodesales) VALUES ('$nama_pelangan', '$alamat', '$longlat', '$paket', '$sto', '$kontak_sales', '$agency', '$channel', '$product', '$kodesales')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>