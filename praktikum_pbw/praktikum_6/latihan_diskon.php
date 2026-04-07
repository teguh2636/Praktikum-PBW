<html>
<head>
    <title>Latihan Diskon</title>
</head>
<body>
<form method="post">
    NPM : <input type="text" name="npm"><br>
    Nama : <input type="text" name="nama"><br>
    Program Studi : <input type="text" name="prodi"><br>
    Semester : <input type="number" name="semester"><br>
    UKT : <input type="number" name="ukt"><br>
    <input type="submit" name="proses" value="Hitung">
</form>

<hr>

<?php
if (isset($_POST['proses'])) {

    $npm = htmlspecialchars($_POST['npm']);
    $nama = htmlspecialchars($_POST['nama']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    $potongan = "0%";
    $bayar = $ukt;

  
    if ($ukt >= 5000000) {
        $bayar = $ukt - ($ukt * 0.10);
        $potongan = "10%";

 
        if ($semester > 8) {
            $bayar -= ($bayar * 0.05);
            $potongan = "10% + 5%";
        }
    }

    echo "<b>Rincian Pembayaran UKT</b><br>";
    echo "NPM : $npm <br>";
    echo "Nama : $nama <br>";
    echo "Program Studi : $prodi <br>";
    echo "Semester : $semester <br>";
    echo "Biaya UKT Awal : Rp $ukt <br>";
    echo "Diskon : $potongan <br>";
    echo "Total Bayar : Rp $bayar <br>";
}
?>
?>
