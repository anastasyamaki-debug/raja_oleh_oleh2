<?php include "../includes/header.php"; ?>

<style>
/* =========================
   BERANDA
========================= */

.home {
    text-align: center;
    padding-bottom: 40px;
}

.hero {
    width: 90%;
    max-width: 1100px;
    height: 360px;
    object-fit: cover;
    display: block;
    margin: 25px auto 35px;
    border-radius: 15px;
}

/* Bagian sambutan */
.welcome {
    max-width: 850px;
    margin: 0 auto;
    padding: 10px 20px 35px;
}

.welcome h1 {
    color: #8b4f3d;
    font-size: 34px;
    margin-bottom: 15px;
}

.welcome p {
    color: #555;
    font-size: 17px;
    line-height: 1.7;
    margin-bottom: 25px;
}

.btn-produk {
    display: inline-block;
    background: #8b4f3d;
    color: white;
    text-decoration: none;
    padding: 12px 25px;
    border-radius: 7px;
    font-size: 16px;
    transition: 0.3s;
}

.btn-produk:hover {
    background: #6f3d30;
    transform: translateY(-2px);
}

/* Informasi singkat */
.info-home {
    max-width: 1000px;
    margin: 10px auto 20px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 0 20px;
}

.info-box {
    background: #fff;
    padding: 25px 15px;
    border-radius: 12px;
    border: 1px solid #eee;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.info-box h3 {
    color: #8b4f3d;
    margin-bottom: 10px;
}

.info-box p {
    color: #666;
    font-size: 14px;
    line-height: 1.6;
}

/* Tampilan HP */
@media (max-width: 768px) {
    .hero {
        width: 94%;
        height: 250px;
    }

    .welcome h1 {
        font-size: 27px;
    }

    .info-home {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="home">

    <img 
        class="hero" 
        src="../assets/images/foto toko raja oleh-oleh.jpeg" 
        alt="Raja Oleh-Oleh"
    >

    <div class="welcome">
        <h1>Selamat Datang di Raja Oleh-Oleh</h1>

        <p>
            Temukan berbagai macam oleh-oleh khas untuk keluarga,
            teman, dan orang tersayang.
        </p>

        <a href="produk.php" class="btn-produk">
            Lihat Katalog Produk
        </a>
    </div>

    <div class="info-home">

    <div class="info-box">
        <h3>Beragam Produk</h3>
        <p>
            Menyediakan berbagai pilihan oleh-oleh
            untuk kebutuhan Anda.
        </p>
    </div>

    <div class="info-box">
        <h3>Kualitas Terbaik</h3>
        <p>
            Produk pilihan yang cocok dibawa
            sebagai buah tangan.
        </p>
    </div>

    <div class="info-box">
        <h3>Mudah Dilihat</h3>
        <p>
            Lihat informasi dan katalog produk
            Raja Oleh-Oleh melalui website.
        </p>
    </div>

</div>

       

<?php include "../includes/footer.php"; ?>