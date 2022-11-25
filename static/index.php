<?php 
    
main();
 function main(){
    global $dim_ut;
    $dim_ut = array();
    $csv= array_map('str_getcsv', file('pokemon.csv')); // mappa il csv 
    foreach($csv as $line){ // legge il csv riga per riga
        calcolo_distanza($line[5], $line[6], $line[7], $line[8], $line[9], $line[10], $dim_ut);
    }

    ricerca_distanzaMinima($dim_ut);

 }


function calcolo_distanza($hp, $attack, $defense, $special_attack, $special_defense, $speed, &$dim_ut){
// Calcoliamo e memorizziamo ladistanza tra i dati inseriti e i Pokemon
    $d1 =($_POST["vita"]-$hp);
    $d2 =($_POST["attacco"]-$attack);
    $d3 =($_POST["difesa"]-$defense);
    $d4 =($_POST["att_speciale"]-$special_attack);
    $d5 =($_POST["dif_speciale"]-$special_defense);
    $d6 =($_POST["velocita"]-$speed);
    $pd1 = pow($d1, 2);
    $pd2 = pow($d2, 2);
    $pd3 = pow($d3, 2);
    $pd4 = pow($d4, 2);
    $pd5 = pow($d5, 2);
    $pd6 = pow($d6, 2);
    $dim = sqrt($pd1+$pd2+$pd3+$pd4+$pd5+$pd6);

    array_push($dim_ut, $dim);
}

function ricerca_distanzaMinima($dim_ut){

$min=min($dim_ut);
$key = array_search($min, $dim_ut);


// Stampa record Pokemon + vicino 


echo "<br/>";
$i=0;
$csv= array_map('str_getcsv', file('pokemon.csv')); // mappa il csv 
foreach($csv as $line){ // legge il csv riga per riga
    if ($i == $key-2){
        echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11];
        echo "<br/>";
    }
    if ($i == $key-1){
        echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11];
        echo "<br/>";
    }
    if ($i == $key){
        echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11];
        echo "<br/>";
    }
    if ($i == $key+1){
        echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11];
        echo "<br/>";
    }
    if ($i == $key+2){
        echo $line[1]." ".$line[2]." ".$line[5]." ".$line[6]." ".$line[7]." ".$line[8]." ".$line[9]." ".$line[10]." ".$line[11];
    }
    $i++;
}
}
?>