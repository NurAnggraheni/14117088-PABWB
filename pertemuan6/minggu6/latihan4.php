<?php
for($i=1; $i<=37; $i++){
    $p=0;
    for($jum=1;$jum<=$i;$jum++){
        if($i%$jum==0){
            $p++;
        }
        
    }
    if($p==2)
        echo "$i <br>";

}
?>