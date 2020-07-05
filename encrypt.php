<?php

require_once 'Crypt/GPG.php';

$gpg = new Crypt_GPG();
$gpg->addEncryptKey('abcdef@abcdef.in');
$data = $gpg->encrypt('hello my name is uditanshu saxena, i am freelancer!');
echo $data;

?>
