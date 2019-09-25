<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/style.css" rel="stylesheet">
        <title>Tugas Praktek 2</title>
    </head>
    <body>
        <?php
		  date_default_timezone_set('Asia/Jakarta');
            $nama = 'Andrean Three Saputra';
            $nim = 'E41180445';
        ?>
        <ul style="display: inline;">
            <li>
                <a href="index.html">Beranda</a>
            </li>
            <li>
                <a href="tugas.php">Tugas 2</a>
            </li>	
        </ul>
        <div class="row">
            <div class="col-md-4">
                <p>
                    Nama Saya : <?= $nama ?>
                </p>
                <p>
                    Nim Saya : <?= $nim ?>
                </p>

                <table border="1">
                    <thead>
                        <tr>
                            <td>
                                No
                            </td>
                            <td>
                                Nama
                            </td>
                            <td>
                                NIM
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 10px;">
                                1
                            </td>
                            <td>
                                <?= $nama ?>
                            </td>
                            <td>
                                <?= $nim ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">

                <form method="POST">
                    <p>
                        Nama Lengkap <br>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                    </p>
                    <p>
                        Email <br>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                    </p>
                    <p>
                        Password <br>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                    </p>
                    <p>
                        Tanggal Lahir <br>
                        <input type="date" name="tgl_lahir" class="form-control" max="<?= date('Y-m-d') ?>" required>
                    </p>
                    <p>
                        Jenis Kelamin <br>
                        <select name='gender' class="form-control" required  >
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </p>
                    <p>
                        <button type="submit" class="btn btn-info">
                            Simpan Data
                        </button> 
                    </p>
                </form>
            </div>
            <div class="col-md-4">
                <div style="margin-top: 10px;">
                    <img src="img/doa.png" width="250" class="img-responsive">
                </div>
            </div>

        </div>


        Ini Link Kehalaman Index <a href="index.html">klik disini</a>

    </body>
</html>