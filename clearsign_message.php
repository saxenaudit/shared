
<?php
require_once 'Crypt/GPG.php';

$data = 'Hello, World!+1234567890';

$gpg = new Crypt_GPG();
$gpg->addSignKey('dummy@dummy.com', 'JamesBond007');
$signedData = $gpg->sign($data, Crypt_GPG::SIGN_MODE_CLEAR);

echo "Clearsigned message is: ", $signedData, "\n";
?>
