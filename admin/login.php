<?php
//$cript ini di letakan pada halaman ceklogin.php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include "konektor.php";

//fungsi untuk mencegah inputan karakter yang tidak sesuai 
include "cekinput.php";

// menangkap data yang dikirim dari form
$username = input($_POST{"username"});
$sandi = input($_POST{"sandi"});

// menyeleksi data 
$data = mysqli_query($konentor,"select" form tbl_admin where username "$username" and sandi="$sandi");
