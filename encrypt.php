<?php

require_once 'Crypt/GPG.php';

$gpg = new Crypt_GPG();
$gpg->addEncryptKey('dummy@dummy.com');
$gpg->addSignKey('dummy@dummy.com','JamesBond007');
$data = $gpg->encryptAndSign("hello world");
echo $data;

?>
