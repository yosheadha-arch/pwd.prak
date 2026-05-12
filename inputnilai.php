<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins';
    }

    body{
        background: url('gambar1.jpg') no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
//hai
    .container{
        background: rgba(255,255,255,0.9);
        padding: 30px;
        border-radius: 15px;
        width: 80%;
        max-width: 1200px;
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
    }

    .semester-btn{
        margin-button: 20px;
    }

    .semester-btn button {
        padding: 10px 20px;
        border: none;
        margin: 5px;
        border-radius: 10px;
        cursor: pointer;
        background: #ddd;
    }

    .semester-btn .active{
        background: #3498db;
        color: white;
    }

    .nilai-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 15px;
        margin-bottom: 20px;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        text-align: left;
    }

    .input-group input {
        padding: 10px;
        border-radius: 10px;
        border: 2px solid black;
    }

    .submit-btn {
        width: 30%;
        padding: 12px;
        border: none;
        background: #3498db;
        color: white;
        border-radius: 10px;
        cursor: pointer;
    }

    @media(max-width:768px){
    .nilai-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

</style>
</head>
<body>
    <div class="semester-btn">
        <button type="button" id="btn1" class="active" onclick="gantiSemester(1)">Semester 1</button>
        <button type="button" id="btn2" onclick="gantiSemester(2)">Semester 2</button>
    </div>

    <form method="POST" action="hasil.php">
        <input type="hidden" name="semester" id="semester" value="1">

        <div id="smt1" class="nilai-grid"> 
            <div class="input-group"><label>Matematika</label><input type="number" name="mtk1"></div>
            <div class="input-group"><label>Informatika</label><input type="number" name="inf1"></div>
            <div class="input-group"><label>Bahasa Inggris</label><input type="number" name="eng1"></div>
            <div class="input-group"><label>Biologi</label><input type="number" name="bio1"></div>
            <div class="input-group"><label>Kimia</label><input type="number" name="kim1"></div>
            <div class="input-group"><label>Fisika</label><input type="number" name="fis1"></div>
            <div class="input-group"><label>Ekonomi</label><input type="number" name="eko1"></div>
            <div class="input-group"><label>Geografi</label><input type="number" name="geo1"></div>
            <div class="input-group"><label>Sosiologi</label><input type="number" name="sos1"></div>
            <div class="input-group"><label>B. Indonesia</label><input type="number" name="indo1"></div>
        </div>

        <div id="smt2" class="nilai-grid" style="display:none;">
            <div class="input-group"><label>Matematika</label><input type="number" name="mtk2"></div>
            <div class="input-group"><label>Informatika</label><input type="number" name="inf2"></div>
            <div class="input-group"><label>Bahasa Inggris</label><input type="number" name="eng2"></div>
            <div   div class="input-group"><label>Biologi</label><input type="number" name="bio2"></div>
            <div class="input-group"><label>Kimia</label><input type="number" name="kim2"></div>
            <div class="input-group"><label>Fisika</label><input type="number" name="fis2"></div>
            <div class="input-group"><label>Ekonomi</label><input type="number" name="eko2"></div>
            <div class="input-group"><label>Geografi</label><input type="number" name="geo2"></div>
            <div class="input-group"><label>Sosiologi</label><input type="number" name="sos2"></div>
            <div class="input-group"><label>B. Indonesia</label><input type="number" name="indo2"></div>
        </div>
        <br>
        <button type="submitbrt" class="submit-btn">Proses Hasil</button>
    </form>
    
    <div>
        <script>
            function gantiSemester(smt) {
                document.getElementById("btn1").classList.remove("active");
                document.getElementById("btn2").classList.remove("active");

                if(smt == 1) {
                    document.getElementById("btn1").classList.add("active");
                    document.getElementById("smt1").style.display = "grid";
                    document.getElementById("smt2").style.display = "none";
                } else {
                    document.getElementById("btn2").classList.add("active");
                    document.getElementById("smt1").style.display = "none";
                    document.getElementById("smt2").style.display = "grid";
                }

                document.getElementById("semester").value = smt;
            }
        </script>
    </div>
</body>
</html>