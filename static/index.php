<?php 

// carico l'header
echo "<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<link rel='stylesheet' href='../static/css/style.css'>
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap' rel='stylesheet'>
<title>Gotta Catch'em All</title>
</head>";

main();
 function main(){
    global $dim_ut;
    $dim_ut = array();
    $csv= array_map('str_getcsv', file('../data/pokemon.csv')); // mappa il csv 
    $n = 0;
    foreach($csv as $line){ // legge il csv riga per riga
        if ($n != 0) {
            calcolo_distanza($line[5], $line[6], $line[7], $line[8], $line[9], $line[10], $dim_ut);
        }
        $n++;
    }
    ricerca_distanzaMinima($dim_ut);

 }


function calcolo_distanza($hp, $attack, $defense, $special_attack, $special_defense, $speed, &$dim_ut){
// Calcoliamo e memorizziamo ladistanza tra i dati inseriti e i Pokemon
    $d1 =((int)$_POST["vita"]-$hp);
    $d2 =((int)$_POST["attacco"]-$attack);
    $d3 =((int)$_POST["difesa"]-$defense);
    $d4 =((int)$_POST["att_speciale"]-$special_attack);
    $d5 =((int)$_POST["dif_speciale"]-$special_defense);
    $d6 =((int)$_POST["velocita"]-$speed);
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
$csv= array_map('str_getcsv', file('../data/pokemon.csv')); // mappa il csv 
echo "<section id='section'><div class='card'>";
foreach($csv as $line){ // legge il csv riga per riga
    if ($i == $key-2){
        echo "<div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
        <div class='stats'>
            <h4 class='titolo_pk'>".$line[1]."</h4>
            <p class='gen_pk'>".$line[11]."</p>
            <p class='tipo_pk'>Tipi: <strong>".$line[2]."</strong></p>
            
            <div class='div_stats'>
                <div class='div_uno'>
                    <p class='hp'>HP <strong>".$line[5]."</strong></p>
                    <p class='atk'>Atk <strong>".$line[6]."</strong></p>
                    <p class='def'>Def <strong>".$line[7]."</strong></p>
                </div>
                
                <div class='div_due'>
                    <p class='sp_atk'>Sp. Atk <strong>".$line[8]."</strong></p>
                    <p class='sp_def'>Sp. Def <strong>".$line[9]."</strong></p>
                    <p class='speed'>Speed <strong>".$line[10]."</strong></p>
                </div>    
            </div>
        </div>
    </div>";
    }
    if ($i == $key-1){
        echo "<div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
        <div class='stats'>
            <h4 class='titolo_pk'>".$line[1]."</h4>
            <p class='gen_pk'>".$line[11]."</p>
            <p class='tipo_pk'>Tipi: <strong>".$line[2]."</strong></p>
            
            <div class='div_stats'>
                <div class='div_uno'>
                    <p class='hp'>HP <strong>".$line[5]."</strong></p>
                    <p class='atk'>Atk <strong>".$line[6]."</strong></p>
                    <p class='def'>Def <strong>".$line[7]."</strong></p>
                </div>
                
                <div class='div_due'>
                    <p class='sp_atk'>Sp. Atk <strong>".$line[8]."</strong></p>
                    <p class='sp_def'>Sp. Def <strong>".$line[9]."</strong></p>
                    <p class='speed'>Speed <strong>".$line[10]."</strong></p>
                </div>    
            </div>
        </div>
    </div>";
    }
    if ($i == $key){
        echo "<div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
        <div class='stats'>
            <h4 class='titolo_pk'>".$line[1]."</h4>
            <p class='gen_pk'>".$line[11]."</p>
            <p class='tipo_pk'>Tipi: <strong>".$line[2]."</strong></p>
            
            <div class='div_stats'>
                <div class='div_uno'>
                    <p class='hp'>HP <strong>".$line[5]."</strong></p>
                    <p class='atk'>Atk <strong>".$line[6]."</strong></p>
                    <p class='def'>Def <strong>".$line[7]."</strong></p>
                </div>
                
                <div class='div_due'>
                    <p class='sp_atk'>Sp. Atk <strong>".$line[8]."</strong></p>
                    <p class='sp_def'>Sp. Def <strong>".$line[9]."</strong></p>
                    <p class='speed'>Speed <strong>".$line[10]."</strong></p>
                </div>    
            </div>
        </div>
    </div>";
    }
    if ($i == $key+1){
        echo "<div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
        <div class='stats'>
            <h4 class='titolo_pk'>".$line[1]."</h4>
            <p class='gen_pk'>".$line[11]."</p>
            <p class='tipo_pk'>Tipi: <strong>".$line[2]."</strong></p>
            
            <div class='div_stats'>
                <div class='div_uno'>
                    <p class='hp'>HP <strong>".$line[5]."</strong></p>
                    <p class='atk'>Atk <strong>".$line[6]."</strong></p>
                    <p class='def'>Def <strong>".$line[7]."</strong></p>
                </div>
                
                <div class='div_due'>
                    <p class='sp_atk'>Sp. Atk <strong>".$line[8]."</strong></p>
                    <p class='sp_def'>Sp. Def <strong>".$line[9]."</strong></p>
                    <p class='speed'>Speed <strong>".$line[10]."</strong></p>
                </div>    
            </div>
        </div>
    </div>";
    }
    if ($i == $key+2){
       echo "<div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
       <div class='stats'>
           <h4 class='titolo_pk'>".$line[1]."</h4>
           <p class='gen_pk'>".$line[11]."</p>
           <p class='tipo_pk'>Tipi: <strong>".$line[2]."</strong></p>
           
           <div class='div_stats'>
               <div class='div_uno'>
                   <p class='hp'>HP <strong>".$line[5]."</strong></p>
                   <p class='atk'>Atk <strong>".$line[6]."</strong></p>
                   <p class='def'>Def <strong>".$line[7]."</strong></p>
               </div>
               
               <div class='div_due'>
                   <p class='sp_atk'>Sp. Atk <strong>".$line[8]."</strong></p>
                   <p class='sp_def'>Sp. Def <strong>".$line[9]."</strong></p>
                   <p class='speed'>Speed <strong>".$line[10]."</strong></p>
               </div>    
           </div>
       </div>
   </div>";
    }
    $i++;
}
echo "</section>";
}
?>