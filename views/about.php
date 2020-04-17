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
    <title>About | Pengadan Masyarakat</title>
    <link rel="stylesheet" href="../assets/style/style-php.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>

<body>

    <div class="jumbotron jumbotron bg-cover home" style="background-size:cover">
        <div class="overlay"></div>
        <div class="container pembuka">
            <h1 class="display-3 mb-1">About</h1>
            <p class="lead">Posted on <span>Lorem</span></p>
        </div>
    </div>


    <div class="main-about">
        <div class="card container" id="cardAbout">
            <div class="card-body row">
                <div class="col-md-4 mb-3">
                    <img class="img-about" src="assets/icon/github.png" alt="">
                    <h4 class="card-title">Github</h4>
                    <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur quam enim tempore eos eum voluptates corporis exercitationem cumque necessitatibus. A error et qui. Magnam quis labore iste soluta, ipsa nesciunt.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <img class="img-about" src="assets/icon/facebook.png" alt="">
                    <h4 class="card-title">Facebook</h4>
                    <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur quam enim tempore eos eum voluptates corporis exercitationem cumque necessitatibus. A error et qui. Magnam quis labore iste soluta, ipsa nesciunt.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <img class="img-about" src="assets/icon/instagram.png" alt="">
                    <h4 class="card-title">instagram</h4>
                    <p class="card-text text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur quam enim tempore eos eum voluptates corporis exercitationem cumque necessitatibus. A error et qui. Magnam quis labore iste soluta, ipsa nesciunt.</p>
                </div>
            </div>
        </div>

        <div class="content-about">
            <div class="container text-justify">
                <h2>Tentang Desa</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error enim quos, porro minus quisquam aut reiciendis sint accusamus officiis corrupti praesentium! Sed optio fuga sit aspernatur deleniti ut quis quae, voluptate voluptas earum doloremque porro ipsum mollitia veniam iste eum. Voluptatibus quae porro quod placeat, autem perspiciatis esse cum recusandae maxime vel veritatis culpa distinctio, doloremque rem nesciunt alias iste corporis voluptas reprehenderit libero, tenetur id sint. Amet quod in natus perspiciatis labore nostrum. Molestiae perferendis odio repellendus dolore porro esse, hic doloremque dolorum cumque quidem natus? Id laborum accusamus consequatur, doloremque possimus laudantium perferendis doloribus sunt consectetur vitae recusandae expedita? At nisi eveniet labore nemo error quos amet. Architecto, esse optio ipsam eius quo magnam suscipit amet obcaecati cumque dolore eos, illum sed reiciendis voluptate ipsa nobis nemo consectetur iure! Asperiores dolore quo inventore rerum vero debitis, quidem quas ea maiores, minus at harum porro similique aperiam consequuntur eveniet ab nobis eos. Dicta ea odio facere ab laborum nulla eligendi fuga optio perferendis, quia mollitia perspiciatis voluptatibus maiores magni labore expedita neque doloribus nesciunt maxime a. Similique ut porro sit in! Fugit possimus voluptates quia ex provident adipisci dignissimos nisi ipsum delectus repellat ratione molestiae, facilis aliquam impedit ut?</p>
            </div>
        </div>

    </div>