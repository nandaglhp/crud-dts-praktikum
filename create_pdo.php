<?php
require 'db_connect.php';

$username = 'user123';
$email = 'user123@example.com';

$sql = "INSERT INTO users (username, email) VALUES (:username, :email)";
// PDOStatement adalah objek yang merepresentasikan pernyataan SQL yang sudah dipersiapkan.
// Objek untuk mengeksekusi pernyataan SQL yang sama berkali-kali dengan set parameter yang berbeda.
$stmt = $pdo->prepare($sql);

$stmt->execute(['username' => $username, 'email' => $email]);

echo "User berhasil ditambahkan!";
