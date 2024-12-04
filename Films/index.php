<?php 

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

print_r($top[0]["im:name"]["label"]);

for($i = 0; $i < 10; $i += 1){
    echo '<br>';
    echo $i + 1;
    echo "\n";
    
print_r($top[$i]["im:name"]["label"]);

}
echo "<br>";

for($i = 0; $i < 100; $i += 1){
    
    
    if($top[$i]["im:name"]["label"] == "Gravity"){
        echo "{$top[$i]["im:name"]["label"]} est à la position {$i}";
    };


}


echo "<br>";

for($i = 0; $i < 100; $i += 1){
    
    
    if($top[$i]["im:name"]["label"] == "The LEGO Movie"){
        echo "Les réalisateurs de The LEGO Movie sont : {$top[$i]["im:artist"]["label"]}";
    };


}


echo "<br>";

$nbr = 0;

for($i = 0; $i < 100; $i += 1){ 
    if($top[$i]["im:releaseDate"]["label"] < 2000){
        $nbr += 1;

        // echo "Les réalisateurs de The LEGO Movie sont : {$top[$i]["im:artist"]["label"]}";
    };
}

echo "Le nombre de films qui sont sortis avant 2000 sont : {$nbr}";


echo "<br>";

$DateRecent = $top[0]["im:releaseDate"]["label"];
$DateVieux = $top[0]["im:releaseDate"]["label"];

for($i = 1; $i < 100; $i += 1){ 
    $AutreDate = $top[$i]["im:releaseDate"]["label"];
    if($DateRecent < $AutreDate){
        $DateRecent = $AutreDate;
    };
}


for($i = 1; $i < 100; $i += 1){ 
    $AutreDate = $top[$i]["im:releaseDate"]["label"];
    if($DateVieux > $AutreDate){
        $DateVieux = $AutreDate;
    };
}

echo " Le film le plus récent est :  {$DateRecent}";
echo "<br>";
echo "Le film le plus vieux est : {$DateVieux} ";




echo "<br>";

$Vide = [];

for($i = 1; $i < 100; $i += 1){ 
    
        $Vide[] = $top[$i]["category"]["attributes"]["term"];
    
}


// print_r($Vide);
$Stock = (array_count_values($Vide));

arsort($Stock);
$Stock = array_slice($Stock, 0, 1);
print_r($Stock);


// print_r(array_count_values($top["category"]["attributes"]["term"]));




$prix = [];
$sum = 0;
    for($i = 0; $i < 10; $i += 1){


        $prix[] = $top[$i]["im:price"]["label"];
        $sum = $sum + $prix[$i];
    };
    // print_r($pr)
echo $sum;





?>