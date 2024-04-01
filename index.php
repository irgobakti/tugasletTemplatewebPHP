<?php
session_start();
?>
<?php include 'file-loader.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Web Sederhana</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php include $files["header"]; ?>
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
        <section id="home">
            <h2>Selamat Datang di Websiteku</h2>
            <p>Website ini adalah tempat untuk mengetahui informasi terbaru seputar produk kami.</p>
        </section>

        <section id="produk">
            <h2>Produk Kami</h2>
            <div class="product">
                <img src="produk1.jpg" alt="Produk 1">
                <h3>Produk 1</h3>
                <p>Deskripsi produk 1...</p>
            </div>
            <div class="product">
                <img src="produk2.jpg" alt="Produk 2">
                <h3>Produk 2</h3>
                <p>Deskripsi produk 2...</p>
            </div>
        </section>

        <section id="pesan">
            <h2>Pesan</h2>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = $_POST["nama"];
                $pesan = $_POST["pesan"];

                // Menyimpan data ke dalam session
                $_SESSION['pesan'][] = ["nama" => $nama, "pesan" => $pesan];

                echo "<p>Pesan Anda telah terkirim!</p>";
            }
            ?>
            <form action="#" method="post">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="4" required></textarea>

                <button type="submit">Kirim</button>
            </form>
        </section>

        <section id="galeri">
            <h2>Galeri Foto</h2>
            <div class="gallery">
                <img src="foto1.jpg" alt="Foto 1">
                <img src="foto2.jpg" alt="Foto 2">
                <img src="foto3.jpg" alt="Foto 3">
            </div>
        </section>

        <section id="guestbook">
            <h2>Buku Tamu</h2>
            <div class="comments">
                <?php
                // Menampilkan pesan dari session
                if (isset($_SESSION['pesan'])) {
                    foreach ($_SESSION['pesan'] as $message) {
                        echo "<p><strong>" . htmlspecialchars($message['nama']) . "</strong>: " . htmlspecialchars($message['pesan']) . "</p>";
                    }
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>Hak Cipta &copy; 2024 Websiteku. All rights reserved.</p>
    </footer>
    <?php include $files["footer"]; ?>

    <script src="<?php echo $files['script']; ?>"></script>

</body>

</html>