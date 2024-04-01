<?php
session_start();
?>
<?php include 'file-loader.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu - Websiteku</title>
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
        <section id="guestbook">
            <h2>Buku Tamu</h2>
            <div class="comments">
                <?php
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