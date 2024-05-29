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
  <?php include_once "includes/header.php"; ?>
  <br><br><br>
  <div class="body">
    <div class="container text-center py-5 mt mt-sm-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Domov</a></li>
          <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
        </ol>
      </nav>
    </div>
    <div class="container" id="container6">
      <div class="col pt-3 text-center">
        <i class="fa-solid fa-earth-americas fa-2x"></i>
        <h2 class="text-reset fw-bold text-uppercase pb-2">KONTAKTNÝ FORMULÁR</h2>
      </div>
      <div class="container w-75 mt-5 mb-5 p-5">
        <form action="thankyou.php">
          <div class="mb-3">
            <label for="name" class="form-label">Meno</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Správa</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
            <label class="form-check-label" for="consent">Súhlasím so spracovaním osobných údajov</label>
          </div>
          <button type="submit" class="btn btn-primary rounded-5">
            Odoslať
          </button>
        </form>
      </div>
    </div>
  </div>
  <?php include_once "includes/footer.php"; ?>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Naspäť</button>
  <script src="js/app.js"></script>
  <script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>