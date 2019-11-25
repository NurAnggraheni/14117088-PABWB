<HTML> 
    
    <HEAD> 
        <title>Simpan Buku Tamu</title> 
        </HEAD> 
        <BODY> 
            <h1>Simpan Buku Tamu MySQL</h1>
             <?php 
             $nama= $_POST["nama"]; 
             $alamat= $_POST["alamat"];
              $jk = $_POST["Gender"];
              $golongan = $_POST["goldar"];
              $hobi= $_POST["hobby"];
              $kete = $ket["ket"];
               $conn=mysqli_connect ("localhost","root","")    or die ("koneksi gagal");
                mysqli_select_db($conn,"minggu7");
                echo "Nama     : $nama <br>";
                echo "Alamat    : $alamat <br>"; 
                echo "Gender    : $jk <br>"; 
                echo "Goldar    : $golongan<br>";
                echo "Hobby    : $hobi<br>";
                echo "Ket   : $kete<br>";
                $sqlstr="INSERT INTO minggu (nama,alamat,Jenis_kel,gol,hobi,ket) VALUES ('$nama','$alamat','$jk','$golongan','$hobi',$kete)";
                $hasil = mysqli_query($conn,$sqlstr);
                echo "Simpan bukutamu berhasil dilakukan"; ?> 
         </BODY> 
</HTML

