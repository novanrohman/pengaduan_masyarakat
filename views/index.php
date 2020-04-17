<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:../index.php');
}
?>

<!doctype html>
<html lang="en">


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
                        <a class="nav-link" href="index.php?page=masyarakat">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="index.php?page=about">About</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="index.php?page=blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="badge badge-pill btn-success p-2 tombol" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
                case 'masyarakat':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'blog':
                    include "blog.php";
                    break;
                                    
                default:
                    include "home.php";
                    break;
            }
        } else {
            include "home.php";
        }

    ?>

<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy;2020 Novan Rohman</small>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery.slim.min.js">
    </script>
    <script src="../asstes/popper.min.js">
    </script>
    <script src="../assets/js/bootstrap.js">
    </script>

    <!-- Javascript -->
    <script src="../assets/js/script.js"></script>
    <!-- JQuery -->
    
</body>

</html>