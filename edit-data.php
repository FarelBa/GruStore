<?php
require 'function.php';

$id = $_GET["id"];

$edt = query("SELECT * FROM riwayat_pembelian WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {
	
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'riwayat.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'riwayat.php';
			</script>
		";
	}


}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Secular+One&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>GruStore - Edit Data</title>
  </head>
  <style>
    body {
      background-color: #f7f7f9;
    }
  </style>
  <body>
    <div class="headereditdata">
      <img src="img/Grou 55.png" alt="" />
      <label>Gru Store</label>
    </div>
    <div class="bgform">
      <label for="">Edit Data</label>
      <form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $edt["id"]; ?>">


        <div class="inputeditdata">
          <label for="">email</label><br />
        <input type="text" name="alamat_email" id="alamat_email" value="<?= $edt["alamat_email"]; ?>" />
      </div>



      <div class="inputeditdata">
        <label for="">Id Game</label><br />
        <input type="text" name="id_game" id="id_game" value="<?= $edt["id_game"]; ?>" />
      </div>



      <div class="inputeditdata">
        <label for="">Id Zone</label><br />
        <input type="text" name="id_zone" id="id_zone" value="<?= $edt["id_zone"]; ?>" />
      </div>



      <div class="inputeditdata">
        <label for="">Diamond</label><br />
        <div class="dmedit">
          5 Diamond
          <div class="btngantidm">
            <a href="" onclick="alert('Fitur Belum Tersedia')" >Pilih</a>
          </div>
        </div>
      </div>



      <div class="btneditdata">
        <div class="kembali">
          <a href="riwayat.php">Kembali</a>
        </div>


        <div class="simpan">
          <button type="submit" name="submit">Simpan</button>
        </div>



      </div>
    </form>
    </div>
    <footer>
      <div class="bgfooter">
        <div class="wm">@2023 Gru Store.</div>
      </div>
    </footer>
  </body>
</html>
