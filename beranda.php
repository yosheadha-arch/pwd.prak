<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemetaan Siswa</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    /*navbar*/
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 40px;
        background: #1da1f2;
        color: white;
    }

    .navbar h1 {
        font-size: 22px;
    }

    .navbar ul {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-box h1 {
        font-size: 50px;
        color: #1da1f2;
    }

    .total {
        margin: 20px 0;
        background: #3498db;
        color: white;
        padding: 10px 20px;
        border-radius: 10px;
        font-size: 20px;
    }

    .nilai div {
        padding: 10px;
        color: white;
        border-radius: 5px;
    }
    .tinggi {background: green;}
    .sedang {background: orange;}
    .tinggi {background: red;}

    .hero button {
        padding: 12px 25px;
        border: none;
        background: #3498db;
        color: white;
        border-radius: 10px;
        cursor: pointer;
    }

    /*peminatan*/
    .section {
        min-height: 100vh;
        padding:60px;
        background: url('') center/cover no-repeat;
    }

    .overlay {
        backdrop-filter: blur(6px);
    }

    /*grid*/
    .grid {
        display: grid;
        grid-template-colums: repeat(3, 1fr);
        gap: 25px;
    }
    .card {
        background: #eee;
        padding: 25px;
        border-radius: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card button {
        background: #3498db;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
    }

    /*responsive*/
    @media(max-width: 768px) {
        .grid {
            grid-template-columns: 1fr;
        }
    }

</style>
<body>
    
< navbar >
<div class="navbar">
    <h1>SMA NEGERI 2 BABARSARI</h1>
    

</div>
</body>
</html>