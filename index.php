<?php
require 'function.php';
$queryproduk = mysqli_query($conn, "SELECT * FROM diamond");
$nama_database = "mobile_legend";
$jumlahpruduk = mysqli_num_rows($queryproduk);
$query = "SELECT * FROM riwayat_pembelian";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
}
} else {
echo "Tidak ada data yang ditemukan";
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Secular+One&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>GruStore - Home</title>
  </head>
  <body>
    <nav>
      <div class="bgnav left">
        <a href="index.php">
        <img src="img/Frame 3.png" alt="" />
      </a>
        <!-- <a id="nav1" href="daftar-diamond.php">MOBILE LEGEND</a> -->
        <a id="nav6" href="riwayat.php">RIWAYAT</a>
      </div>
    </nav>
    <header>
      <div class="bgheader">
        <img src="img/Group 51.png" alt="" />
        <h3>Gru Store</h3>
        <h6>Solusi terbaik untuk top up diamond game favoritmu</h6>
      </div>
    </header>
    <div class="content">
      <h3>Top Up Game Poluler</h3>
        <div class="game">

          
        <form action="daftar-diamond.php" method="POST">
          <input type="hidden" name="jenis_game" value="Mobile Legend">
          <div class="produk">
            <img src="img/mobile_legend.png" alt="" />
            <div class="nmproduk">
              Mobile Legend
            </div>
            <div class="jmlhproduk">
              <?= $jumlahpruduk; ?> produk
            </div>  
            <button type="submit">TOP UP</button>
          </div>
        </form>



        <div class="produk">
          <img src="img/pubg.png" alt="" />
          <div class="nmproduk">
            Pubg Mobile
          </div>
          <div class="jmlhproduk">
            0 produk
          </div>
          <a name="" id="" value="" onclick="alert('Produk Tidak Tersedia')">TOP UP </a>
        </div>


        <div class="produk">
          <img src="img/freefire.png" alt="" />
          <div class="nmproduk">
            Free Fire
          </div>
          <div class="jmlhproduk">
            0 produk
          </div>
          <a name="" id="" value="" onclick="alert('Produk Tidak Tersedia')">TOP UP </a>
        </div>


        <div class="produk">
          <img src="img/cod.png" alt="" />
          <div class="nmproduk">
            COD Mobile
          </div>
          <div class="jmlhproduk">
            0 produk
          </div>
          <a name="" id="" value="" onclick="alert('Produk Tidak Tersedia')">TOP UP </a>
        </div>


        <div class="produk">
          <img src="img/gensin57.png" alt="" />
          <div class="nmproduk">
            Genshin Impact
          </div>
          <div class="jmlhproduk">
            0 produk
          </div>
          <a name="" id="" value="" onclick="alert('Produk Tidak Tersedia')">TOP UP </a>
        </div>
      </div>
      <div class="riwayat">
        <a href="riwayat.php">RIWAYAT PEMBELIAN</a>
      </div>
    </div>
  </body>
  <footer>
    <div class="bgfooter">
      <div class="wm">@2023 Gru Store.</div>
    </div>
  </footer>
</html>
