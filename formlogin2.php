<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background: url('https://example.com/butterfly-background.jpg') no-repeat center center fixed; /* Ganti dengan URL gambar kupu-kupu */
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: rgba(255, 182, 193, 0.9); /* Warna pink dengan transparansi */
            border-radius: 20px;
            padding: 60px;
            width: 500px; /* Lebar lebih besar */
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        h1 {
            color: #ff69b4; /* Warna pink cerah */
            text-align: center;
            margin-bottom: 40px;
            font-weight: 300;
            font-size: 2.5em; /* Ukuran font lebih besar */
        }
        .input-group {
            margin-bottom: 30px; /* Jarak antar input lebih besar */
        }
        .input-group input {
            width: 100%;
            padding: 15px; /* Padding lebih besar */
            border: none;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50px;
            color: #ff69b4; /* Warna pink cerah */
            font-size: 18px; /* Ukuran font lebih besar */
        }
        .input-group input::placeholder {
            color: rgba(255, 105, 180, 0.7); /* Placeholder pink */
        }
        button {
            width: 100%;
            padding: 15px; /* Padding lebih besar */
            border: none;
            border-radius: 50px;
            background: #ff1493; /* Warna pink gelap untuk tombol */
            color: #fff;
            font-size: 18px; /* Ukuran font lebih besar */
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #ff6f91; /* Warna pink lebih cerah saat hover */
        }
        .links {
            margin-top: 30px; /* Jarak antar link lebih besar */
            text-align: center;
        }
        .links a {
            color: #ff69b4; /* Warna pink cerah */
            text-decoration: none;
            font-size: 16px; /* Ukuran font lebih besar */
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Welcome Back</h1>
        <form action="tampil.php" method="POST">
            <div class="input-group">
                <input type="text" name="userName" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="Password" placeholder="Password" required>
            </div>
            <button type="submit">Log In</button>
        </form>
        <div class="links">
            <a href="#">Forgot Password?</a>
            <a href="#">Sign Up</a>
        </div>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you can add client-side validation or AJAX submission
            this.submit();
        });
    </script>
</body>
</html>