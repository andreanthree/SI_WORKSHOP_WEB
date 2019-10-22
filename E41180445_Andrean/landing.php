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
        <ul>
            <li class="likanan"><a href="default.asp">Aplikasi</a></li>
            <li><a href="default.asp">Home</a></li>
            <li><a href="news.asp">News</a></li>
            <li><a href="contact.asp">Contact</a></li>
            <li><a href="about.asp">About</a></li>
        </ul>
        <div class="judulhalaman">
            <h2>
                Belajar HTML Dan CSS
            </h2>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="img/icon_card/ruby.jpg" class="card-img-top" width="250" height="150" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ruby</h5>
                        <p class="card-text">Ayo Belajar Ruby</p>
                        <a href="#"><button  class="btn btn-info">Detail</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="img/icon_card/java.jpg" class="card-img-top" width="250" height="150" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Java</h5>
                        <p class="card-text">Ayo Belajar Java</p>
                        <a href="#"><button  class="btn btn-info">Detail</button></a>
                    </div>
                </div>            
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="img/icon_card/node.png" class="card-img-top" width="250" height="150" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NodeJS  </h5>
                        <p class="card-text">Ayo Belajar Ruby NodeJS</p>
                        <a href="#"><button  class="btn btn-info">Detail</button></a>
                    </div>
                </div>            
            </div>


        </div>


    </body>
</html>