<?php

$algorithm = 'aes-256-cbc';
$key = '0123456789abcdef0123456789abcdef'; // anahtar
$iv = '0123456789abcdef'; // 

$data = serialize(1); // Şifrelenen veri


$encryptedData = openssl_encrypt($data, $algorithm, $key, OPENSSL_RAW_DATA, $iv);

if ($encryptedData === false) {
    die('Şifreleme başarısız oldu.');
}

echo 'Şifrelenmiş veri: ' . base64_encode($encryptedData);


?>
