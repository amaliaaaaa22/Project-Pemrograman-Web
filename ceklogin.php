<?php 
    session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $userName = $_POST['userName'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE userName='$userName' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['userName'] = $userName;
        $_SESSION['status'] = "login";
        header("location:tampil.php");
    }
    else{
        
        echo "<script> alert ('login gagal ! username dan password tidak benar ');</script>";
        echo "<script> window.location ='formlogin.php';</script>";
    }   
?>