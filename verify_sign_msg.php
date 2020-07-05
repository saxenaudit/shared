
<?php
require_once 'Crypt/GPG.php';

$signedData = <<<DATA
-----BEGIN PGP SIGNED MESSAGE-----
Hash: SHA512

Hello, World!+1234567890
-----BEGIN PGP SIGNATURE-----

iLMEAQEKAB0WIQTBg7gsNhBymWqagMBBrRctXG32dAUCXwG+oAAKCRBBrRctXG32
dPLHA/92il386D/PoAngSKNplOkCnVG9lIGqvUDLW5vaoXS/tAcRFk5o2NwZJrco
I6FMS24ZUOuR0LRXqQW3TgsReWiMhn5AQrqtFlIBGQ+s0RFmQmUxGkV5KWLztG9y
ikqRIS/VPwUNAI1yTiD/wBSGN0RGQJDGaFlAa8j7UAD9nfCYug==
=E7Eb
-----END PGP SIGNATURE-----


DATA;

$gpg        = new Crypt_GPG();
$signatures = $gpg->verify($signedData);

if ($signatures[0]->isValid()) {
     echo "Message is valid.\n";
} else {
     echo "Message is invalid!\n";
}

?>
