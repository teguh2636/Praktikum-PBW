<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">
<div class="container mt-5">
<div class="card shadow p-4">

<h3>Tambah Mahasiswa</h3>

<form method="POST">
    <input class="form-control mb-2" name="nim" placeholder="NIM">
    <input class="form-control mb-2" name="nama" placeholder="Nama">
    <input class="form-control mb-2" name="jurusan" placeholder="Jurusan">
    <input class="form-control mb-2" name="alamat" placeholder="Alamat">
    <input class="form-control mb-2" type="number" name="umur" placeholder="Umur">

    <button class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO mahasiswa (nim, nama, jurusan, alamat, umur) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $_POST['nim'], $_POST['nama'], $_POST['jurusan'], $_POST['alamat'], $_POST['umur']);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success mt-3'>Data berhasil ditambahkan</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Gagal menambahkan</div>";
    }
}
?>

</div>
</div>
</body>
</html>