<?php/* Created by PhpStorm.* User: radmin * Date: 24.10.2016 * Time: 01:03*/?>
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
<script type="application/javascript" src="ckeditor/ckeditor.js"></script>

    <body style="background-image: url(../img/news-7.jpg)">
            <?php
            Session_start();
            $user = $_SESSION['user'];
                    if ($user)
            {           ?><br><br>


                        <?php
                        //Makale değişkenleri
                        $id = mysql_real_escape_string($_POST['id']);
                        $hood = mysql_real_escape_string($_POST ['hood']);
                        $article = mysql_real_escape_string($_POST ['article']);
                        $tags = mysql_real_escape_string($_POST['tags']);
                        $upload = mysql_real_escape_string($_POST ["upload"]);


                        function seo($s) {
                            $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','?','!','+','.','"',"'");
                            $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','-','-','-','-','-','-','-');
                            $s = str_replace($tr,$eng,$s);
                            $s = strtolower($s);
                            $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
                            $s = preg_replace('/\s+/', '-', $s);
                            $s = preg_replace('|-+|', '-', $s);
                            $s = preg_replace('/#/', '', $s);
                            $s = str_replace('.', '', $s);
                            $s = trim($s, '-');
                            return $s;
                        }
                        $seo_url = seo($hood);
                        if ($upload) //makale upload
                        {
                            if($hood=='' || $article=='')
                            {
                                echo "<a style='color: whitesmoke'>Makale Ayrıntılarında Boş Alan Bıraktınız !</a>";
                            }else{
                                // echo "<option>butona basıldı</option>";
                                $query = mysql_query("insert into articles (seo_hood,hood,article,tags) values ('$seo_url','$hood','$article','$tags')  ");

                                echo        "<a style='color: whitesmoke'>Makale Kaydedildi!</a>";
                            }
                        }?>

                                    <center>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <!--ARTICLES UPLOAD START -->
                                            <input  name="hood" class="twelve columns" type="text" placeholder="Başlık Yazınız">
                                            <br>
                                            <br>
                                            <textarea name="article" class="ckeditor"  cols="30" rows="10"></textarea>
                                            <br>
                                            <input  style="color:Red;" name="tags" class="twelve columns" type="text" placeholder="Etiket Ekle (örğn: php,java,jquery)">
                                            <br><br>
                                            <input type="submit" name="upload"  value="Gönder" class="btn btn-primary" style="border-color: black;color: black"><br><br>
                                            <!--ARTICLES UPLOAD START -->
                                        </form>
                                    </center>

                        </section>
            <?php
            }else{
                        echo   "<div style='color: whitesmoke'>Giriş Yapmadınız.  ";
                        header("refresh:1;url= index.php");
                        die('2 Saniye Sonra Anasayfaya Gideceksiniz. Bu Süreyi Beklememek İçin
                                     <a href="index.php">Buraya Tıklayınız !</a></div>');
                        header("refresh:1;url= index.php");
            }
            ?>






    </body>