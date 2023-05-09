<?php
require 'function.php';

$jenis_game = $_POST['jenis_game'];
$jumlah_diamond = $_POST['jumlah_diamond'];
$harga = $_POST['harga'];
if( isset($_POST["submit"]) ) {
  if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'riwayat.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Secular+One&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>GruStore - Pembayaran</title>
  </head>
  <body>
    <nav>
      <div class="bgnav">
        <a href="index.php">
        <img src="img/Frame 3.png" alt="" />
      </a>
        <a id="nav1" href="index.php">BERANDA</a>
        <a id="nav6" href="riwayat.php">RIWAYAT</a>
      </div>
    </nav>
    <div class="diamond"><?= $_POST['jumlah_diamond'] ?> Diamond</div>
    <form action="" method="post">

                                                                                                                                                                                      <div class="flexitem">
                                                                                                                                                                                        <div class="flexcolumn hover">
                                                                                                                                                                                        <div class="bginput">
          <div class="judulinput">Masukan Alamat Email</div>
          <div class="atasinput">email</div>
          <input class="input" type="text" name="email" id="email" placeholder="Masukan Email" autocomplete="off" required />
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="bginput">
                                                                                                                                                                                          <div class="judulinput">Masukan User ID</div>
                                                                                                                                                                                          <div class="inputflex">
                                                                                                                                                                                            <div>



              <div class="atasinput">Game ID</div>
              <input class="input" type="text" name="game_id" id="game_id" placeholder="Masukan Game ID" autocomplete="off" required />
            
            
            
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="input2">

            
              <div class="atasinput">Zone ID</div>
              <input class="input" type="text" name="zone_id" id="zone_id" placeholder="Masukan Zone ID" autocomplete="off" required />
       
       
                                                                                                                                                                        </div>
                                                                                                                                                                      </div>
                                                                                                                                                                    </div>
                                                                                                                                                                  </div>
                                                                                                                                                                  <div class="beli">
                                                                                                                                                                    <label> 99+ tersedia </label>
                                                                                                                                                                    <div class="jumlah flexitem">
                                                                                                                                                                      <div class="minbtn btn"><a href="">-</a></div>
                                                                                                                                                                      <div class="textjumlah">1</div>
                                                                                                                                                                      <div class="plusbtn btn"><a href="">+</a></div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <hr />
                                                                                                                                                                    <div class="totalharga">
                                                                                                                                                                      <div class="total">Total Harga :</div>
                                                                                                                                                                      <div class="harga"><?= $_POST['harga'] ?></div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="belibtn">                                                                                                                                                         
        <input type="hidden" name="jenis_game" value="<?= $_POST['jenis_game'] ?>">
        <input type="hidden" name="jumlah_diamond" value="<?= $_POST['jumlah_diamond'] ?>">
        <button type="submit" name="submit">Beli Sekarang</button>
                                                                                                                                                          </div>
                                                                                                                                                        </div>
                                                                                                                                                      </form>
                                                                                                                                                      </div>

    <!-- ================================================================================================================ -->

    <!-- <div class="pilihanlain">
      <label>Pilihan Lain</label>
      <div class="flexitem">
        <div class="dmlain">
          <a href="" onclick="alert('Fitur Tidak Tersedia')" >5 Diamond <img src="img/material-symbols_arrow-circle-right-outline.png" alt="" /> </a>
        </div>
        <div class="dmlain">
          <a href="" onclick="alert('Produk Tidak Tersedia')" >5 Diamond <img src="img/material-symbols_arrow-circle-right-outline.png" alt="" /> </a>
        </div>
        <div class="dmlain">
          <a href="" onclick="alert('Produk Tidak Tersedia')" >5 Diamond <img src="img/material-symbols_arrow-circle-right-outline.png" alt="" /> </a>
        </div>
      </div>
      <div class="flexitem dmlain2">
        <div class="dmlain">
          <a href="" onclick="alert('Produk Tidak Tersedia')" >5 Diamond <img src="img/material-symbols_arrow-circle-right-outline.png" alt="" /> </a>
        </div>
        <div class="dmlain">
          <a href="" onclick="alert('Produk Tidak Tersedia')" >5 Diamond <img src="img/material-symbols_arrow-circle-right-outline.png" alt="" /> </a>
        </div>
        <div class="dmlain">
          <a href="" onclick="alert('Produk Tidak Tersedia')" >5 Diamond <img src="img/material-symbols_arrow-circle-right-outline.png" alt="" /> </a>
        </div>
      </div>
    </div> -->
    <footer>
      <div class="bgfooter bottom">
        <div class="wm">@2023 Gru Store.</div>
      </div>
    </footer>
  </body>
</html>
