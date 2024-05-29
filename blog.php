<?php
require_once "includes/db_connection.php";
require_once "includes/class.php";

$blogPost = new BlogPost($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = isset($_POST['title']) ? $_POST['title'] : '';
  $content = isset($_POST['content']) ? $_POST['content'] : '';
  $image_url = isset($_POST['image_url']) ? $_POST['image_url'] : '';

    if (isset($_POST['create'])) {
        $blogPost->createPost($title, $content, $image_url);
    }

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $blogPost->editPost($id, $title, $content, $image_url);
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $blogPost->deletePost($id);
    }
}

$posts = $blogPost->getPosts();
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
          <label for="image_url" class="form-label">Image URL</label>
          <input type="text" class="form-control" id="image_url" name="image_url" required>
        </div>
        <button type="submit" name="create" class="btn btn-primary">Odoslať</button>
      </form>
    </div>
    <br>
    <div class="container mb-5">
      <div class="row">
        <?php foreach ($posts as $post): ?>
          <div class="container" id="container4">
            <div class="col-md-8 mb-3 mt-1">
              <h2><?php echo htmlspecialchars($post['title']); ?></h2>
              <p class="text-muted">Publikované dňa <?php echo $post['created_at']; ?></p>
              <img src="<?php echo htmlspecialchars($post['image_url']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>" class="img-fluid mb-3 rounded-2">
              <p><?php echo htmlspecialchars($post['content']); ?></p>
              <a href="editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
              <form action="blog.php" method="post" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php include_once 'includes/footer.php'; ?>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Naspäť</button>
</body>

<script src="js/app.js"></script>
<script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
