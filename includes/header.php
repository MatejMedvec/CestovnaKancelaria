<?php 
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/Logo.png" alt="logo" width="50" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-3">
                <li class="nav-item">
                    <a class="nav-link active text fw-bold" aria-current="page" href="index.php">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text fw-bold" href="o_nas.php">O nás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text fw-bold" href="galeria.php">Galéria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text fw-bold" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text fw-bold" href="kontakt.php">Kontakt</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['userid'])): ?>
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-primary">Odhlásiť sa</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a href="login.php" class="btn btn-primary">Prihlásiť sa</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
