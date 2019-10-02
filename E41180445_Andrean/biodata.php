<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/style.css" rel="stylesheet">
        <title>Biodata Andrean Three Saputra</title>
    </head>
    <body>
        <?php
		  date_default_timezone_set('Asia/Jakarta');
            $nama = 'Andrean Three Saputra';
            $nim = 'E41180445';
        ?>
        <div class="row">
            
            <div class="col-md-12">
                <h1>Biodata Andrean Three</h1>
            </div>
            <div class="col-md-4" style="content-align: center;">
                
                <table border="1" style="width: 100%;">
                    <tr>
                        <td class="tdsatu txtcenter" colspan="2">
                            <h3>Data Pribadi</h3>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            Nama
                        </td>
                        <td class="tddua">
                            <?= $nama ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            NIM
                        </td>
                        <td class="tddua">
                            <?= $nim ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            Jenis Kelamin
                        </td>
                        <td class="tddua">
                            Laki Laki
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            Tanggal Lahir
                        </td>
                        <td class="tddua">
                            22 November 1999
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            Umur
                        </td>
                        <td class="tddua">
                        <?php 
                            $tglkeluar = new DateTime("1999-11-22 00:00:00");
                            $tdy = new DateTime(date('Y-m-d'). " 00:00:00");
                            echo $tglkeluar->diff($tdy)->format("%y Tahun %m Bulan %d Hari %h Jam");
                            
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            Agama
                        </td>
                        <td class="tddua">
                            Islam
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            Alamat
                        </td>
                        <td class="tddua">
                            Jalan Pelita Kel. Tamansari - Bondowoso
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            Foto
                        </td>
                        <td class="tddua">
                            <div style="margin-top: 10px;">
                                <img src="img/ane.jpeg" width="250" class="img-responsive">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4" style="content-align: center;">
                <table border="1" style="width: 100%;">
                    <tr>
                        <td class="tdsatu txtcenter" colspan="2">
                            <h3>Riwayat Pendidikan</h3>
                        </td>
                    </tr>
                    <tr>
                        <td class="tddua">
                            Jenjang
                        </td>
                        <td class="tdsatu">
                            Tahun
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            SDN Tamansari 2 Bondowoso
                        </td>
                        <td class="tddua">
                            2006 - 2012
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            SMPN 2 Bondowoso
                        </td>
                        <td class="tddua">
                            2012 - 2015
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            SMKN 1 Bondowoso
                        </td>
                        <td class="tddua">
                            2015 - 2018
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            Politeknik Negeri Jember
                        </td>
                        <td class="tddua">
                            2018 - 2022
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="col-md-3" style="content-align: center;">
                <table border="1" style="width: 100%; margin-top: 10px;">
                    <tr>
                        <td class="tdsatu txtcenter" colspan="3">
                            <h3>Kontak</h3>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            <img src="img/medsos/call.png" width="50" class="img-responsive">                        
                        </td>
                        <td class="tddua">
                            081999341005
                        </td>
                        <td class="tdsatu">
                            <a href="tel:6281999341005" target="_blank">
                                <button class="btn btn-info">
                                    Buka Link
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            <img src="img/medsos/wa.png" width="50" class="img-responsive">                        
                        </td>
                        <td class="tddua">
                            081999341005
                        </td>
                        <td class="tdsatu">
                            <a href="http://wa.me/6281999341005" target="_blank">
                                <button class="btn btn-info">
                                    Buka Link
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            <img src="img/medsos/fb.png" width="50" class="img-responsive">                        
                        </td>
                        <td class="tddua">
                            Andrean
                        </td>
                        <td class="tdsatu">
                            <a href="https://www.facebook.com/andreanthree" target="_blank">
                                <button class="btn btn-info">
                                    Buka Link
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdsatu">
                            <img src="img/medsos/fb.png" width="50" class="img-responsive">                        
                        </td>
                        <td class="tddua">
                            Andrean Three Saputra
                        </td>
                        <td class="tdsatu">
                            <a href="https://www.linkedin.com/in/andreanthree/" target="_blank">
                                <button class="btn btn-info">
                                    Buka Link
                                </button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>

        </div>


    </body>
</html>