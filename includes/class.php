<?php
class User {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($email, $password) {
        if (empty($email) || empty($password)) {
            header("Location: login.php?error=emptyfields");
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
                header("Location: login.php?error=wrongpassword");
                exit;
            }
        } else {
            header("Location: login.php?error=nouser");
            exit;
        }
    }
}
class BlogPost {
    private $title;
    private $content;
    private $author;
    private $image_url;

    public function __construct($title, $content, $author, $image_url) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->image_url = $image_url;
    }

    public function insert() {
        global $conn;
        $sql = "INSERT INTO blog (title, content, author, image_url) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        $stmt->execute([
            ':title' => $this->title,
            ':content' => $this->content,
            ':author' => $this->author,
            ':image_url' => $this->image_url
        ]);

        if ($stmt->execute()) {
            echo "New post added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorInfo()[2];
        }
    }
}
?>