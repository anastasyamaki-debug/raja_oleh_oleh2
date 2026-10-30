<?php
include "../config/database.php";
include "../includes/header.php";

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk='$id'");
$produk = mysqli_fetch_assoc($query);

if(isset($_POST['kirim'])){
  $nama = $_POST['nama'];
  $jumlah = $_POST['jumlah'];
  $id_produk = $produk['id_produk'];
  $total = $produk['harga'] * $jumlah;
  $simpan = mysqli_query($conn, "INSERT INTO pesanan (nama, id_produk, jumlah, total) VALUES ('$nama','$id_produk','$jumlah','$total')");
  if($simpan){
    echo "<p style='color:green; text‑align:center;'>✅ Pesanan berhasil dikirim!</p>";
    $no_wa = "6282192312561";

$teks_wa = urlencode(
    "Halo Raja Oleh-Oleh,\n\n" .
    "Saya ingin memesan:\n" .
    "Nama: " . $nama . "\n" .
    "Produk: " . $produk['nama_produk'] . "\n" .
    "Jumlah: " . $jumlah . "\n" .
    "Total: Rp " . number_format($total, 0, ',', '.') . "\n\n" .
    "Terima kasih."
);

echo '<br>
<a href="https://wa.me/' . $no_wa . '?text=' . $teks_wa . '" target="_blank">
    <button style="padding:10px 20px; background-color:#25D366; color:white; border:none; border-radius:8px; cursor:pointer;">
        Pesan via WhatsApp
    </button>
</a>';
  }else{
    echo "<p style='color:red; text‑align:center;'>❌ Gagal mengirim pesanan!</p>";
  }
}
?>
<div style="text-align:center;">
  <h2>Pesanan: <?php echo $produk['nama_produk']; ?></h2>
  <img src="../assets/images/<?php echo $produk['gambar']; ?>" style="width:200px;">
  <p style="margin-top:10px; font-size:16px;">Harga: Rp <?php echo number_format($produk['harga']); ?></p>
</div>

<form method="post">
  <label>Masukkan Nama Anda:</label><br>
  <input type="text" name="nama" required style="padding:8px; width:250px;"><br><br>
  <label>Jumlah Pesanan:</label><br>
  <input type="number" name="jumlah" min="1" value="1" style="padding:8px; width:100px;"><br><br>
  <button type="submit" name="kirim" style="padding:10px 20px; background:#8b4513; color:white; border:none; border-radius:6px;">Kirim Pesanan</button>
</form>

  <br>
  <a href="detail_produk.php?id=<?php echo $produk['id_produk']; ?>">← Kembali ke Detail Produk</a>
</div>
<?php include "../includes/footer.php"; ?>s