<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id_user']; 
        $nama = $_POST['nama']; 
        $role = $_POST['role']; 
        $availability = $_POST['availability']; 
        $age = $_POST['age']; 
        $location = $_POST['location']; 
        $years = $_POST['years']; 
        $email = $_POST["email"];
         
        $sql = "UPDATE user 
                SET id = '$id',
                    nama = '$nama', 
                    role = '$role', 
                    availability = '$availability',
                    age = '$age', 
                    location = '$location', 
                    years = '$years', 
                    email = '$email'
                WHERE id = '$id'"; 
        if($koneksi->query($sql) == TRUE){
            echo "<script> alert('data berhasil diubah'); </script>"; 
        } else {
            echo "<script> alert('data gagal diubah'); </script>"; 
        }
    }
?>