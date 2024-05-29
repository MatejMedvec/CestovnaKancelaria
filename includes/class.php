<?php
class SignupHandler
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['meno'];
            $email = $_POST['email'];
            $password = $_POST['heslo'];

            $_SESSION['error'] = '';

            if (empty($username) || empty($email) || empty($password)) {
                $_SESSION['error'] = "Prosím, vyplňte všetky polia.";
                header("Location: signup.php");
                exit;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error'] = "Prosím, zadajte platný email.";
                header("Location: signup.php");
                exit;
            }

            $stmt = $this->conn->prepare("SELECT username FROM users WHERE username=:username");
            $stmt->execute(['username' => $username]);
            if ($stmt->rowCount() > 0) {
                $_SESSION['error'] = "Používateľské meno je už obsadené.";
                header("Location: signup.php");
                exit;
            }

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $this->conn->prepare("INSERT INTO users (username, email, heslo) VALUES (:username, :email, :heslo)");
            $stmt->execute(['username' => $username, 'email' => $email, 'heslo' => $hashed_password]);

            $_SESSION['success'] = "Používateľ bol úspešne vytvorený.";
            header('Location: login.php');
            exit;
        }
    }
}
class User
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['heslo'];

            if (empty($email)) {
                $_SESSION['error'] = "Prosím, vyplňte email.";
                header("Location: login.php");
                exit;
            } elseif (empty($password)) {
                $_SESSION['error'] = "Prosím, vyplňte heslo.";
                header("Location: login.php");
                exit;
            } elseif (empty($email) && empty($password)) {
                $_SESSION['error'] = "Prosím, vyplňte všetky polia.";
                header("Location: login.php");
                exit;
            }

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email=:email");
            $stmt->execute(['email' => $email]);
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($password, $user['heslo'])) {
                    session_start();
                    $_SESSION['userid'] = $user['id'];
                    $_SESSION['useremail'] = $user['email'];
                    header("Location: index.php?login=success");
                    exit;
                } else {
                    $_SESSION['error'] = "Nesprávne heslo.";
                    header("Location: login.php");
                    exit;
                }
            } else {
                $_SESSION['error'] = "Používateľ neexistuje.";
                header("Location: login.php");
                exit;
            }
        }
    }
}
class BlogPost {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createPost($title, $content, $image_url) {
        $sql = "INSERT INTO posts (title, content, image_url) VALUES (:title, :content, :image_url)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['title' => $title, 'content' => $content, 'image_url' => $image_url]);
    }

    public function editPost($id, $title, $content, $image_url) {
        $sql = "UPDATE posts SET title = :title, content = :content, image_url = :image_url WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id, 'title' => $title, 'content' => $content, 'image_url' => $image_url]);
    }

    public function deletePost($id) {
        $sql = "DELETE FROM posts WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    public function getPosts() {
        $sql = "SELECT * FROM posts ORDER BY created_at DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function getPost($id) {
        $sql = "SELECT * FROM posts WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
class Booking
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function createBooking()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $destination = $_POST['destination'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $adults = $_POST['adults'];
            $children = $_POST['children'];
            $rooms = $_POST['rooms'];
            $arrivals = $_POST['arrivals'];
            $leaving = $_POST['leaving'];

            $sql = "INSERT INTO booking (destination, name, email, phone, address, adults, children, rooms, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
    
            $stmt->execute([$destination, $name, $email, $phone, $address, $adults, $children, $rooms, $arrivals, $leaving]);
        }
    }
}
