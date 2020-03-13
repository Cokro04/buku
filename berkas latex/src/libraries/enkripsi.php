<?php
class Enkripsi
{
    public function encryptIt($password)
    {
        $cryptKey  = '1212';
        $qEncoded      = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $password, MCRYPT_MODE_CBC, md5(md5($cryptKey))));
        return ($qEncoded);
    }
    public function decryptIt($password)
    {
        $cryptKey  = '1212';
        $qDecoded      = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($password), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
        return ($qDecoded);
    }
}
