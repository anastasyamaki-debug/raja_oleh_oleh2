<?php include "../includes/header.php"; ?>

<div class="kontak-page">

    <div class="kontak-hero">
        <h1>Kontak Kami</h1>
        <p>
            Silakan hubungi Raja Oleh-Oleh untuk informasi produk,
            pertanyaan, atau kebutuhan lainnya.
        </p>
    </div>

    <div class="kontak-container">

        <!-- Informasi Toko -->
        <div class="kontak-info">
            <h2>Informasi Toko</h2>

            <div class="kontak-item">
                <span>📍</span>
                <div>
                    <h3>Alamat</h3>
                    <p>Jl. Manennungeng No. 147, Dangerakko, Kecamatan Wara Selatan, Kota Palopo</p>
                </div>
            </div>

            <div class="kontak-item">
                <span>🛍️</span>
                <div>
                    <h3>Raja Oleh-Oleh</h3>
                    <p>Menyediakan berbagai macam oleh-oleh untuk keluarga dan orang tersayang.</p>
                </div>
            </div>

            <div class="kontak-item">
                <span>❤️</span>
                <div>
                    <h3>Pelayanan</h3>
                    <p>Kami siap membantu memenuhi kebutuhan oleh-oleh Anda.</p>
                </div>
            </div>
        </div>

        <!-- Form Kontak -->
        <div class="kontak-form">
            <h2>Kirim Pesan</h2>

            <form action="" method="POST">

                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukkan nama Anda" required>

                <label>Telpon</label>
                <input type="text" name="Telpon" placeholder="Masukkan nomor telpon Anda" required>

                <label>Pesan</label>
                <textarea name="pesan" rows="5" placeholder="Tulis pesan Anda..." required></textarea>

                <button type="submit">Kirim Pesan</button>

            </form>
        </div>

    </div>

</div>

<?php include "../includes/footer.php"; ?>