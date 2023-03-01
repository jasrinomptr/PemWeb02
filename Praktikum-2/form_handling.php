<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="tabel">
    <h1 id="title">Form Pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">
        <!-- Tipe Teks -->
        <label>Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br>
        <!-- Tipe Radio -->
        <label>Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-Laki"><label for="">Laki-Laki</label><br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"><label for="">Perempuan</label><br>
        <!-- Tipe Checkbox -->
        <label for="">Mata Kuliah</label><br>
        <input type="checkbox" name="matkul" value="Statistika dan Probabilitas">
        <label for="">Statistika dan Probabilitas</label><br>
        <input type="checkbox" name="matkul" value="Pemrograman Web 2">
        <label for="">Pemrograman Web 2</label><br>
        <input type="checkbox" name="matkul" value="Basis Data">
        <label for="">Basis Data</label><br>
        <!-- Tipe Number -->
        <label for="">Nomor Telepon</label><br>
        <input type="number" name="nomor_telepon"><br>
        <!-- Button -->
        <button type="submit" class="btn-kirim">Kirim</button>
        <button type="reset" class="btn-reset">Reset Data</button>
    </form>
    </div>
</body>
</html>