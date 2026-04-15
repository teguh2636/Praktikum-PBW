<!DOCTYPE html>
<html>
<head>
    <title>Soal 4 - Ternary Operator</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h2>Cek Genap atau Ganjil (Soal 4)</h2>
    
    <form method="POST">
        Masukkan Angka: <input type="number" name="angka" required>
        <button type="submit" name="proses">Cek Angka</button>
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $angka = $_POST['angka'];


        $hasil = ($angka % 2 == 0) ? "GENAP" : "GANJIL";

        echo "<h3>Hasil:</h3>";
        echo "Angka <b>$angka</b> adalah bilangan <b>$hasil</b>.";
    }
    ?>
</body>
</html>
