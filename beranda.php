<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

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
    <td>
        <tr>Beranda</tr>
        <tr>Data Siswa</tr>
        <tr>Tambah Siswa</tr>
    </td>
</div>

    
    <!section hero>
    <section class="hero">
        <div class="hero-box">
            <h1>WELCOME</h1>
            <div class="total">
                TOTAL SISWA <br> 200 SISWA
            </div>

            <div class="nilai">
                <div class="tinggi">85 - 100</div>
                <div class="sedang">70 - 84</div>
                <div class="rendah">< 70</div>
            </div>
            <a href="analisis.php">
                <button>Mulai Input Data</button>
            </a>

        </div>
     </section>

     <!peminatan>
     <section class="section" id="peminatan">
        <div class="overlay">
            <div class="grid">

            <div class="card">
                <h3>peminatan Komputer</h3>
                <a href="komputer.php">
                    <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>peminatan IPA</h3>
                <a href="ipa.php">
                    <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>peminatan IPS</h3>
                <a href="ips.php">
                    <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>peminatan FISIKA</h3>
                <a href="fisika.php">
                    <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>peminatan BIOLOGI</h3>
                <a href="biologi.php">
                    <button>Lihat detail</button>
                </a>
            </div>

            <div class="card">
                <h3>peminatan Matematika</h3>
                <a href="matematika.php">
                    <button>Lihat detail</button>
                </a>
            </div>
            </div>
        </div>
     </section>
<script>
    function scrollDown() {
        document.getElementById("peminatan").scrollIntoView({
            beaviior: "smooth"
        });
    }
</script>
</body>
</html>