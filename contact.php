<?php/* Created by PhpStorm.* User: radmin * Date: 27.10.2016* Time: 14:32*/?>
    <?php
        error_reporting(0);
        header('Content-Type: text/html; charset=utf-8');
        require "connect.php";
        require "settings.php";
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>root@radmin | Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet"  type="text/css" href="css/styles.css">
    <link rel="shortcut icon" href="./favicon.ico"/>
<script src="https://use.fontawesome.com/a6cd1fed07.js"></script>



    <section class="container">
                    <div class="container">
                            <h5>Merhaba Ziyaretçi</h5>
                            <p>Bu blogda yazılanlar ile ilgili bizim ile iletişime geçmek için aşağıda bulunan formu doldurunuz.<br>En kısa sürede geri dönüş sağlamaya çalışacağız.
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            </p>

                            <h5>İletişime Geç !</h5>
                            <?php

                            $visitor = mysql_real_escape_string($_POST['visitor']);
                            $email = mysql_real_escape_string($_POST['email']);
                            $message = mysql_real_escape_string($_POST['message']);
                            $save = mysql_real_escape_string($_POST['save']);

                            if ($save){
                                if(empty($visitor && $email && $message))
                                {
                                    echo "<a>Boş Alan Bıraktınız !</a>";

                                }else{

                                    $query = mysql_query("insert into contact (visitor,email,message) VALUES ('$visitor','$email','$message')");

                                    echo    "<i class=\"fa fa-quote-left\" aria-hidden=\"true\"><p>Mesajınız <b><a>root@radmin</a></b>'e ulaştı.En kısa zamanda dönüş yapacaktır.</p></i>";

                                }

                            }
                            ?>
                        
                            <form name="form1" method="post" enctype="multipart/form-data">
                                <input type="text" name="visitor" placeholder="Adınız" style="margin-bottom:10px">

                                <input type="text" name="email" placeholder="E-mail" style="margin-bottom:10px"><br>

                                <textarea name="message" placeholder="Mesajınızı Yazınız"></textarea>

                                <input type="submit" name="save" class="button FontColor1" style="margin-bottom:10px;margin-top: 10px;background-color:#333;color: white" value="Gönder">

                            </form>
                    </div>
    </section>


<script src="js/scripts.js"></script>

