<?php
require_once 'include/db_connection.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['meno']; 
    $email = $_POST['email'];
    $password = $_POST['heslo'];

    if (empty($username) || empty($email) || empty($password)) {
      header("Location: signup.php?error=emptyfields");
      exit;
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: signup.php?error=invalidemail");
      exit;
  } else {
      $stmt = $conn->prepare("SELECT username FROM users WHERE username=:username");
      $stmt->execute(['username' => $username]);
      if ($stmt->rowCount() > 0) {
          header("Location: signup.php?error=usertaken");
          exit;
      }
  }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, heslo) VALUES (:username, :email, :heslo)");
    $stmt->execute(['username' => $username, 'email' => $email, 'heslo' => $hashed_password]);

    echo "User created successfully";

    header('Location: login.php');
    exit;
}
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
<?php include_once "include/header.php"; ?>
<br><br>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          <form id="contact" method="post">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registrácia</h3>
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="name" id="meno" class="form-control form-control-lg" name="meno" required/>
              <label class="form-label" for="form2Example18">Meno</label>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg" name="email" required/>
            <label class="form-label" for="form2Example18">E-mail</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="heslo" class="form-control form-control-lg" name="heslo" required/>
            <label class="form-label" for="form2Example28">Heslo</label>
          </div>
            <div class="pt-1 mb-4">
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Vytvoriť účet</button>
            </div>
            <p>Máte už účet? <a href="login.php" class="link-info">tu</a></p>
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
<?php include_once "include/footer.php";?>
<script src="js/app.js"></script>
  <script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>