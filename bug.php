This code uses the `mysql_*` functions, which are deprecated and have been removed from PHP 7.0 and later.  They are insecure and prone to SQL injection vulnerabilities.
```php
<?php
$link = mysql_connect('localhost', 'user', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db('database', $link);
$result = mysql_query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' ", $link);
$row = mysql_fetch_array($result);
if ($row) {
    echo "Login Successful!";
} else {
    echo "Login Failed!";
}
mysql_close($link);
?>
```