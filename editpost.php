<?php
require_once "includes/db_connection.php";
require_once "includes/class.php";

$blogPost = new BlogPost($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image_url = $_POST['image_url'];

    $blogPost->editPost($id, $title, $content, $image_url);

    header("Location: blog.php");
    exit;
} else {
    $id = $_GET['id'];
    $post = $blogPost->getPost($id);
    if (!$post) {
        header("Location: blog.php");
        exit;
    }
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=YourFont&display=swap" rel="stylesheet">
  <title>Objavuj Svet | Editovať Blog</title>
</head>

<body>
  <?php include_once "includes/header.php"; ?>
  <div class="body">
    <div class="container text-center py-5 mt mt-sm-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Domov</a></li>
          <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
          <li class="breadcrumb-item active" aria-current="page">Editovať príspevok</li>
        </ol>
      </nav>
    </div>
    <div class="container" id="postBlog">
      <form action="editpost.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($post['id']); ?>">
        <div class="mb-3">
          <label for="title" class="form-label">Názov</label>
          <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Popis</label>
          <textarea class="form-control" id="content" name="content" rows="3" required><?php echo htmlspecialchars($post['content']); ?></textarea>
        </div>
        <div class="mb-3">
          <label for="image_url" class="form-label">URL adresa obrázka</label>
          <input type="text" class="form-control" id="image_url" name="image_url" value="<?php echo htmlspecialchars($post['image_url']); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Uložiť zmeny</button>
      </form>
    </div>
  </div>
  <?php include_once 'includes/footer.php'; ?>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Naspäť</button>
</body>

<script src="js/app.js"></script>
<script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>

