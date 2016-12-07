<?php/** * Created by PhpStorm. * User: radmin * Date: 30.11.2016 * Time: 20:51 */?>
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

                $user = $_POST['user'];
                $userpass = $_POST ['pass'];
                $pass = md5($userpass);

                if ($user && $pass){

                        $sorgula = mysql_query ("select * from root where user='$user' and pass= '$pass'");
                        $say = mysql_num_rows ($sorgula);

                        if ($say !=0){

                            $_SESSION['user'] = $user ;

                            echo "<center><p><h4 style='color:whitesmoke;'>Başarılı Giriş !</h4></p> ";
                            header("refresh:1;url=admin.php");
                            die('<p><h4 style="color:whitesmoke;">Birazdan Yönetim Paneline Gideceksiniz. Bu Süreyi beklememek İçin
                                             <a href="admin.php">Buraya Tıklayınız !</a></h4></p></center>');

                        }else{
                            echo "<center><h4><p style='color:whitesmoke;'>Başarısız Giriş !</p></h4></center> ";
                            header("refresh:1;url=index.php");
                        }
                }else{

                    echo   "<center><h4><p style='color: whitesmoke'>Alanları Boş Bırakmayınız !</p></h4></center>";
                    require ('index.php');
                }

            ?>


    </body>