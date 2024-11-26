<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$userName = $_POST['userName'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$tanggallahir = $_POST['tanggallahir'];
$jurusan = $_POST['jurusan'];
$jeniskelamin = $_POST['jeniskelamin'];
$email = $_POST['email'];
$status = $_POST['status'];
$alamat = $_POST['alamat'];

// Prepare an SQL statement for execution to prevent SQL injection
$stmt = $koneksi->prepare("INSERT INTO user (userName, password, nama, nrp, tanggallahir, jurusan, jeniskelamin, status, alamat, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters dengan tipe data yang sesuai
$stmt->bind_param("ssssssssss", 
    $userName, 
    $password, 
    $nama, 
    $nrp, 
    $tanggallahir, 
    $jurusan, 
    $jeniskelamin, 
    $status, 
    $alamat, 
    $email
);

// Execute the statement
if (!$stmt->execute()) {
    die('Error: ' . $stmt->error);
}

// Close the statement and connection
$stmt->close();
$koneksi->close();

// mengalihkan halaman kembali ke index.php
header("Location: tampil.php");
exit();
?>