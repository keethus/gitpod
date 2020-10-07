<?php
$m = [];;
for($i = 0;$i<50;$i+=1){
    $m[$i] = rand(1,100);
}

function sortToBiggest($unsorted){
    for($i = 0; $i < count($unsorted);$i++){
        for($n = 0; $n < count($unsorted); $n++){
            if($unsorted[$i] < $unsorted[$n]){
                $x = $unsorted[$i];
                $unsorted[$i] = $unsorted[$n];
                $unsorted[$n] = $x;
            }
        }
    }
    return $unsorted;
}
print_r(sortToBiggest($m));

?>