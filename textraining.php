<?php
//DEFINED VARIABLES
$city = ["Cesis", "Jelgava", "Riga", "Valmiera", "Saldus"];
$car = ["BMW", "Audi", "Opel", "Lambo", "Citroen"];
$occupy = ["Skolnieks", "Rakstnieks", "Pavars", "Galdnieks", "Galdnieka paligs"];
$rseed = 0;
$name = readline("Ka tevi sauc? ");
$name = ucfirst($name); //first character of $name
    //echo $name;
$age = rand(18,29);
for($i=0; $i<strlen($name);$i++){
   $seed += ORD($name[$i]); 
    // echo " $name[$i] \n";
    // echo $seed;
}
srand($seed);
    //echo $seed
    //$my_rnd = rand(1, 100);
    //echo $my_rnd;

$my_rand = rand(0,4);
//MAIN CODE
$bio ="Tas ir ".$name." ir ".$age." gadus vecs. Vins dzivo ".$city[$my_rand].". ".$name."ir ".$occupy[$my_rand].". Vinam patik ".$car[$my_rand].", bet pats brauc ar ".$car[$my_rand].".";

echo $bio;
?>