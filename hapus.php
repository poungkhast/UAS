<?php

include("config.php");

if( isset($_GET['no']) ){

    // ambil id dari query string
    $no = $_GET['no'];

    // buat query hapus
    $sql = "DELETE FROM zakat WHERE no=$no";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-nama.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>