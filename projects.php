<?php /*Created by PhpStorm.* User: radmin * Date: 27.10.2016* Time: 14:31*/?>

<?php
    error_reporting(0);
    header('Content-Type: text/html; charset=utf-8');
    require "settings.php";
    require "connect.php";

?>
<meta charset="utf-8" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> root@radmin | Projects</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./css/styles.css">
<link rel="shortcut icon" href="./favicon.ico"/>
<script src="https://use.fontawesome.com/a6cd1fed07.js"></script>

    <section class="container">

            <p align="center">Kahve ve sigara ile bilgisayar başında geçirdiğim anlardan geriye ve Özgür Yazılıma kendi çapımda bir şeyler bırakmaya çalışıyorum öğrendikçe deniyorum.Projelerimi aşağıda görebilirsin.
                <i class="fa fa-github" aria-hidden="true"></i><a href="https://github.com/rootradmin">Github'da beni bul !</a>
            </p>

            <?php
            $query = mysql_query("SELECT COUNT(*) FROM projects"); //projects tablosundaki bütün alan sayısı

            $say = mysql_fetch_array($query);

            $sonuc = $say['0'] - 1;

            for ($number = 0; $number <= $sonuc; $number++)
            {
                $num = 1 ;
            ?>
                    <div class="row" align="center">
                        <?php

                        $query = mysql_query("select * from projects order by id DESC limit $number,$num");
                        while ($come = mysql_fetch_assoc($query)){

                            $project_img = $come['project_img'];
                            $project_name = $come['project_name'];
                            $time_limit = $come['time_limit'];
                            $goal = $come['goal'];
                            $url = $come['url'];
                        }
                        ?>
                        <!--Proje Alanı Start-->
                                <div class="six columns">
                                    <br>
                                    <img src="upload/<?php echo $project_img;?>">
                                </div>
                                <div class="six columns">
                                    <p>
                                            <H1>Proje Hakkında</H1>
                                            <option>PROJE ADI : </option> <h5> <?php echo $project_name; ?></h5>
                                            <option>AMACI :</option> <h5><?php echo $goal;?></h5>
                                            <option>YAPIM SÜRESİ:</option>    <h5> <?php echo $time_limit;?></h5>

                                            <h5><a class="noline" href="<?php echo $url;?>">Projeyi Gör</a></h5></p>
                                    </p>
                                </div>
                                <hr>
                        <!--Proje Alanı Finish-->
                    </div>
              <?php
            }
             ?>
    </section>


