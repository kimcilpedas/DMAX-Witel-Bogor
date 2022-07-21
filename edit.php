<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id_pelanggan = $_POST['id_pelanggan'];
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
		$sql = "UPDATE pelanggan SET nama_pelangan = '$nama_pelangan', alamat ='$alamat', longlat = '$longlat', paket = '$paket', sto = '$sto', kontak_sales = '$kontak_sales', agency = '$agency', channel = '$channel', product = '$product', kodesales = '$kodesales' WHERE id_pelanggan = '$id_pelanggan'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>