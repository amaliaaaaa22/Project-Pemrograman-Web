<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #fce4ec, #f8bbd0);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }

        .container {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
            margin-top: 2rem;
        }

        h2 {
            color: #e91e63;
            text-align: center;
            margin-bottom: 1rem;
            font-size: 2rem;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background: #f06292;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }

        .back-button:hover {
            background: #e91e63;
            transform: translateY(-2px);
        }

        .back-button i {
            margin-right: 0.5rem;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #666;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #f8bbd0;
            border-radius: 10px;
            outline: none;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .form-group input:focus {
            border-color: #e91e63;
            box-shadow: 0 0 0 3px rgba(233, 30, 99, 0.1);
        }

        .submit-btn {
            background: #e91e63;
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background: #d81b60;
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .container {
            animation: fadeIn 0.6s ease-out;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Data</h2>
        <a href="tampil.php" class="back-button">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        
        <?php
        include 'koneksi.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM user WHERE idUser ='$id'");

            if (mysqli_num_rows($data) > 0) {
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <form method="post" action="update.php">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($d['nama']); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="userName" value="<?php echo htmlspecialchars($d['userName']); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($d['password']); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($d['email']); ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($d['nama']); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" id="nrp" name="nrp" value="<?php echo htmlspecialchars($d['nrp']); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="tanggallahir">Tanggal Lahir</label>
                            <input type="date" id="tanggallahir" name="tanggallahir" value="<?php echo htmlspecialchars($d['tanggallahir']); ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" id="jurusan" name="jurusan" value="<?php echo htmlspecialchars($d['jurusan']); ?>" required>
                        </div>
                            
                        <div class="form-group">
                            <label for="status">jeniskelamin</label>
                            <input type="text" id="jeniskelamin" name="jeniskelamin" value="<?php echo htmlspecialchars($d['jeniskelamin']); ?>" required>
                        </div>
                            
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" id="status" name="status" value="<?php echo htmlspecialchars($d['status']); ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="alamat">Status</label>
                            <input type="text" id="alamat" name="alamat" value="<?php echo htmlspecialchars($d['alamat']); ?>" required>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                    </form>
                    <?php 
                }
            } else {
                echo "<p class='error'>Data tidak ditemukan.</p>";
            }
        } else {
            echo "<p class='error'>ID tidak diberikan.</p>";
        }
        ?>
    </div>

    <script>
        // Add smooth animations when focusing inputs
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-5px)';
                this.style.transition = 'all 0.3s ease';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });

        // Form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const inputs = this.querySelectorAll('input[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#ff1744';
                    input.style.animation = 'shake 0.5s';
                } else {
                    input.style.borderColor = '#f8bbd0';
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Mohon isi semua field yang diperlukan');
            }
        });
    </script>