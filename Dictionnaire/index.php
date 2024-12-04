<?php 

// Exo 1

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

echo "Il y a " . count($dico) . " mots dans ce dictionnaire" . "<br>";


// Exo 2

$NbrDeMotAQuinzeLettres = 0;


foreach($dico as $Mot){
    $Mot = trim($Mot);
    if(strlen($Mot) == 15){
        $NbrDeMotAQuinzeLettres += 1;
    }
}
echo "Il y a {$NbrDeMotAQuinzeLettres} mots qui font exactement 15 caractères <br>";



// Exo 3

$CompteQ = 0;

foreach ($dico as $key ) {
    $key = trim($key);
    if(str_contains($key,"w") || str_contains($key,"W")){
        $CompteQ += 1;
    }
}

echo "Il y a {$CompteQ} mots qui contiennent la lettre w <br>";



// Exo 4

$Compteur = 0;

foreach ($dico as $motss ) {
    $motss = trim($motss);
    if(str_ends_with($motss,"q")){
        $Compteur += 1;
    }
}

echo "Il y a {$Compteur} mots qui finissent par la lettre q <br>";

?>