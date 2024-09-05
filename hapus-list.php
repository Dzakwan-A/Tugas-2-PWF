<?php

include 'setting/app2.php';

// menerima id mahasiswa yang dipilih pengguna
$id_form = (int)$_GET['id_form']; 

if (delete_siswa ($id_form) > 0 ) {
    echo "<script>
            alert('Data siswa berhasil dihapus');
            document.location.href = 'list.php' ;
            </script>"; 
}   else {
    echo "<script>
        alert('Data siswa gagal dihapus');
        document.location.href = 'list.php' ;
        </script>";
}