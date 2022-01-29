<?php 
error_reporting(E_ERROR | E_PARSE);
include 'db.php';
$conn = new mysqli($servername, $username, $password, $dbname);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function pagination($dataPerHalaman) {
    // configure pagination

    global $conn;

    // menghitung jumlah data
    $jumlahData = count(query("SELECT * FROM books"));

    // menghitung jumlah halaman dgn cara membulatkan angka ke bilangan bulat keatas
    $jumlahHalaman = ceil($jumlahData / $dataPerHalaman);

    // menghitung halaman aktif
    $halamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;
    if($halamanAktif <= 0) {
        $halamanAktif = 1;
        echo "<script>window.location.href=books.php?page=$halamanAktif;</script>";
    }
    elseif($halamanAktif > $jumlahHalaman) {
        $halamanAktif = $jumlahHalaman;
        echo "<script>window.location.href=books.php?page=$halamanAktif;</script>";
    }
   
    // menghitung data awal untuk setiap halaman
    $dataAwal = ($dataPerHalaman * $halamanAktif) - $dataPerHalaman;

    $sql = "SELECT * FROM books LIMIT $dataAwal,$dataPerHalaman";
    $result = $conn->query($sql);

    return array($result,$jumlahData,$dataAwal,$dataPerHalaman,$halamanAktif,$jumlahHalaman);
}
?>
