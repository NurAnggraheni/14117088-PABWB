<HTML> 
    
    <HEAD> 
        <title>Simpan Buku Mahasiswa</title> 
        </HEAD> 
        <BODY> 
            <h1>Simpan Buku Mahasiswa</h1>
             <?php 
             $nrp = $_POST["nrp"]; 
             $nama = $_POST["nama"];
             $alamat = $_POST["alamat"];
             $id_jurusan = $_POST["id_jur"];
             $conn=mysqli_connect ("localhost","root","","mhs")    or die ("koneksi gagal");
                mysqli_select_db($conn,"mhs");
                echo "NRP     : $nrp <br>";
                echo "Nama    : $nama <br>"; 
                echo "Alamat : $alamat <br>";
                echo "ID Jurusan : $id_jurusan <br>"; 
                $sqlstr="INSERT INTO mahasiswa (nrp,nama,alamat,id_jur) VALUES ($nrp,'$nama','$alamat','$id_jurusan')";
                $hasil = mysqli_query($conn,$sqlstr);
                echo "Simpan bukutamu berhasil dilakukan"; ?> 
         </BODY> 

</HTML>