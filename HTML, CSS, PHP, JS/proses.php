<?php 
    include "koneksi.php";

    if($nama == ""){
	    header("location:proses.php?nama=kosong");
    }else{
    $nama=$_POST['nama'];
    }
    $tempat=$_POST['tempat'];
    $Tgl=$_POST['Tgl'];
    $Bln=$_POST['Bln'];
    $Thn=$_POST['Thn'];
    $agama=$_POST['agama'];
    $JK=$_POST['JK'];
    $alamat=$_POST['alamat'];
    $NoHP=$_POST['NoHP'];
    $kewarganegaraan=$_POST['kewarganegaraan'];
    $email=$_POST['email'];
    $facebook=$_POST['facebook'];
    $twitter=$_POST['twitter'];
    $linked=$_POST['linked'];
    $github=$_POST['github'];
    $website=$_POST['website'];
    $pendidikan=$_POST['pendidikan'];
    $pengalaman=$_POST['pengalaman'];
    $penghargaan=$_POST['penghargaan'];


    echo "<center><b><h1>CURICULUM VITAE</h1><br>";
    echo "<table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>$nama</td>
        </tr>

        <tr>
            <td>Tempat Tanggal Lahir</td>
            <td>:</td>
            <td>$tempat, $Tgl $Bln $Thn</td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>$agama</td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>$JK</td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>$alamat</td>
        </tr>

        <tr>
            <td>No. HP</td>
            <td>:</td>
            <td>$NoHP</td>
        </tr>

        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td>$kewarganegaraan</td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td>$email</td>
        </tr>
        <tr>
            <td>Facebook</td>
            <td>:</td>
            <td>$facebook</td>
        </tr>

        <tr>
            <td>Twitter</td>
            <td>:</td>
            <td>$twitter</td>
        </tr>

        <tr>
            <td>Linked</td>
            <td>:</td>
            <td>$linked</td>
        </tr>

        <tr>
            <td>Github</td>
            <td>:</td>
            <td>$github</td>
        </tr>

        <tr>
            <td>Website</td>
            <td>:</td>
            <td>$website</td>
        </tr>

        <tr>
            <td>Pendidikan</td>
            <td>:</td>
            <td>$pendidikan</td>
        </tr>

        <tr>
            <td>Pengalaman</td>
            <td>:</td>
            <td>$pengalaman</td>
        </tr>

        <tr>
            <td>Penghargaan</td>
            <td>:</td>
            <td>$penghargaan</td>
        </tr>
    </table>";

?>
