<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Diskon UKT Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        .hasil {
            margin-top: 20px;
            padding: 10px;
            background: #e7f3ff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Pembayaran UKT</h2>

    <form method="post">
        <input type="text" name="npm" placeholder="NPM" required>
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="text" name="prodi" placeholder="Prodi" required>
        <input type="number" name="semester" placeholder="Semester" required>
        <input type="number" name="biaya" placeholder="Biaya UKT" required>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $biaya = $_POST['biaya'];

        $diskon = 0;

        if ($biaya >= 5000000) {
            $diskon = 10;

            if ($semester > 8) {
                $diskon = 15;
            }
        }

        $total = $biaya - ($biaya * $diskon / 100);
    ?>

    <div class="hasil">
        <h3>Hasil:</h3>
        <p>NPM : <?php echo $npm; ?></p>
        <p>Nama : <?php echo $nama; ?></p>
        <p>Prodi : <?php echo $prodi; ?></p>
        <p>Semester : <?php echo $semester; ?></p>
        <p>Biaya UKT : Rp. <?php echo number_format($biaya,0,',','.'); ?></p>
        <p>Diskon : <?php echo $diskon; ?>%</p>
        <p><b>Yang Harus Dibayar : Rp. <?php echo number_format($total,0,',','.'); ?></b></p>
    </div>

    <?php } ?>

</div>

</body>
</html>
