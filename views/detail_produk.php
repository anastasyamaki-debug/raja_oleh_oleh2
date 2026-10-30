<?php
include "../config/database.php";
include "../includes/header.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$id'");
$produk = mysqli_fetch_assoc($query);
?>
<div style="text-align:center; padding:20px;">
  <h2><?php echo $produk['nama_produk']; ?></h2>
  <img src="../assets/images/<?php echo $produk['gambar']; ?>" style="width:350px; border-radius:8px;">
  <p style="font-size:20px; font-weight:bold;">Harga: Rp <?php echo number_format($produk['harga']); ?></p>
  <p>Kategori: <?php echo $produk['kategori']; ?></p>
  <p><?php echo $produk['deskripsi']; ?></p>
  <a href="beli.php?id=<?php echo $produk['id_produk']; ?>">
  <button style="padding:10px 20px; background:#8b4513; color:white; border:none; border‑radius:6px;">Beli Sekarang</button>
</a>
  <br><br>
  <a href="produk.php">← Kembali ke Katalog</a>
</div>
<?php include "../includes/footer.php"; ?>