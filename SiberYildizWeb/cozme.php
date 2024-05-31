<?php

$algorithm = 'aes-256-cbc';
$key = '0123456789abcdef0123456789abcdef'; 
$iv = '0123456789abcdef'; 

$encryptedData = 'bes35nRUR%2FEaENwjEd80cQ%3D%3D'; 


$decodedData = base64_decode(urldecode($encryptedData));


$decryptedData = openssl_decrypt($decodedData, $algorithm, $key, OPENSSL_RAW_DATA, $iv);

if ($decryptedData === false) {
    die('Çözme başarısız oldu.');
}

echo 'Çözülen veri: ' . $decryptedData;



?>
