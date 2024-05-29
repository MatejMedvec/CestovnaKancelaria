<?php
require_once 'includes/db_connection.php';
require_once 'includes/class.php'; 

$booking = new Booking($conn);
$booking->createBooking();
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
    <title>Objavuj Svet | Rezervácia</title>
</head>

<body>
    <?php include_once "includes/header.php"; ?>
    <br><br>
    <div class="body">
        <div class="container text-center py-5 mt-5 mt-sm-5">
            <div class="container" id="container6">
                <div class="col pt-2 text-center">
                    <i class="fa-solid fa-earth-americas fa-2x"></i>
                    <h2 class="text-reset fw-bold text-uppercase pb-2">REZERVÁCIA</h2>
                </div>
                <div id="booking" class="section">
                    <div class="section-center">
                        <div class="container">
                            <div class="row justify-content-center">

                                <div class="col-md-8">
                                    <div class="booking-form">
                                        <form id="book" method="post">
                                            <div class="form-group mb-3">
                                                <span class="form-label">destinácia</span>
                                                <input class="form-control" type="text" placeholder="Zadajte destináciu" list="destinations" name="destination">
                                                <datalist id="destinations">
                                                    <option value="Egypt">
                                                    <option value="Cyprus">
                                                    <option value="Greece">
                                                </datalist>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3">
                                                        <span class="form-label">Meno</span>
                                                        <input class="form-control" type="text" placeholder="Zadajte svoje meno" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3">
                                                        <span class="form-label">Email</span>
                                                        <input class="form-control" type="email" placeholder="Zadajte svoj email" name="email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3">
                                                        <span class="form-label">Tel. číslo</span>
                                                        <input class="form-control" type="tel" placeholder="Zadajte svoje tel.číslo" name="phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-3">
                                                        <span class="form-label">Adresa</span>
                                                        <input class="form-control" type="text" placeholder="Zadajte svoju adresu" name="address" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-4">
                                                        <span class="form-label">Príchod</span>
                                                        <input class="form-control" type="date" name="arrivals" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-4">
                                                        <span class="form-label">Odchod</span>
                                                        <input class="form-control" type="date" name="leaving" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <span class="form-label">Izby</span>
                                                        <select class="form-control" name="rooms">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <span class="form-label">Dospelý</span>
                                                        <select class="form-control" name="adults">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <span class="form-label">Deti</span>
                                                        <select class="form-control" name="children">
                                                            <option>0</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="pt-1 mb-4">
                                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Rezervovať</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <?php include_once 'includes/footer.php'; ?>
    </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Naspäť</button>
    <script src="js/app.js"></script>
    <script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>