<?php
$dsn = 'mysql:host=<172.19.0.3>;dbname=testdb;charset=utf8';
$username = 'testuser';
$password = 'testpassword';

try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query('SELECT * FROM test_table');
    echo "<ul>";
    while ($row = $stmt->fetch()) {
        echo "<li>" . $row['name'] . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>