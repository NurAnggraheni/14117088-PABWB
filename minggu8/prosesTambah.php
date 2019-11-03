<HTML> 
    
    <HEAD> 
        <title>Simpan Buku Tamu</title> 
        </HEAD> 
        <BODY> 
            <h1>Simpan Buku Tamu MySQL</h1>
             <?php 
             $nama = $_POST["nama"]; 
             $email = $_POST["email"];
              $komentar = $_POST["komentar"];
               $conn=mysqli_connect ("localhost","root","","buku_tamu")    or die ("koneksi gagal");
                mysqli_select_db($conn,"buku_tamu");
                echo "Nama     : $nama <br>";
                echo "Email    : $email <br>"; 
                echo "Komentar : $komentar <br>"; 
                $sqlstr="INSERT INTO bukutamu ('nama','email','komentar') VALUES ('$nama','$email','$komentar')";
                $hasil = mysqli_query($sqlstr);
                echo "Simpan bukutamu berhasil dilakukan"; ?> 
         </BODY> 
</HTML