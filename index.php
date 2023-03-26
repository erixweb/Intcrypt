<?php
include "./Intcrypt.php";

$string = "Le France est un pays très beau";

$Ic = new Intcrypt();

$encrypted = $Ic->encrypt($string);

echo $encrypted;

echo "Decrypted: \n{$Ic->decrypt($encrypted)}";
