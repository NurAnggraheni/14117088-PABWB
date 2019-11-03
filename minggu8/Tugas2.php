<?php

$kolom=$_POST['kolom'];
$cari=$_POST['cari'];

   $conn=mysqli_connect("localhost","root",""); 
   mysqli_select_db($conn,"mhs"); 

   $hasil=mysqli_query($conn,"select * from mahasiswa where  $kolom like '%$cari%'");  
   $jumlah=mysqli_num_rows($hasil);

   echo "<br>";  
   echo "Ditemukan: $jumlah";  
   echo "<br>"; 

   while($baris=mysqli_fetch_array($hasil)) {
           echo "NRP : "; 
           echo $baris[0];  
           echo "<br>"; 

           echo "Nama : ";  
           echo $baris[1]; 
           echo "<br>"; 

           echo "Alamat :"; 
           echo $baris[2];

           echo "Id Jurusan :"; 
           echo $baris[3];
           }

 
 ?>