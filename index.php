<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-Perpus | Home</title>
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
    <header class="text-center text-white bg-primary masthead" style="padding-top: 100px;"><img class="img-fluid d-block mx-auto mb-5" src="assets/img/—Pngtree—tutorial%20and%20e-book%20illustration%20concept_4188248.png" style="width: 300px;height: 300px;margin-top: 0px;">
        <div class="container">
            <h1>E-Perpustakaan</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Baca Buku Gratis Dimana &amp; Kapan Saja</h2>
        </div>
    </header>
    <section id="books" class="portfolio">
        <?php 
        require 'functions.php'; 
        $datas = query("SELECT * FROM books ORDER BY tgl_input DESC LIMIT 3");
        ?>
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">RECENTLY ADDED</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <?php foreach ($datas as $data) : ?>
                    <div class="col-md-6 col-lg-4"><a class="d-block mx-auto portfolio-item" href="#books-modal-<?= $data['id_buku'] ?>" data-bs-toggle="modal"><img class="img-fluid" src="assets/img/<?= $data['cover'] ?>" style="height: 500px;width: 400px;"></a></div>
                <?php endforeach; ?>
                <a href="books.php" id="readmore" class="btn btn-secondary"><i class="fa fa-eye"></i> See more</a>
            </div>   
        </div>
    </section>
    <section class="text-white bg-primary mb-0" id="about">
        <div class="container">
            <h2 class="text-uppercase text-center text-white">About</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead text-start flex-row justify-content-center align-items-center align-content-center"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;<br></p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&nbsp;<br><br></p>
                </div>
            </div>
            <div class="text-center mt-4"></div>
        </div>
    </section>
    <footer class="text-center footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting<br><br></p>
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
                    <p class="lead mb-0"><span>E-Perpus is a online platform to read books at anywhere &amp; anytime</span></p>
                </div>
            </div>
        </div>
    </footer>
    <div class="text-center text-white copyright py-4">
        <div class="container"><small>Copyright © Jagad Raya 2022</small></div>
    </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="text-center d-block rounded text-white" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <?php foreach ($datas as $data) : ?>
    <div class="modal text-center" role="dialog" tabindex="-1" id="books-modal-<?= $data['id_buku'] ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0"><?= $data['judul_buku'] ?></h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/<?= $data['cover'] ?>" width="50%">
                                <p class="mb-5"><?= $data['deskripsi_buku'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a href="view.php?id=<?= $data['id_buku'] ?>" class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button"><i class="fa fa-eye"></i>&nbsp;View More</a></div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>