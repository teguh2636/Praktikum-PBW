<!DOCTYPE html>
<html>
<head>
    <title>Soal 3 - Input 5 Hewan</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h2>Masukkan 5 Nama Hewan</h2>
    <form method="POST">
        <?php for($i=1; $i<=5; $i++): ?>
            Hewan ke-<?php echo $i; ?>: <input type="text" name="hewan[]" required><br><br>
        <?php endfor; ?>
        <button type="submit" name="proses">Tampilkan</button>
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $daftar_hewan = $_POST['hewan'];
        echo "<h3>Daftar Hewan yang Dimasukkan:</h3><ol>";
        foreach ($daftar_hewan as $h) {
            echo "<li>" . htmlspecialchars($h) . "</li>";
        }
        echo "</ol>";
    }
    ?>
</body>
</html>