<?php
// session_start();
if (!isset($_SESSION['is_login'])) {
    header('location:../index.php');
}
?>

<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Info | Pengadan Masyarakat</title>
    <link rel="stylesheet" href="../assets/style/style-php.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>

<body>

    <div class="jumbotron jumbotron bg-cover home" style="background-size:cover">
        <div class="overlay"></div>
        <div class="container pembuka">
            <h1 class="display-3 mb-1">Blog</h1>
            <p class="lead">Posted on <span>Lorem</span></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/img/rth.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/img/rth.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 mt-5 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/img/rth.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>