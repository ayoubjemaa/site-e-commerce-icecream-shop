<?php
$db_name = 'mysql:host=localhost;dbname=icecream_db'; // corrigé ici !
$user_name = 'root';
$user_password = '';

try {
    $conn = new PDO($db_name, $user_name, $user_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

function unique_id() {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charlength = strlen($chars);
    $randomstring = '';
    for ($i = 0; $i < 20; $i++) {
        $randomstring .= $chars[mt_rand(0, $charlength - 1)];
    }
    return $randomstring;
}
?>
