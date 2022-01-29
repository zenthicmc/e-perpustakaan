<?php
    include('functions.php');
    list($result,$jumlahData,$dataAwal,$dataPerHalaman,$halamanAktif,$jumlahHalaman) = pagination(6);
    if($dataAwal == 0) {$dataAwal = 1;}
    if($dataAwal == $dataPerHalaman) {$dataAwal = 1;$dataPerHalaman = $jumlahData-$dataPerHalaman;}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-Perpus | Books</title>
    <link rel="stylesheet" href="./assets/css/main2.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <nav class="navbar navbar-light navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">E-PERPUS</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">HOME</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="books.php">BOOKS</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php#about">ABOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="books" class="portfolio">
        <style>
            #book-list:hover {
                opacity: 0.9;
            }
        </style>
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">BOOKS</h2>
            <hr class="star-dark mb-5">
            <div class="row">
            <?php foreach ($result as $data) : ?>
                <div class="col-md-6 col-lg-4" id="book-list"><a href="view.php?id=<?= $data['id_buku'] ?>" class="d-block mx-auto portfolio-item" ><img class="img-fluid" src="assets/img/<?= $data['cover'] ?>" style="height: 500px;width: 400px;"></a></div>
            <?php endforeach; ?>
            </div>
            <div class="col">
                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                    <ul class="pagination" style="margin:auto;">
                        <?php if($halamanAktif > 1):?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif-1?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                         <?php else:?>
                            <li class="page-item disabled"><a class="page-link" href="?page=<?= $halamanAktif-1?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <?php endif;?>
                        <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
                        <?php if($i==$halamanAktif) :?>
                            <li class="page-item active"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                        <?php else:?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                        <?php endif;?>
                        <?php endfor; ?>
                        <?php if($halamanAktif < $jumlahHalaman):?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $halamanAktif+1?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        <?php else:?>
                            <li class="page-item disabled"><a class="page-link" href="?page=<?= $halamanAktif-1?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
                        <?php endif;?>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <footer class="text-center footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase">OUR SOCIAL MEDIA</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-dribbble fa-fw"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">About</h4>
                    <p><span>E-Perpus is a online platform to read books at anywhere &amp; anytime</span></p>
                </div>
            </div>
        </div>
    </footer>
    <div class="text-center text-white copyright py-4">
        <div class="container"><small>Copyright © Jagad Raya 2022</small></div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>
</html>
