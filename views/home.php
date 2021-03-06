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
    <title>Home | Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="../assets/style/style-php.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>

<body>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron bg-cover home" style="background-size:cover;">
        <div class="overlay"></div>
        <div class="container pembuka">
            <h1 class="display-3 mb-1">Selamat Datang<br><?php echo $_SESSION['name']; ?></h1>
            <p class="lead">Posted on <span>Lorem</span></p>
            <a href="#form" class="btn badge-warning aduan text-dark">Laporkan Masalah</a>
        </div>
    </div>

    <!-- Content -->
    <main>
        <div class="container">

            <div class="content">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 mt-3">
                        <div class="card card-1 bg-dark text-light">
                            <div class="card-body">
                                <h3 class="card-title"><span style="font-size: 50px ;color: rgb(255, 255, 255);"><i class="fab fa-github"></i></span> PENGADUAN</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 mt-3">
                        <div class="card card-1 bg-dark text-light">
                            <div class="card-body">
                                <h3 class="card-title"><span style="font-size: 50px ;color: rgb(255, 255, 255);"><i class="fab fa-github"></i></span> PELAYANAN</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 mt-3">
                        <div class="card card-1 bg-dark text-light">
                            <div class="card-body">
                                <h3 class="card-title"><span style="font-size: 50px ;color: rgb(255, 255, 255);"><i class="fab fa-github"></i></span> FASILITAS PUBLIK</h3>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="row">
                    <div class="col-lg-6 mt-5 mb-5">
                        <h2>Aduan</h2>
                        <p>Adukan permasalahan publik di sini, dengan mengisi data diri serta pesan yang akan
                            disampaikan</p>
                        <br>
                        <br>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quis molestiae illum
                            rerum maiores voluptatem, possimus nesciunt totam a nobis magni tempora dolor, assumenda
                            iusto aperiam? Nam numquam quaerat commodi.</small>
                    </div>
                    <div class="card col-lg-6 mt-5 mb-5" id="form">
                        <div class="card-body md-3">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan nama anda">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan alamat anda">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan alamat Email anda" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jenis Pengaduan</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Pelayanan</option>
                                        <option>Fasilitas</option>
                                        <option>Ruang Terbuka Hijau</option>
                                        <option>Jalan</option>
                                        <option>Penerangan Jalan</option>
                                    </select>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Pilih Gambar</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </form>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Pesan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pesan anda......."></textarea>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </main>