<?php
$host = 'dpg-d1hr71nfte5s73anmch0-a.oregon-postgres.render.com';
$port = '5432';
$db   = 'damsec_data';
$user = 'zec_admin';
$pass = 'vHBf8Z8JklfRQtYQb91sydw8vqosbVNj';

$dsn = "pgsql:host=$host;port=$port;dbname=$db;options='--client_encoding=UTF8'";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // echo "Connected to PostgreSQL database!";
} catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
}
?>
