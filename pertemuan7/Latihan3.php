<?php
 function faktorial($angka1=1){
    if($angka1==1){
        return 1;
    }else {
        return $angka1*faktorial($angka1-1);
    }
 }
echo "10!=".faktorial(10);
 ?>