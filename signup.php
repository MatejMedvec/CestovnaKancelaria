<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);

require_once 'includes/db_connection.php'; 
require_once 'includes/class.php';

$signupHandler = new SignupHandler($conn);
$signupHandler->handleRequest();
?>

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
  <title>Objavuj Svet | Registrácia</title>
</head>
<body>
<?php include_once "includes/header.php"; ?>
<br><br>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          <form id="contact" method="post">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registrácia</h3>
            
            <?php if ($error): ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="text" id="meno" class="form-control form-control-lg" name="meno"/>
              <label class="form-label" for="meno">Meno</label>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="email" class="form-control form-control-lg" name="email"/>
              <label class="form-label" for="email">E-mail</label>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="heslo" class="form-control form-control-lg" name="heslo"/>
              <label class="form-label" for="heslo">Heslo</label>
            </div>
            <div class="pt-1 mb-4">
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Vytvoriť účet</button>
            </div>
            <p>Máte už účet? <a href="login.php" class="link-info">Prihláste sa tu</a></p>
          </form>
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="img/img3.webp"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
<?php include_once "includes/footer.php"; ?>
<script src="js/app.js"></script>
<script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>
