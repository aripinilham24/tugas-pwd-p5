<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran</title>
</head>

<body>
    <center>
        <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
        <h3>Pendaftaran Anggota Secara Online</h3>
        <h5><i>Jl. Sejahtea No.11 Bekasi Tenggara <br></i></h5>
        <hr color="red">
    </center>
    <p>
        <center>
            <h2>***** BUKTI PENDAFTARAN *****</h2>
        </center>
        <?
            $nama = $_POST['name'];
            $tempat = $_POST['tempatLahir'];
            $tgl = $_POST['tanggalLahir'];
            $bln = $_POST['bulanLahir'];
            $thn = $_POST['tahunLahir'];
            $jenis = $_POST['jenisKelamin'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['noTelp'];
            echo "Tanggal Cetak : ";
            echo date("D - d/M/Y <p>")."<br>";
            echo "Nama Lengkap : $nama <br>";
            echo "TTL : $tempat - $tgl/$bln/$thn <br>";
            if ($jenis == 'l') {
                $jk = 'Laki-Laki';
            } else {
                $jk = 'Perempuan';
            }
            echo "Jenis Kelamin : $jk <br>";
            echo "Alamat : $alamat <br>";
            echo "No.telp : $telp <br>";
            ?>
    </p>
    <a href="pendaftaran.php">
        <<< Input Lagi</a>
            <hr color="red">
            <marquee behavior="" direction="right"><i>- - - Pendaftaran Anggota Perpustakaan Secara Online - - -</i>
            </marquee>
</body>

</html>