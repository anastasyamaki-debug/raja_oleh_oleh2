<?php
include "../config/database.php";
include "../includes/header.php";
$query = mysqli_query($conn, "SELECT pesanan.*, produk.nama_produk FROM pesanan JOIN produk ON pesanan.id_produk=produk.id_produk");
?>
<div style="padding:20px;">
  <h2>Daftar Pesanan Masuk</h2>
  <table border="1" cellpadding="8" cellspacing="0">
    <tr>
      <th>Nama Pembeli</th>
      <th>Nama Produk</th>
      <th>Jumlah</th>
      <th>Total Harga</th>
    </tr>
    <?php while($pesanan = mysqli_fetch_assoc($query)){ ?>
    <tr>
      <td><?php echo $pesanan['nama']; ?></td>
      <td><?php echo $pesanan['nama_produk']; ?></td>
      <td><?php echo $pesanan['jumlah']; ?></td>
      <td>Rp <?php echo number_format($pesanan['total']); ?></td>
    </tr>
    <?php } ?>
  </table>
</div>
<?php include "../includes/footer.php"; ?>