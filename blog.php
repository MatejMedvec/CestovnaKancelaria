<?php 
require_once "includes/db_connection.php";
require_once "includes/class.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $author = $_POST['author'];
  $image_url = $_POST['image_url'];
  $date_posted = date('Y-m-d');


  $post = new BlogPost($title, $content, $author, $image_url);
  $post->insert();
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
  <title>Objavuj Svet | Blog</title>
</head>

<body>
  <?php include_once "includes/header.php"; ?>
  <div class="body">
    <div class="container text-center py-5 mt mt-sm-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Domov</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
      </nav>
    </div>
    <div class="container" id="postBlog">
    <form action="blog.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Názov</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Popis</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autor</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image_url" name="image_url" required>
        </div>
        <button type="submit" class="btn btn-primary">Odoslať</button>
    </form>
</div>
<br>
    <div class="container mb-5">
      <div class="row">
        <div class="container" id="container4">
          <div class="col-md-8 mb-3 mt-1">
            <h2>Cesta do Paríža</h2>
            <p class="text-muted">Publikované dňa 5. Septembra 2023</p>
            <img src="img/paris.jpg" alt="Paríž" class="img-fluid mb-3 rounded-2">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod dapibus turpis, a interdum enim
              fermentum id...</p>
            <a href="#" class="btn btn-primary">Čítať viac</a>
          </div>
        </div>
        <div class="container" id="container4">
          <div class="col-md-8 mb-3">
            <h2>Slnečné grécko</h2>
            <p class="text-muted">Publikované dňa 5. Júla 2023</p>
            <img src="img/greece.jpg" alt="Paríž" class="img-fluid mb-3 rounded-2">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod dapibus turpis, a interdum enim
              fermentum id...</p>
            <a href="#" class="btn btn-primary">Čítať viac</a>
          </div>
        </div>
        <div class="container" id="container4">
          <div class="col-md-8 mb-3">
            <h2>Hora Fuji v Japonsku</h2>
            <p class="text-muted">Publikované dňa 15. Mája 2023</p>
            <img src="img/fuji.jpg" alt="Paríž" class="img-fluid mb-3 rounded-2">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod dapibus turpis, a interdum enim
              fermentum id...</p>
            <a href="#" class="btn btn-primary">Čítať viac</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once 'includes/footer.php'; ?>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Naspäť</button>
</body>

<script src="js/app.js"></script>
<script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
