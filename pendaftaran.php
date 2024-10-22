<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="buktiPendaftaran.php" method="POST">
        <center>
            <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
            <h3>Pendaftaran Anggota Secara Online</h3>
            <h5><i>Jl. Sejahtea No.11 Bekasi Tenggara <br></i></h5>
            <hr color="red">
        </center>
        <label for="name">
            Nama Lengkap:
            <input type="text" name="name" id="name">
        </label>

        <label for="tempatTanggalLahir">
            TTL:
            <div id="tempatTanggalLahir">
                <!--tempat lahir-->
                <input type="text" name="tempatLahir" id="">
                <!--tanggal lahir-->
                <select name="tanggalLahir" id="">
                    <?php
                    for($i = 1; $i <= 31; $i++) {
                        echo "<option value=$i>$i</option>";
                    }
                    ?>
                </select>
                <!-- bulan lahir -->
                <select name="bulanLahir" id="">
                    <option value="januari">Januari</option>
                    <option value="februari">Februari</option>
                    <option value="maret">Maret</option>
                    <option value="april">April</option>
                    <option value="mei">Mei</option>
                    <option value="juni">Juni</option>
                    <option value="juli">Juli</option>
                    <option value="agustus">Agustus</option>
                    <option value="september">September</option>
                    <option value="oktober">Oktober</option>
                    <option value="november">November</option>
                    <option value="desember">Desember</option>
                </select>
                <!-- tahun lahir -->
                <input type="text" name="tahunLahir" placeholder="2004" id="">
            </div>
        </label>
        <label for="jenisKelamin">
            Jenis Kelamin:
            <div id="jenisKelamin">
                <input type="radio" name="jenisKelamin" value="pria" id="">Pria
                <input type="radio" name="jenisKelamin" value="wanita" id="">Wanita
            </div>
        </label>
        <label for="alamat">
            Alamat:
            <textarea name="alamat" id="alamat" rows="3" cols="35"></textarea>
        </label>
        <label for="noTelp">
            No. Telp:
            <input type="text" name="noTelp" id="noTelp">
        </label>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
    <hr color="red">
    <marquee behavior="" direction="right"><i>- - - Pendaftaran Anggota Perpustakaan Secara Online - - -</i></marquee>
</body>

</html>