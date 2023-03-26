<?php
class Intcrypt {
    /*
        Decrypted string
    */
    public function encrypt (string $arg) {
        $arg = strtolower($arg);
        $arg = str_replace("he", "Z+1", $arg);
        $arg = str_replace("aq", "Z+2", $arg);
        $arg = str_replace("la", "Z+42", $arg);
        $arg = str_replace("gg", "g^2", $arg);
        $arg = str_replace("est", "FR-45", $arg);
        $arg = str_replace("intcrypt", "6I,,,,,,,,,,5N,,,,,,,,,,4,,,,,,,,", $arg);
        $arg = str_replace("newton", "][[[]{f = []L * k]]3]4]*]", $arg);
        $arg = str_replace("spain", "C-EU-1", $arg);
        $arg = str_replace("france", "C-EU-2", $arg);
        $arg = str_replace("germany", "C-EU-3", $arg);
        $arg = str_replace("españa", "C-EU-1", $arg);
        $arg = str_replace("francia", "C-EU-2", $arg);
        $arg = str_replace("alemania", "C-EU-3", $arg);
        $arg = str_replace("w", "Z+3", $arg);
        $arg = str_replace("y", "Z+4", $arg);
        $arg = str_replace("l", "Z+5", $arg);
        $arg = str_replace("o", "Z+6", $arg);
        $arg = str_replace("a", "Z+7", $arg);
        $arg = str_replace("b", "Z+8", $arg);
        $arg = str_replace("k", "Z+9", $arg);
        $arg = str_replace("g", "Z+10", $arg);
        $arg = str_replace("i", "Z+11", $arg);
        $arg = str_replace("n", "Z+12", $arg);
        $arg = str_replace("e", "Z+13", $arg);
        $arg = str_replace("t", "Z+14", $arg);

        return $arg;
    }
    public function decrypt (string $arg) {
        $arg = str_replace("6I,,,,,,,,,,5N,,,,,,,,,,4,,,,,,,,", "intcrypt", $arg);
        $arg = str_replace("][[[]{f = []L * k]]3]4]*]","newton", $arg);
        $arg = str_replace("C-EU-1", "spain", $arg);
        $arg = str_replace("C-EU-2", "france", $arg);
        $arg = str_replace("C-EU-3", "germany", $arg);
        $arg = str_replace("C-EU-1", "españa", $arg);
        $arg = str_replace("C-EU-2", "francia", $arg);
        $arg = str_replace("C-EU-3", "alemania", $arg);
        $arg = str_replace( "Z+3", "w",$arg);
        $arg = str_replace("Z+4", "y", $arg);
        $arg = str_replace("Z+5", "l", $arg);
        $arg = str_replace("Z+6", "o", $arg);
        $arg = str_replace("Z+7", "a", $arg);
        $arg = str_replace("Z+8", "b", $arg);
        $arg = str_replace("Z+9", "k", $arg);
        $arg = str_replace("Z+10", "g", $arg);
        $arg = str_replace("Z+11","i",  $arg);
        $arg = str_replace("Z+12", "n", $arg);
        $arg = str_replace("Z+13", "e", $arg);
        $arg = str_replace("Z+14", "t", $arg);
        $arg = str_replace("Z+1", "he", $arg);
        $arg = str_replace("Z+2", "aq", $arg);
        $arg = str_replace("Z+42", "la", $arg);
        $arg = str_replace("g^2", "gg", $arg);
        $arg = str_replace("FR-45", "est", $arg);

        return $arg;
    }
}
?>