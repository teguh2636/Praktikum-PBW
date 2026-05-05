<?php include 'koneksi.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">
<div class="container mt-5">
<div class="card shadow p-4">

<h3>Edit Mahasiswa</h3>

<form method="POST">
    <input class="form-control mb-2" name="nim" value="<?= $data['nim']; ?>">
    <input class="form-control mb-2" name="nama" value="<?= $data['nama']; ?>">
    <input class="form-control mb-2" name="jurusan" value="<?= $data['jurusan']; ?>">
    <input class="form-control mb-2" name="alamat" value="<?= $data['alamat']; ?>">
    <input class="form-control mb-2" type="number" name="umur" value="<?= $data['umur']; ?>">

    <button class="btn btn-warning">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("UPDATE mahasiswa SET nim=?, nama=?, jurusan=?, alamat=?, umur=? WHERE id=?");
    $stmt->bind_param("ssssii", $_POST['nim'], $_POST['nama'], $_POST['jurusan'], $_POST['alamat'], $_POST['umur'], $id);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success mt-3'>Data berhasil diupdate</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Gagal update</div>";
    }
}
?>

</div>
</div>
</body>
</html>