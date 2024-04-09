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
  <title>Objavuj Svet | Galéria</title>
</head>
<body>
  <?php include("header.php"); ?>
  <div class="body">
    <div class="container text-center py-5 mt mt-sm-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Domov</a></li>
          <li class="breadcrumb-item active" aria-current="page">Galéria</li>
        </ol>
      </nav>
    </div>
    <div class="container" id="container3">
      <div class="col pt-3 text-center">
        <i class="fa-solid fa-earth-americas fa-2x"></i>
        <h2 class="text-reset fw-bold text-uppercase pb-2">GALÉRIA</h2>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide rounded-carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/berlin.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Berlín, Nemecko</h5>
              <p>Brandenburská brána, patrí k najznámejším pamätihodnostiam Berlína a k jeho významným symbolom.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/benatky.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Benátky, Taliansko</h5>
              <p>Benátky sú hlavné mesto severotalianskeho regiónu Benátsko, ležiace v močaristej Benátskej lagúne, v
                severnej časti Jadranského mora.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/norway.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bergen, Nórsko</h5>
              <p>Bergen je druhé najväčšie mesto v Nórsku. Jeho centrum sa nachádza medzi skupinou hôr známych ako De
                syv fjell.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <div class="container" id="container5">
    <div class="col pt-3 text-center">
      <i class="fa-solid fa-earth-americas fa-2x"></i>
      <h2 class="text-reset fw-bold text-uppercase pb-2">PRÍSPEVKY</h2>
    </div>
    <div class="card-group">
      <div class="card">
        <img src="img/Brazil.jpg" class="card-img-top" alt="Brazilia">
        <div class="card-body">
          <h5 class="card-title">Západ slnka v Rio de Janeiro </h5>
          <p class="card-text">Nič nie je lepšie ako sa kochať na západ slnka v Riu.</p>
          <div class="pt-4" id="liveAlertPlaceholder"></div>
          <button type="button" class="btn btn-danger" id="liveAlertBtn">
            <i class="fa-solid fa-heart"></i>
          </button>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated pred 3 mesiacmi</small>
        </div>
      </div>
      <div class="card">
        <img src="img/japan.jpg" class="card-img-top" alt="Japonsko">
        <div class="card-body">
          <h5 class="card-title">Pestrofarebné Japonsko</h5>
          <p class="card-text">Nečakal by som, že japonsko je tak zaujímavé.</p>
          <div class="pt-5" id="liveAlertPlaceholder"></div>
          <button type="button" class="btn btn-danger" id="liveAlertBtn">
            <i class="fa-solid fa-heart"></i>
          </button>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated pred 4 mesiacmi</small>
        </div>
      </div>
      <div class="card">
        <img src="img/usa.jpg" class="card-img-top" alt="USA">
        <div class="card-body">
          <h5 class="card-title">Golden Gate</h5>
          <p class="card-text">Amerika.</p>
          <div class="pt-5" id="liveAlertPlaceholder"></div>
          <button type="button" class="btn btn-danger" id="liveAlertBtn">
            <i class="fa-solid fa-heart"></i>
          </button>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated pred 5 mesiacmi</small>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php include("footer.php"); ?>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Naspäť</button>
  <script src="js/app.js"></script>
  <script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>
