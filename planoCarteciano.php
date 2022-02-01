<?php

$ejeX = rand (-100,100);
$ejeY = rand (-100,100);

if ($ejeX > 0 and $ejeY > 0 ){
    echo "Las coordenadas ($ejeX, $ejeY) Estan en el I CUADRANTE";
} elseif ($ejeX < 0 and $ejeY > 0){
    echo "Las coordenadas ($ejeX, $ejeY) Estan en el II CUADRANTE";
}elseif ($ejeX <0 and $ejeY <0){
    echo "Las coordenadas ($ejeX, $ejeY) Estan en el III CUADRANTE";
}else{
    echo "Las cordenadas ($ejeX, $ejeY) Estan en el IV CUADRANTE";
}
