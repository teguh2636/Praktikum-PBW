<!DOCTYPE html>
<html>
<head>
    <title>Soal 2 - Deret Angka Genap</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h2>Generate Deret Angka Genap (Soal 2)</h2>
    
    <form method="POST">
        <p>Klik tombol untuk menampilkan deret angka genap 2 sampai 100:</p>
        <button type="submit" name="generate">Tampilkan Deret</button>
    </form>

    <?php
    if (isset($_POST['generate'])) {
        echo "<h3>Hasil Deret Genap:</h3>";
        echo "<div style='line-height: 30px;'>";
        

        for ($i = 2; $i <= 100; $i += 2) {
            echo "<b>" . $i . "</b> ";
        }
        
        echo "</div>";
    }
    ?>
</body>
</html>