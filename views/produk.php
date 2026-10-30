<?php
include "../config/database.php";
include "../includes/header.php";
?>

<h1>Katalog Produk</h1>

<div class="produk-container">
<?php
$query = mysqli_query($conn, "SELECT * FROM produk");
while ($produk = mysqli_fetch_assoc($query)) {
?>
  <div class="card">
    <img src="../assets/images/<?php echo $produk['gambar']; ?>" alt="Produk">
    <h2><?php echo $produk['nama_produk']; ?></h2>
    <p>Kategori: <?php echo $produk['kategori']; ?></p>
    <p>Rp <?php echo number_format($produk['harga']); ?></p>
    <p><?php echo $produk['deskripsi']; ?></p>
<a href="detail_produk.php?id=<?php echo $produk['id_produk']; ?>">
  <button style="padding:8px 16px; background:#8b4513; color:white; border:none; border‑radius:6px;">Lihat Detail</button>
</a>
</div>
<?php } ?>
</div>

<?php include "../includes/footer.php"; ?>