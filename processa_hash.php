<?php
$user = $_POST  ["user"];
$password = $_POST["password"];
 
$password_hash1 = md5($password);
$password_hash2 = sha1($password);
$password_hash3 = hash("sha3-256", $password);


echo "SENHA COM HASH MD5:  ".$password_hash1;
echo"<br>";
echo "SENHA COM HASH SHA1  ".$password_hash2;
echo"<br>";
echo "SENHA COM HASH HASH  ".$password_hash3;  