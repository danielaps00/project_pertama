<?php
    include 'koneksi.php'; 

    $sql = "INSERT INTO user(
        id, 
        nama,
        role,
        availability, 
        age,
        location,
        years, 
        email
    ) VALUE (
        '1',
        'Daniel',
        'Fullstack Dev',
        'Full Time',
        '19',
        'Jakarta',
        '3',
        'danielsahelangi8@gmail.com'
    )"; 

    if($koneksi->query($sql) == TRUE){
        echo "data berhasil disimpan";
    } else {
        echo "data gagal disimpan"; 
    }
?>