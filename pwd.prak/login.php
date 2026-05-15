<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $konek,
        "SELECT * FROM admin 
        WHERE username='$username' 
        AND password='$password'"
    );

    $cek = mysqli_num_rows($query);

    if($cek > 0){

        $_SESSION['login'] = true;

        header("Location:index.php");
        exit;

    } else {

        $error = "Username atau Password Salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">

    <title>Login Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
          rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            width:100%;
            height:100vh;

            display:flex;
            justify-content:center;
            align-items:center;

            background:
            linear-gradient(rgba(0,0,0,0.5),
            rgba(0,0,0,0.5)),
            url('kelas.jpeg');

            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;

            overflow:hidden;
        }

        .container{
            width:100%;
            max-width:1200px;

            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:50px;
        }

        .welcome-text{
            color:white;
            width:50%;
        }

        .welcome-text h1{
            font-size:70px;
            margin-bottom:15px;
        }

        .welcome-text p{
            font-size:24px;
            line-height:40px;
        }

        .login-box{
            width:400px;

            background:rgba(255,255,255,0.95);

            padding:40px;

            border-radius:20px;

            box-shadow:0 10px 30px rgba(0,0,0,0.3);
        }

        .login-box h2{
            text-align:center;
            margin-bottom:30px;
            color:#0f172a;
        }

        .input-box{
            margin-bottom:20px;
        }

        .input-box input{
            width:100%;
            padding:15px;

            border:1px solid #ccc;
            border-radius:10px;

            font-size:16px;
        }

        button{
            width:100%;
            padding:15px;

            border:none;
            border-radius:10px;

            background:#2563eb;
            color:white;

            font-size:16px;
            font-weight:600;

            cursor:pointer;

            transition:0.3s;
        }

        button:hover{
            background:#1d4ed8;
        }

        .error{
            background:#fee2e2;
            color:#dc2626;

            padding:12px;
            border-radius:10px;

            text-align:center;
            margin-bottom:20px;
        }

        @media(max-width:900px){

            .container{
                flex-direction:column;
                text-align:center;
                gap:40px;
            }

            .welcome-text{
                width:100%;
            }

            .welcome-text h1{
                font-size:50px;
            }

            .login-box{
                width:100%;
                max-width:400px;
            }
        }

    </style>
</head>
<body>

    <div class="container">

        <div class="welcome-text">

            <h1>Selamat Datang</h1>

            <p>
                Sistem Pemetaan Minat dan Bakat Siswa
            </p>

        </div>

        <div class="login-box">

            <h2>LOGIN ADMIN</h2>

            <?php if(isset($error)){ ?>
                <div class="error">
                    <?= $error; ?>
                </div>
            <?php } ?>

            <form method="POST">

                <div class="input-box">
                    <input type="text"
                           name="username"
                           placeholder="Username"
                           required>
                </div>

                <div class="input-box">
                    <input type="password"
                           name="password"
                           placeholder="Password"
                           required>
                </div>

                <button type="submit" name="login">
                    LOGIN
                </button>

            </form>

        </div>

    </div>

</body>
</html>