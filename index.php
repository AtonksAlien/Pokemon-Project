<?php 

 function main(){
    global $dim_ut;
    $dim_ut = array();
    $csv= array_map('str_getcsv', file('../data/pokemon.csv')); // mappa il csv 
    $n = 0;
    foreach($csv as $line){ // legge il csv riga per riga
            calcolo_distanza($line[5], $line[6], $line[7], $line[8], $line[9], $line[10], $dim_ut);
        $n++;
    }
    ricerca_distanzaMinima($dim_ut, $csv);

 }


function calcolo_distanza($hp, $attack, $defense, $special_attack, $special_defense, $speed, &$dim_ut){
// Calcoliamo e memorizziamo ladistanza tra i dati inseriti e i Pokemon
    $d1 =((int)$_POST["vita"]-(int)$hp);
    $d2 =((int)$_POST["attacco"]-(int)$attack);
    $d3 =((int)$_POST["difesa"]-(int)$defense);
    $d4 =((int)$_POST["att_speciale"]-(int)$special_attack);
    $d5 =((int)$_POST["dif_speciale"]-(int)$special_defense);
    $d6 =((int)$_POST["velocita"]-(int)$speed);
    $pd1 = pow($d1, 2);
    $pd2 = pow($d2, 2);
    $pd3 = pow($d3, 2);
    $pd4 = pow($d4, 2);
    $pd5 = pow($d5, 2);
    $pd6 = pow($d6, 2);
    $dim = sqrt($pd1+$pd2+$pd3+$pd4+$pd5+$pd6);

    array_push($dim_ut, $dim);
}

function ricerca_distanzaMinima($dim_ut, $csv){
    
echo "<br/>";
$i=0;
$cont = 0;

array_multisort($dim_ut, $csv);

foreach($csv as $line){ // legge il csv riga per riga
    if ($i == 0){
        echo "
        <div class='card'>
            <div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
            <div class='stats'>
                <h4 class='titolo_pk'>".$line[1]."</h4>
                <p class='gen_pk'>Gen. ".$line[11]."</p>
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
    if ($i == 1){
        echo "
        <div class='card'>
            <div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
            <div class='stats'>
                <h4 class='titolo_pk'>".$line[1]."</h4>
                <p class='gen_pk'>Gen. ".$line[11]."</p>
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
    if ($i == 2){
        echo "
        <div class='card'>
            <div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
            <div class='stats'>
                <h4 class='titolo_pk'>".$line[1]."</h4>
                <p class='gen_pk'>Gen. ".$line[11]."</p>
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
    if ($i == 3){
        echo "
        <div class='card'>
            <div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
            <div class='stats'>
                <h4 class='titolo_pk'>".$line[1]."</h4>
                <p class='gen_pk'>Gen. ".$line[11]."</p>
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
    if ($i == 4){
        echo "
        <div class='card'>
            <div class='img' style='background-image:url(../static/images/".$line[0].".png);'></div>
            <div class='stats'>
                <h4 class='titolo_pk'>".$line[1]."</h4>
                <p class='gen_pk'>Gen. ".$line[11]."</p>
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
}
main();

?>