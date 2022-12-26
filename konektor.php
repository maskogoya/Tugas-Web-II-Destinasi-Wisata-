<?php
$konektor = mysqli_connect("localhost", "root", "","destinas pariwisata");
// check conection
if (mysqli_connect_error()){
    echo "koneksi database gagal:" .mysqli_connect_error();
}
