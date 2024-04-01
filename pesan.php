<?php include 'file-loader.php'; ?>

<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $pesan = $_POST["pesan"];

    $_SESSION['pesan'][] = ["nama" => $nama, "pesan" => $pesan];
    echo "<p>Pesan Anda telah terkirim!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan - Websiteku</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>Websiteku</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="pesan.php">Pesan</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="guestbook.php">Buku Tamu</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="pesan">
            <h2>Pesan</h2>
            <form action="#" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="4" required></textarea>

                <button type="submit">Kirim</button>
            </form>
        </section>
    </main>

    <footer>
        <p>Hak Cipta &copy; 2024 Websiteku. All rights reserved.</p>
    </footer>
    <?php include $files["footer"]; ?>

    <script src="<?php echo $files['script']; ?>"></script>

</body>

</html>