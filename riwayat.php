<?php
require 'function.php';
$riwayat = query("SELECT * FROM riwayat_pembelian");
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
    <title>GruStore - Riwayat Pembelian</title>
  </head>
  <body>
    <nav>
      <div class="bgnav left">
        <a href="index.php">
        <img src="img/Frame 3.png" alt="" />
      </a>
      <!-- <a id="nav6" href="daftar-diamond.php">MOBILE LEGEND</a> -->
        <a id="nav1" href="index.php">BERANDA</a>
      </div>
    </nav>
    <div class="titleriwayat">
      <label for="">RIWAYAT PEMBELIAN</label>
    </div>
    <div class="bgtable">
      <!-- <center> -->

        <table>
          <tr>
            <th></th>
            <th></th>
          <th>No</th>
          <th>Alamat Email</th>
          <th>Game</th>
          <th>Id Game</th>
          <th>Id Zone</th>
          <th>Jumlah Diamond</th>
          <th>Tanggal Pembelian</th>
          <th>Total Harga</th>
          <th></th>
          <th></th>
        </tr>
        <td colspan="12"><hr /></td>
        <?php $i = 1; ?>
        <?php foreach( $riwayat as $row ) : ?>
          
            <tr>
              <td></td>
              <td><a href="edit-data.php?id=<?= $row["id"]; ?>"><img src="img/material-symbols_edit-square-outline.png" alt="" /></a></td>
              <td><?= $i; ?></td>
              <td><?= $row["alamat_email"]; ?></td>
              <td><?= $row["jenis_game"]; ?></td>
              <td><?= $row["id_game"]; ?></td>
              <td><?= $row["id_zone"]; ?></td>
              <td><?= $row["jumlah_diamond"]; ?> Diamond</td>
              <td><?= $row["tanggal_pembelian"]; ?></td>
              <td><?= $row["total_harga"]; ?></td>
              <td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><img src="img/material-symbols_delete-outline.png" alt="" /></a></td>
              <td></td>
            </tr>
	<?php $i++; ?>
	<?php endforeach; ?>
  
      </table>
    </div>
  <!-- </center> -->
    <footer>
      <div class="bgfooter bottom">
        <div class="wm">@2023 Gru Store.</div>
      </div>
    </footer>
  </body>
</html>