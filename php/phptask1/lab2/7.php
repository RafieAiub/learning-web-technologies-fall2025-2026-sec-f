<?php

for($i= 1; $i<=3; $i++){
    for($m =1 ;$m<= $i; $m++){
        echo "*";
    }
    echo"<br>";
}

for($h= 3; $h>=1; $h--){
    for($j =1 ;$j<= $h; $j++){
        echo "$j";
    }
    echo"<br>";
}

$char = 'A';
 for($x=0; $x<=3; $x++){
    for($y=1; $y<=$x; $y++){
        echo "$char";
        $char++;
    }
    echo"<br>";
 }


?>