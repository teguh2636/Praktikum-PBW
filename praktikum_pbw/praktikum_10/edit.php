<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

$id = $_GET['id'];

$data = $conn->query("SELECT * FROM mahasiswa WHERE id=$id")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card p-4 shadow">

<h3>Edit Mahasiswa</h3>

<form method="POST">
    <input class="form-control mb-2" name="nim" value="<?= $data['nim']; ?>">
    <input class="form-control mb-2" name="nama" value="<?= $data['nama']; ?>">
    <input class="form-control mb-2" name="jurusan" value="<?= $data['jurusan']; ?>">
    <input class="form-control mb-2" name="alamat" value="<?= $data['alamat']; ?>">
    <input class="form-control mb-2" name="umur" value="<?= $data['umur']; ?>">
    <button class="btn btn-warning">Update</button>
</form>

<?php
if ($_POST) {
    $stmt = $conn->prepare("UPDATE mahasiswa SET nim=?,nama=?,jurusan=?,alamat=?,umur=? WHERE id=?");
    $stmt->bind_param("ssssii", $_POST['nim'], $_POST['nama'], $_POST['jurusan'], $_POST['alamat'], $_POST['umur'], $id);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success mt-2'>Berhasil update</div>";
    }
}
?>

</div>
</div>
</body>
</html>