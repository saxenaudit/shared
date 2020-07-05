<?php

require_once 'Crypt/GPG.php';

$gpg = new Crypt_GPG();
$gpg->addDecryptKey('abcdef@abcdef.in','1234567890');
$data = $gpg->decrypt('-----BEGIN PGP MESSAGE-----

hQGMA4TO4I154sI7AQv/XA8aWnAIZ23GX7K6DOAZDxxcf6fjeyOUcFyJWW+urxO4
kcA++P+J7jmRTtuR1NdcyYRnw6F5+OVlA6V1JPmiEZXQBkIerL/ymo9oiR/82ZKA
V2RSSUZkk52J1/Gd9+CdFNa33BXO67r3DULPMuKA3ZiT19MQSH/iqMyFOPe9EslS
Bbnpa0sE6m+H8PHKHeLSYu2nKLnDOT2AixUsAKmaN3c9lnmYjlW7i18jTBo0rgrA
R5e8j2VbZYRAq9NHpsdhM8T8mKa39hO0WW4VcEig8ZIWxz/5kFFySSngWAnEtcwp
cqgdm8xijyNmyfCBIP4rQD1dbNvf1yM3spFplLL2lpCJhrrditq278H7VRM3we7q
ayhhToMXzVkm2e/cfv6HSUC5LgyeUJGIqDPyJcGltCdBBArdrR2PTb1gTrGeVxMc
tka49m1NVvcDykgChUzaOy4wh+v7z+nId4GpcZm7CvJSfG8TpUf96m6hTBQJ/YPp
H0MGRnl9VzSyaC/WUOJY0m4BZprkDmmEZ4DMoMJlFtLHF9e/YyyIlRn1ikFeAUZ7
0dahf0pnPGWH52Z+EY6r5+mkqormxiMAyA2mNQphgOiRdhOAiUd+Hb2w0s58qgXg
TZydp+wG7wNuDvKrwvH7Fi27kqU4cEV8FgWaoHjVgA==
=J66y
-----END PGP MESSAGE-----
');
echo $data;

?>
