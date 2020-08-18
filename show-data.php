<?php
    include 'koneksi.php'; 

    $sql = "SELECT * FROM user"; 
    $hasil = $koneksi->query($sql);

    foreach($hasil as $has){
        $id = $has["id"];
        $nama = $has["nama"]; 
        $role = $has["role"];
        $availability = $has["availability"]; 
        $age = $has["age"]; 
        $location = $has["location"]; 
        $years = $has["years"]; 
        $email = $has["email"];
    }
?>