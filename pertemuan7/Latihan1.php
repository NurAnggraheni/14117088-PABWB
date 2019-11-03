<?php
 function tukar($angka1,$angka2){
    $temp=$angka1;
    $angka1=$angka2;
    $angka2=$temp;
 }
 $x=5;
 $y=3;
 tukar($x,$y);
 echo "$x<br>" ; 
 echo $y;
 ?>
