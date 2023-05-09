<?php
require 'function.php';
$daftardiamond = query("SELECT * FROM diamond");

// if (isset($_POST['jenis_game'])) {
//   $jenis_game = $_POST['jenis_game'];
//   echo "Jenis Game: " . $jenis_game;
// } else {
//   echo "Jenis game belum dipilih";
// }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Secular+One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>GruStore - Daftar Diamond</title>
  </head>
  <style>
    body {
      height: 100px;
    }
  </style>
  <body>
    <nav>
      <div class="bgnav">
        <a href="index.php">
        <img src="img/Frame 3.png" alt=""/>
      </a>
        <a id="nav1" href="index.php">BERANDA</a>
        <a id="nav6" href="riwayat.php">RIWAYAT</a>
      </div>
    </nav>
    <div class="topupgame">
      <label for="">Top Up Mobile Legend</label>
    </div>
    <div class="daftardiamond">


  
    <form action="pembayaran.php" method="POST" class="dmml">
  <div class="dmml">
    <?php foreach ($daftardiamond as $row) : ?>
      <div class="dalamdm">
        <div class="flexitem">
          <span class="material-symbols-outlined">diamond</span>
          <label for=""> <?= $row["jumlah_diamond"]; ?> <?= $row["jenis_produk"]; ?></label>
        </div>
        <div class="flexitem dmbaris2">
          <label for="">Dari <?= $row["harga"]; ?> IDR</label>
          <input type="hidden" name="jenis_game" value="<?= $_POST['jenis_game']; ?>">
          <input type="hidden" name="jumlah_diamond" value="<?= $row['jumlah_diamond']; ?>">
          <input type="hidden" name="harga" value="<?= $row['harga']; ?>">
          
          <button type="submit">Beli >></button>
        </div>
      </div>
    <?php endforeach; ?>
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
