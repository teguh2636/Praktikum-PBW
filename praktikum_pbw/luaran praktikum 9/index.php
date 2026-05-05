<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body style="background:#f4f6f9;">

<div class="container mt-4">

    <!-- TITLE -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3><i class="bi bi-mortarboard-fill"></i> Data Mahasiswa</h3>
        <a href="tambah.php" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah
        </a>
    </div>

    <!-- CARD STATS -->
    <div class="row mb-4">
        <?php
        $total = $conn->query("SELECT COUNT(*) as jml FROM mahasiswa")->fetch_assoc()['jml'];
        ?>
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h6>Total Mahasiswa</h6>
                <h3><?= $total ?></h3>
            </div>
        </div>
    </div>

    <!-- SEARCH -->
    <div class="card shadow-sm p-3 mb-3">
        <form method="GET" class="d-flex">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari nama...">
            <button class="btn btn-success"><i class="bi bi-search"></i></button>
        </form>
    </div>

    <!-- TABLE -->
    <div class="card shadow-sm">
        <div class="card-body">

        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            <?php
            $no = 1;
            $cari = $_GET['cari'] ?? '';
            $stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE nama LIKE ?");
            $like = "%$cari%";
            $stmt->bind_param("s", $like);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['umur']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        </div>
    </div>

</div>
</body>
</html>