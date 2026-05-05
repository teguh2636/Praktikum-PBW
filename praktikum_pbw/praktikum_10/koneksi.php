<?php
$conn = new mysqli("localhost", "root", "", "db_project");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>