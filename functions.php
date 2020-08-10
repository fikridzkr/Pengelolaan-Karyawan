<?php
//buat koneksi ke db
$conn = mysqli_connect( 'sql102.unaux.com','unaux_26469146','sf0oqgagt5126','unaux_26469146_programkaryawan');

//fungsi registrasi
function registrasi($register){
    global $conn;

    $username = strtolower (stripslashes ($register['username']));
    $password = mysqli_real_escape_string($conn,$register['password']);
    $password2 = mysqli_real_escape_string($conn,$register['password2']);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn , "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_array($result)) {
        echo"<script>
            alert('Username yang anda masukkan sudah ada, silahkan masukkan username lain.');
        </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }

    //enskrip password
    $password = password_hash($password,PASSWORD_DEFAULT);

    //tambah data ke db
    mysqli_query($conn , "INSERT INTO users VALUES ('','$username','$password')");

    return mysqli_affected_rows($conn);
}

//fungsi tambah artikel
function tambah($data){
    global $conn;
    //ambil data dari tiap elemen
    $nik = htmlspecialchars($data['nik']);
    $nama = htmlspecialchars($data['nama']);
    $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
    $alamat = htmlspecialchars($data['alamat']);
    

    //query insert data 
    $query = "INSERT INTO tb_karyawan VALUES ('','$nik','$nama','$tempat_lahir','$tanggal_lahir','$alamat')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi hapus data
function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM tb_karyawan WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
            global $conn;
        //ambil data dari tiap elemen
        $id = $data["id"];
        $nik = htmlspecialchars($data['nik']);
        $nama = htmlspecialchars($data['nama']);
        $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
        $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
        $alamat = htmlspecialchars($data['alamat']);
        //query insert data 
        $query = "UPDATE tb_karyawan SET 
                    nik = '$nik',
                    nama = '$nama',
                    tempat_lahir = '$tempat_lahir',
                    tanggal_lahir = '$tanggal_lahir',
                    alamat = '$alamat'
                    WHERE id = $id
        ";
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
}


// fungsi ambil data
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


?>