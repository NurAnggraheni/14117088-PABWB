<!Doctype html>
<html>
    <head>
        <title> Tugas Minggu 7 </title>
    <head>
<body>
    <h1> Tugas Minggu 7 </h1>
    <body>
        <form action="minggu7e.php" method="post">
            <table>
                <tr>
                    <td>
                        Name        :
                    </td>
                    <td>
                        <input type="text" placeholder="Nama" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        Alamat      :
                    </td>
                    <td>
                        <input type="text" placeholder="Alamat" name="alamat">
                    </td>
                </tr>
                <tr>
                    <td>
                       Jenis Kelamin    : 
                    </td>
                    <td>
                        <input type="radio" name="Gender">Man
                        <input type="radio" name="Gender">Woman
                    </td>
                </tr>
                <tr>
                    <td>
                        Golongan Darah  :
                    </td>
                    <td>
                        <select>
                             <option name="goldar" value="A">A</option>
                             <option name="goldar"Value="AB">AB</option>
                             <option name="goldar"value="B">B</option>
                             <option name="goldar"value ="O">O</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        HOBBY       :
                    </td>
                    <td>
                        <input type= "checkbox" name ="hobby" value= "Makan">Makan <br>
                        <input type= "checkbox" name ="hobby" value= "TIDUR ">Tidur<br>
                        <input type= "checkbox" name ="hobby" value= "shopping">Shopping <br>

                    </td>
                </tr>
                <tr>
                    <td > 
                         Keterangan :
                    </td>
                    <td width ="250" height="50">
                        <input type="text"width="300" Height="10000" name="ket">
                        <input type="Submit" value="Sumbit" name="">
                    </td>
                                
                </tr>
               
                   
            </table>
</body>
    