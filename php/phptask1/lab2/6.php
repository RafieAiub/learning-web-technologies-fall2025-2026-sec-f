<?php

$animals = array("hen", "cat", "dog", "cow", "crow");

for($i=0; $i<5; $i++){
    if($animals[$i]=="crow"){
        echo "the crow has been found in $i index";
        break;
    }
}

?>