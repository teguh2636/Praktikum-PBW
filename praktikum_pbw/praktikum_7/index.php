<!DOCTYPE html>
<html>
<head>
    <title>Beranda - Data Diri</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h2>Input Data Mahasiswa</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br><br>
        NPM: <input type="text" name="npm" required><br><br>
        Prodi: <input type="text" name="prodi" required><br><br>
        <button type="submit" name="submit">Simpan</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "<h3>Hasil Input:</h3>";
        echo "Nama: " . $_POST['nama'] . "<br>";
        echo "NPM: " . $_POST['npm'] . "<br>";
        echo "Prodi: " . $_POST['prodi'];
    }
    ?>
</body>
</html>