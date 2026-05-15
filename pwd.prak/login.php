<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($konek, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){

    $_SESSION['login'] = true;

    header("Location:index.php");
    exit;
} else {
    $error = "Username atau Password Salah";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            height:100vh;
            display:flex;
    justify-content:center;
    align-items:center;
    gap:80px;

    background:
    linear-gradient(rgba(0,0,0,0.4),
    rgba(0,0,0,0.4)),
    url('bg.jpg');

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    font-family:'Poppins',sans-serif;
        }

        .login-box{
            width:400px;
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            margin-bottom:30px;
            color:#0f172a;
        }

         input{
            width:100%;
            padding:14px;
            margin-bottom:20px;
            border:1px solid #ccc;
            border-radius:10px;
        }

        button{
            width:100%;
            padding:14px;
            border:none;
            border-radius:10px;
            background:#2563eb;
            color:white;
            font-size:16px;
            cursor:pointer;
        }

         button:hover{
            background:#1d4ed8;
        }

        .error{
            color:red;
            margin-bottom:20px;
            text-align:center;
        }

    </style>
</head>
<body>

    <div class="login-image">
    <img src="kelas.jpeg" alt="">
    </div>

    <div class="welcome-text">
    <h1>Selamat Datang</h1>
    <p>Sistem Pemetaan Minat dan Bakat Siswa</p>
    </div>

    <div class="login-box">

    <h2>LOGIN ADMIN</h2>

    <?php if(isset($error)){ ?>
        <div class="error">
            <?= $error; ?>
        </div>
    <?php } ?>

    <form method="POST">

        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">
            LOGIN
        </button>

    </form>

</div>

</body>
</html>