<!DOCTYPE html>
<html>
<head>
    <title>Soal 1 - Switch Case</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    <h2>Cek Jenis Kendaraan (Soal 1)</h2>
    
    <form method="POST">
        Masukkan Jumlah Roda: <input type="number" name="roda" required>
        <button type="submit">Cek</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roda = $_POST['roda'];

        switch ($roda) {
            case "2":
                echo "<h3>Hasil: Motor</h3>";
                break;
            case "3":
                echo "<h3>Hasil: Becak</h3>";
                break;
            case "4":
                echo "<h3>Hasil: Mobil</h3>";
                break;
            default:
                echo "<h3>Hasil: Tidak Terdeteksi</h3>";
                break;
        }
    }
    ?>
</body>
</html>