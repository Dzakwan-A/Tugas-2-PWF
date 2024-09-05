<?php

// fungsi menampilkan
function select($query)
{
    //panggil koneksi database
    global $db ;

    $result = mysqli_query($db, $query);
    $rows = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}



// fungsi menambah siswa
function create_siswa($post)
{
    global $db;

    $nama       = strip_tags($post['nama']);
    $nim        = strip_tags($post['nim']);
    $kelas      = strip_tags($post['kelas']);
    $email      = strip_tags($post['email']);
    $saran      = strip_tags($post['saran']);
    $gender     = strip_tags($post['gender']);


    //query tambah data
    $query = "INSERT INTO contact_form VALUES(null, '$nama', '$nim', '$kelas', '$email' , '$saran' , '$gender')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db); 
}



//fungsi menghapus siswa
function delete_siswa($id_form)
{
    global $db; 

    // query hapus data siswa
    $query = "DELETE FROM contact_form WHERE id_form = $id_form"; 

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

 