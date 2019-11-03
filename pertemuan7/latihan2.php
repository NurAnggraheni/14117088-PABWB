<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width,inihtial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie-edge">
       <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.mijn.css" integrity="sha384-gg0yR0iXCbMQv3Xipma34Md+dH/1fQ784/j6cY/iJTQU0hcWr7x9JvoRxT2MZw1T"crossigin="anonymous">
       <title>Harga</title>
    </head>
    <body>
        <label>Hitung Harga Bet Sesuai Banyak Karakter</label>
        <form action=""method ="POST"class="form-inline">
            <div class ="form-gtroup-mb-2">
                <label for ="nama">Nama: </label>
                <input type ="text" placeholder ="Masukkan Nama "id="nama"name="nama"class="form-control" required="required">
            </div>  
            <div class="form-group mb-2">
               <label for ="pilih"Warna>
                   <select class="form-control" id="pilih"name="pilih">
                       <option>red</option>
                       <option>blue</option>
                       <option>green</option>  
                       <option></option>
                   </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2" name ="submit"id="submit">Hitung</button>
        </form>
    </body>
</html>
<?php
if (isset($_POST["submit"])){
    $nama=$_POST ['nama'];
    $warna=$_POST ['pilih'];
    $jumlah=strlen($nama);
    if($jumlah>=1 && $jumlah<=10){
        $harga= $jumlah*300;
    }elseif($jumlah>=11 && $jumlah<=20){
        $harga= $jumlah*500;
    }else{
        $harga= $jumlah*700;
    }
    function warna($a="black",$harga){
        echo 'font color ='.$a.'>Harga='.$harga.'</font>';
    }
    echo "<br> Nama = ".$nama."<br>";
    warna($warna,$harga);
}

?>