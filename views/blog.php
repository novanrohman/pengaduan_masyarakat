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
            <h1 class="display-3 mb-1">Info</h1>
            <p class="lead">Posted on <span>Lorem</span></p>
        </div>
    </div>