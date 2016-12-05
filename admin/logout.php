<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
require "../connect.php";
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/styles.css">
<link rel="shortcut icon" href="../img/anka.jpg"/>


    <body style="background-color: #0E2231">
        <?php

            session_start();
            $username = $_SESSION ['username'];

            session_destroy();

            echo "<center><p><h4 style='color: whitesmoke'>Başarılı Bir Şekilde Çıkış Yaptınız !</h4> </p>";
            header("refresh:1;url=index.php");
            die('<p> <h4 style=\'color: whitesmoke\'>Anasayfaya Yönlendiriliyorsunuz. Bu Süreyi Beklememek İçin <a href="index.php">Buraya Tıklayınız !</a></h4></p></center>');

        ?>
    </body>
