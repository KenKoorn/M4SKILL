<?php
function vulArray($aantalCijfers) {
    if ($aantalCijfers < 5) {
        echo "Minimaal 5 cijfers zijn vereist.";
        return;
    }
    
    $array = array();
    for ($i = 0; $i < $aantalCijfers; $i++) {
        $array[] = rand(1, 100);
    }
    
    return $array;
}

function toonArrayInBrowser($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$cijfers = vulArray(10);
toonArrayInBrowser($cijfers);

?>