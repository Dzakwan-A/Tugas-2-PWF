<?php 

session_start();
include 'setting/app2.php';

// check tombol tambah ditekan
if(isset($_POST['tambah'])) {
    if (create_siswa($_POST) > 0) {
        echo "<script>
                alert('Data siswa berhasil ditambahkan');
                document.location.href = 'main.php';
                </script>";
    } else {
        echo "<script>
                alert('Data siswa gagal ditambahkan');
                document.location.href = 'main.php';
                </script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style_2.css">
    <title>Contact-Form</title>
    <style> body {
     background-image : url("images/02.gif") ; }</style>
    <link rel="icon" href="images/PXbook.png">
    <meta name="theme-color" content="#7952b3">
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="multipart/form-data">
            <p class="form-label" style="font-size: 2rem; font-weight: 800; text-align: center;">Contact Form</p>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="input-group">
                <input type="number" placeholder="NIM" name="nim" required>
            </div>

            <div class="row">
            <label for="kelas" class="form-label"></label>
  <select name="kelas" class="form-control" id="kelas" required>
            <option value ="">--Pilih kelas--</option>
            <option value ="7A">7A</option>  
            <option value ="7B">7B</option>
            <option value ="7C">7C</option>   
            <option value ="7D">7D</option>
            <option value ="8A">8A</option>  
            <option value ="8B">8B</option>
            <option value ="8C">8C</option>   
            <option value ="8D">8D</option>
            <option value ="9A">9A</option>  
            <option value ="9B">9B</option>
            <option value ="9C">9C</option>   
            <option value ="9D">9D</option>
</select>       
            </div>

            <br>

            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <label>Saran:</label>
                <textarea name="saran"></textarea>
            </div>
            <div class="mb-3 col-6">
  <label for="gender" class="form-label"></label>
  <select name="gender" class="form-control" id="gender" required>
            <option value ="">--Pilih Jenis Kelamin--</option>
            <option value ="Laki-Laki">Laki-Laki</option>  
            <option value ="Perempuan">Perempuan</option>
</select>    
</div>

            <br>

            <div class="input-group">
                <button name="tambah" class="btn">Tambah</button>
            </div>
            <div class="input-group">
                <a href="list.php" class="btn" >Index siswa</button>
            </div>
        </form>
    </div>
</body>
</html>
