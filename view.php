<?php 
    require 'functions.php'; 
    $id = $_GET['id'];
    $datas = query("SELECT * FROM books WHERE id_buku='$id'");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>E-Perpus | View</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
<style>
html {
    overflow-x: hidden;
}
.cover {
    height: 100%;
    width: 400px;
    margin-left: 7rem;
}

.cover img {
    height: 500px;
    width: 400px;
    float: left;
}

.info-main {
    width: 60%;
    height: auto;
    padding-left: 3%;
    word-break: break-all;
}

@media only screen and (max-width: 1280px) {
    .cover {
        margin-left: 4.4rem;
    }
}

@media only screen and (max-width: 1280px) {
    .cover {
        margin-left: 4.4rem;
    }
}

@media only screen and (max-width: 1024px) {
    .cover {
        margin-left: 2rem;
    }
}


@media only screen and (max-width: 768px) {
    .cover {
        position: absolute;
        margin-left: 0px;
    }
    .container h2 {
        position: absolute;
    }
    .container hr {
        float: left;
    }

    .cover img {
        float: left;
        margin-left: 10px;
        width: 335px;
    }

    .info-main {
        margin-top: 33rem;
        padding: 2px 20px;
        width:100%;
    }

    body {
        overflow-x: hidden;
        width: 100%;
    }
}
</style>
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
    <section id="read" class="read">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary" style="float:left;">VIEW</h2>
            <hr class="star-dark mb-5" style="width: 400px;float:left;position:absolute;margin-top:4rem;">
        </div>
        <div style="width: 100%;height: auto;display: flex;margin-top:100px;">
        <?php foreach ($datas as $data) : ?>
            <?php $filename = $data['file']; ?>
            <div class="cover">
                <img src="assets/img/<?= $data['cover'] ?>">
            </div>
            <div class="info-main">
                <div class="info">
                    <form method="post" action="view.php?id=<?= $data['id_buku'] ?>">
                        <h4 class="text-uppercase text-secondary d-xxl-flex justify-content-xxl-start">Title:</h4>
                        <p class="text text-secondary d-xxl-flex justify-content-xxl-start"><?= $data['judul_buku'] ?></p>
                        <h4 class="text-uppercase text-secondary d-xxl-flex justify-content-xxl-start">Authors:</h4>
                        <p class="text text-secondary d-xxl-flex justify-content-xxl-start"><?= $data['penulis_buku'] ?></p>
                        <h4 class="text-uppercase text-secondary d-xxl-flex justify-content-xxl-start">Description:</h4>
                        <p class="text text-secondary d-xxl-flex justify-content-xxl-start"><?= $data['deskripsi_buku'] ?></p>
                        <a target="_blank" rel="noopener noreferrer" href="./assets/books/<?= $filename ?>" name="read" class="btn btn-success"><i class="fa fa-eye"></i> Read</a>
                        <a href="./assets/books/<?= $filename ?>" name="download" class="btn btn-warning" style="margin-left: 10px;" download><i class="fa fa-download"></i> Download</a>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
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
<?php 
