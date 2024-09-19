<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah Segar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Toko Buah Segar</h1>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="#contact">Hubungi Kami</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <h2>Buah Segar dan Berkualitas untuk Anda</h2>
        <p>Kami menyediakan berbagai buah-buahan segar langsung dari kebun.</p>
        <a href="#products" class="cta-button">Lihat Produk</a>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2>Mengapa Memilih Kami?</h2>
        <p>Kami berkomitmen untuk menyediakan buah-buahan segar dan berkualitas terbaik langsung dari petani lokal.</p>
    </section>

    <!-- Products Section -->
    <section id="products" class="products">
        <h2>Produk Kami</h2>
        <div class="product-list">
            <div class="product">
                <h3>Apel Fuji</h3>
                <p>Manis dan segar, cocok untuk cemilan sehat.</p>
                <span>Rp 50.000/kg</span>
                <a href="order.php?product=Apel Fuji" class="order-button">Pesan Sekarang</a>
            </div>
            <div class="product">
                <h3>Jeruk Sunkist</h3>
                <p>Jeruk manis kaya akan vitamin C.</p>
                <span>Rp 40.000/kg</span>
                <a href="order.php?product=Jeruk Sunkist" class="order-button">Pesan Sekarang</a>
            </div>
            <!-- Tambahkan produk lain di sini -->
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <h2>Hubungi Kami</h2>
        <p>Untuk pemesanan atau pertanyaan, hubungi kami di:</p>
        <p>Email: info@tokobuah.com</p>
        <p>Telepon: 081234567890</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2024 Toko Buah Segar. All Rights Reserved.</p>
    </footer>
</body>
</html>