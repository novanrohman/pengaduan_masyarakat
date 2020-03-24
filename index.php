<!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/style/style-php.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top" id="nav">
            <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active menu">
                        <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="index.php?page=about">About</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="index.php?page=info">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="badge badge-pill btn-outline-primary  mr-2 mb-2 p-2 tombol" href="login.php">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="badge badge-pill btn-success p-2 tombol" href="sign-up.php">Daftar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "halaman/home.php";
                    break;
                    
                case 'about':
                    include "halaman/about.php";
                    break;
                
                default:
                    include "halaman/404.php";
                    break;
            }
        } else {
            include "halaman/home.php";
        }

    ?>

<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy;2020 Novan Rohman</small>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="asstes/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="assets/js/bootstrap.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!-- Javascript -->
    <script src="assets/js/script.js"></script>
    <!-- JQuery -->
    
</body>

</html>