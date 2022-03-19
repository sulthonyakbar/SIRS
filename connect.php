<?php

$servername = "localhost";
$database = "db_sirs";
$username = "root";
$password = "";
 
$koneksi = mysqli_connect($servername, $username, $password);

if ($koneksi) {
    $open=mysqli_select_db($koneksi, $database);
    echo "";
    if (!$open){
        echo "Database tidak terhubung";
    }
} else {
    echo " Mysql tidak terhubung";
}

?>