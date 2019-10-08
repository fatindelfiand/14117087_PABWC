<?php
for($i=0; $i<=37; $i++){
    $cek=0;
    for($j=1; $j<=$i; $j++){
        if($i % $j == 0){
            $cek++;
        }
    }
    if ($cek == 2){
        echo $i;
        echo "<br>";
    }
}
?>