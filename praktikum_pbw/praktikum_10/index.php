<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php?message=Harus login dulu!");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<div class="container mt-4">

<div class="d-flex justify-content-between">
    <h3>Data Mahasiswa</h3>
    <div>
        <span>Halo, <?= $_SESSION['nama']; ?></span>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</div>

<a href="tambah.php" class="btn btn-primary mb-3">+ Tambah</a>

<table class="table table-bordered">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Alamat</th>
    <th>Umur</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
$data = $conn->query("SELECT * FROM mahasiswa");

while ($row = $data->fetch_assoc()) {
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nim']; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['jurusan']; ?></td>
    <td><?= $row['alamat']; ?></td>
    <td><?= $row['umur']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</div>
</body>
</html>