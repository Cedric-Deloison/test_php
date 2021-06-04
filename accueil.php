<?php


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cédric photographie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="assets/img/logo2.png" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <p class="title-nav">Cédric Photographie</p>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
            </div>
        </div>
    </nav>

    <!-- End NavBar -->

    <!-- Header -->

    <div class="header">
    </div>
    <div class="container-fluid ced-bio">
        <div class="row">
            <div class="col-sm">
                <div class="ced-section1-txt">
                    <h2>Qui suis-je?</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan faucibus risus. Cras ac purus metus. Maecenas sit amet iaculis nulla. Ut ornare arcu non lectus sodales suscipit ut eget turpis.</p>
                    <p class="text-justify">Nulla volutpat tellus nec mi sodales condimentum. Nam vulputate, dolor et facilisis maximus, leo odio mollis odio, ac efficitur nibh magna sit amet orci. Vestibulum nunc nisi, pulvinar in blandit sit amet, vehicula id quam. Nam est nisi, imperdiet vitae turpis eget, imperdiet molestie enim. Suspendisse sit amet sollicitudin nibh. Nullam mattis metus sed mattis porta. Aenean at accumsan sem, ut rhoncus augue.</p>
                    <p class="text-justify">Duis egestas rhoncus erat, a vestibulum nunc accumsan eu. Vestibulum a lacus et felis vehicula elementum. Aliquam tempus venenatis purus nec auctor. In rutrum ut neque sit amet faucibus. Phasellus ut euismod tortor, sit amet imperdiet nunc. Aenean fringilla nisi ac nibh imperdiet faucibus. Ut cursus laoreet scelerisque.</p>
                    <p class="text-right">- Cédric</p>
                </div>
            </div>
            <div class="col-sm ced-section1-img"></div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Galerie -->
    <div class="container-fluid ced-galerie">
        <div class="row">
            <div class="col text-center">
                <h2>Ma Galerie</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm ced-img-pad"><img src="assets/img/5.jpg" alt="Image 1" class="img-fluid"></div>
            <div class="col-sm ced-img-pad"><img src="assets/img/2.jpg" alt="Image 2" class="img-fluid"></div>
            <div class="col-sm ced-img-pad"><img src="assets/img/3.jpg" alt="Image 3" class="img-fluid"></div>
            <div class="col-sm ced-img-pad"><img src="assets/img/4.jpg" alt="Image 5" class="img-fluid"></div>
        </div>
        <div class="row">
            <div class="col-sm ced-img-pad"><img src="assets/img/1.jpg" alt="Image 7" class="img-fluid"></div>
            <div class="col-sm ced-img-pad"><img src="assets/img/6.jpeg" alt="Image 6" class="img-fluid"></div>
        </div>
    </div>



</body>

</html>