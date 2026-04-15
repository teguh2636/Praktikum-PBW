<!DOCTYPE html>
<html>
<head>
    <title>Soal 2 - Deret Angka Genap</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h2>Looping bilangan genap (Soal 2)</h2>
    
    <form method="POST">
        Masukan Nilai Awal: <input type="number" name="awal" required><br><br>
        Masukan Nilai Akhir: <input type="number" name="akhir" required><br><br>
        <button type="submit" name="generate">Looping Genap</button>
    </form>

    <?php
    if (isset($_POST['generate'])) {
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];

        echo "<h3>Hasil Deret Genap dari $awal sampai $akhir:</h3>";
        

        for ($i = $awal; $i <= $akhir; $i++) {

            if ($i % 2 == 0) {
                echo "<b>" . $i . "</b> ";
            }
        }
    }
    ?>

    <br><br>
</body>
</html>