<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Praktikum PHP</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { width: 600px; margin: 30px auto; background: white; padding: 20px; border-radius: 10px; }
        a { margin: 5px; text-decoration: none; padding: 8px 12px; background: #007bff; color: white; border-radius: 5px; }
        a:hover { background: #0056b3; }
        .box { margin-top: 20px; padding: 15px; background: #e7f3ff; }
    </style>
</head>
<body>

<div class="container">
    <h2>Menu Latihan Praktikum</h2>

    <!-- Navigasi -->
    <a href="?menu=1">Soal 1</a>
    <a href="?menu=2">Soal 2</a>
    <a href="?menu=3">Soal 3</a>
    <a href="?menu=4">Soal 4</a>

    <div class="box">
    <?php
    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        // =====================
        // SOAL 1 (SWITCH)
        // =====================
        if ($menu == 1) {
            echo "<h3>Soal 1 - Jenis Kendaraan</h3>";
            $roda = 4; // bisa diganti

            switch ($roda) {
                case 2:
                    echo "Kendaraan: Motor";
                    break;
                case 3:
                    echo "Kendaraan: Bajaj";
                    break;
                case 4:
                    echo "Kendaraan: Mobil";
                    break;
                default:
                    echo "Jenis kendaraan tidak diketahui";
            }
        }

        // =====================
        // SOAL 2 (FOR)
        // =====================
        elseif ($menu == 2) {
            echo "<h3>Soal 2 - Bilangan Genap (2-10)</h3>";

            for ($i = 2; $i <= 10; $i++) {
                if ($i % 2 == 0) {
                    echo $i . " ";
                }
            }
        }

        // =====================
        // SOAL 3 (FOREACH)
        // =====================
        elseif ($menu == 3) {
            echo "<h3>Soal 3 - Daftar Hewan</h3>";

            $hewan = ["Kucing", "Anjing", "Sapi", "Kelinci", "Ayam"];

            foreach ($hewan as $h) {
                echo "- " . $h . "<br>";
            }
        }

        // =====================
        // SOAL 4 (TERNARY)
        // =====================
        elseif ($menu == 4) {
            echo "<h3>Soal 4 - Cek Genap/Ganjil</h3>";

            $angka = 7; // bisa diganti

            $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

            echo "Angka: $angka <br>";
            echo "Hasil: $hasil";
        }

    } else {
        echo "Silakan pilih menu di atas.";
    }
    ?>
    </div>
</div>

</body>
</html>