<?php
require 'db_connect.php';
$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
// loop ambil usn email
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['username'] . "" . $row['email'] . "<br>";
}
