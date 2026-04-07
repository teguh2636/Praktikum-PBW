<html>
<head>
    <title>Praktikum 6</title>
</head>
<body>

<form method="post">
    Nama Lengkap: <input type="text" name="nama" required><br>
    Nilai Akhir: <input type="number" name="nilai" required><br>
    <input type="submit" name="proses" value="Tampilkan">
</form>

<hr>

<?php
if (isset($_POST['proses'])) {

    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    echo "<h3>Hasil Penilaian</h3>";
    echo "Nama Mahasiswa: $nama <br>";
    echo "Nilai yang Diperoleh: $nilai <br>";

    if ($nilai >= 85 && $nilai <= 100) {
        $grade = "A";
        $keterangan = "Lulus";
    } elseif ($nilai >= 75) {
        $grade = "B";
        $keterangan = "Lulus";
    } elseif ($nilai >= 65) {
        $grade = "C";
        $keterangan = "Lulus";
    } elseif ($nilai >= 50) {
        $grade = "D";
        $keterangan = "Lulus";
    } elseif ($nilai >= 0) {
        $grade = "E";
        $keterangan = "Tidak Lulus";
    } else {
        $grade = "Tidak Valid";
        $keterangan = "-";
    }

    echo "Grade: $grade <br>";
    echo "Keterangan: $keterangan <br>";
}
?>

</body>
</html>

</body>
</html>
