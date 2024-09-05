<?php

session_start();

include 'setting/app2.php';

// menampilkan data mahasiswa 
$data_contact_form = select ("SELECT * FROM contact_form ORDER BY id_form DESC");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style> body {
     background-image : url("images/sa.jpg") ; }</style>
    <link rel="icon" href="images/09.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">

    <title>List Siswa</title>
  </head>
  <body>

  <div class="container mt-5">
        <h1><i class="fas fa-user-circle"></i> Data siswa </h1>
        <a href="main.php"  class="btn btn-success btn-sm" style="float: right;"><i class="fa-solid fa-backward"></i> Kembali</a>
        <hr>

        <table style="background-color: #D6EEEE;" class="table table-bordered table-striped mt-3" id="table">
        <thead> 
            <tr>
                <th class="text-start">No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Email</th>
                <th>Saran</th>
                <th>Gender</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody> 
           <?php $no = 1; ?>
           <?php foreach ($data_contact_form as $contact_form) : ?>
            <tr> 
                <td class="text-start"><?= $no++; ?></td>
                <td><?= $contact_form['nama']; ?></td>
                <td><?= $contact_form['nim']; ?></td>
                <td><?= $contact_form['kelas']; ?></td>
                <td><?= $contact_form['email']; ?></td>
                <td><?= $contact_form['saran']; ?></td>
                <td><?= $contact_form['gender']; ?></td>
                <td class= "text-center" width="15%"> 
                    <a href="hapus-list.php?id_form=<?= $contact_form['id_form']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yain data siswa mau dihapus.?');"><i class="fas fa-backspace"></i> Hapus</a>
                </td>
                </tr>
           <?php endforeach; ?>
        </tbody>
        </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- asset plugin database -->

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

<!-- font awesome with CDN -->
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

<script> 
new DataTable('#table');
</script>

</body>
</html>