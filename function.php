<?php
$conn = mysqli_connect("localhost", "root", "", "mobile_legend");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
	  $rows[] = $row;
	}
	return $rows;
  }
  function tambah($data) {
	global $conn;
  
	$email = htmlspecialchars($data["email"]);
	$game_id = htmlspecialchars($data["game_id"]);
	$zone_id = htmlspecialchars($data["zone_id"]);
	$jns_game = htmlspecialchars($data["jenis_game"]);
	$jmlh_diamond = htmlspecialchars($data["jumlah_diamond"]);

	$query = "INSERT INTO riwayat_pembelian
			  VALUES
			  ('', '$email', '$jns_game', '$game_id', '$zone_id', '$jmlh_diamond', '', '')
			";
	mysqli_query($conn, $query);
  
	return mysqli_affected_rows($conn);
}
  function ubah ($data) {
	global $conn;
  
	$id = $data["id"];
	$email = htmlspecialchars($data["alamat_email"]);
	$game_id = htmlspecialchars($data["id_game"]);
	$zone_id = htmlspecialchars($data["id_zone"]);
  
	$query = "UPDATE riwayat_pembelian SET
			 	alamat_email = '$email',
			 	id_game = '$game_id',
			 	id_zone = '$zone_id'
				WHERE id = $id
			";
	mysqli_query($conn, $query);
  
	return mysqli_affected_rows($conn);
  }	

  function hapus($id) {
	global $conn;

	mysqli_query($conn, "DELETE FROM riwayat_pembelian WHERE id = $id");
	return mysqli_affected_rows($conn);
}