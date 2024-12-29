This code uses PDO (PHP Data Objects) and prepared statements, which is the recommended way to interact with databases in PHP. It prevents SQL injection vulnerabilities.
```php
<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=database', 'user', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        echo "Login Successful!";
    } else {
        echo "Login Failed!";
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
```