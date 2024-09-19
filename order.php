<?php
$product = isset($_GET['product']) ? $_GET['product'] : 'Produk Tidak Diketahui';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $quantity = $_POST['quantity'];

    // Simpan pesanan ke database atau kirim email (contoh sederhana)
    echo "<h2>Terima kasih, $name! Pesanan Anda untuk $quantity kg $product telah diterima.</h2>";
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan - <?php echo $product; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="order">
        <h2>Pemesanan - <?php echo $product; ?></h2>
        <form method="POST" action="">
            <label for="name">Nama:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="quantity">Kuantitas (kg):</label><br>
            <input type="number" id="quantity" name="quantity" required><br><br>
            <button type="submit">Pesan Sekarang</button>
        </form>
    </section>
</body>
</html>
<?php
}
?>