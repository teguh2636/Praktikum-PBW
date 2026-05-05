<?php

include 'koneksi.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "✅ Data berhasil dihapus";
} else {
    echo "❌ Gagal menghapus data";
}

header("Location: index.php");
?>