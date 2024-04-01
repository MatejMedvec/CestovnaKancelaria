<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Matej Medvec">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=YourFont&display=swap" rel="stylesheet">
    <title>Objavuj Svet | Kontakt</title>

</head>

<body>
    <?php include 'connection.php'; ?>
    <nav class="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="img/Logo.png" alt="logo" width="50" height="50" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-3">
                        <li class="nav-item">
                            <a class="nav-link active text fw-bold" aria-current="page" href="index.html">Domov</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text fw-bold" href="o_nas.html">O nás</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text fw-bold" href="galeria.html">Galéria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text fw-bold" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text fw-bold" href="kontakt.html">Kontakt</a>
                        </li>
                </div>
            </div>
        </nav>
    </nav>
    </nav>
    <div class="container text-center py-5 mt mt-sm-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Domov</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
            </ol>
        </nav>
    </div>
    <div class="mt-5 text">
        <div style="text-align: center; padding: 50px;">
            <h1>Ďakujeme za správu</h1>
            <p>Vaša správa bola úspešne prijatá.</p>
        </div>
    </div>
    <div class="container-fluid bg-light text-black mt-auto">
        <div class="row p-3">
            <div class="col-md-4">
                <h5>Informácie o stránke</h5>
                <p>Tu môžete vložiť informácie o vašej stránke.</p>
            </div>
            <div class="col-md-4">
                <h5>Ďalšie informácie</h5>
                <p>Ďalšie dôležité informácie môžete umiestniť sem.</p>
            </div>
            <div class="col-md-4">
                <h5>Kontakt</h5>
                <p>Pre viac informácii nás môžete kontaktovať <a class="text-reset fw-bold" href="kontakt.html">tu</a>
                </p>
                <ul class="lisy-group list-group-flush">
                    <p></p><i class="fa-solid fa-phone me-3"></i>+421 0904 116 288</p>
                    <p><i class="fa-solid fa-envelope me-3"></i>matejmedvec@gmail.com</p>
                </ul>
            </div>
        </div>
    </div>
    <footer class="bg-light text-center p-4">
        <p class="mb-0 text-body-secondary">© Objavuj Svet. All rights reserved.</p>
    </footer>
    <script src="js/app.js"></script>
    <script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
