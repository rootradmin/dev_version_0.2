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

                        <section class="nav sub-page">

                                <ul style="background-color: 	transparent;">

                                    <li><a href="admin.php">Anamenu</a></li>
                                    <li><a href="admin.php?selection=makale">MAKALE</a></li>
                                    <li><a href="admin.php?selection=proje">PROJE</a></li>
                                    <li><a href="logout.php">ÇIKIŞ</a></li>
                                </ul>

                        </section>

                        <?php
                        //Makale değişkenleri
                        $id = mysql_real_escape_string($_POST['id']);
                        $hood = mysql_real_escape_string($_POST ['hood']);
                        $article = mysql_real_escape_string($_POST ['article']);
                        $tags = mysql_real_escape_string($_POST['tags']);
                        $upload = mysql_real_escape_string($_POST ["upload"]);
                        //proje değişkenleri
                        $project_img = $_POST['project_img'];
                        $project_name =$_POST['project_name'];
                        $time_limit = $_POST['time_limit'];
                        $goal = $_POST['goal'];
                        $url = $_POST['url'];
                        $projects_upload = $_POST['projects_upload'];

                        function seo($s) {
                            $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','?','!','+','.');
                            $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','','','','');
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
                        }
                        if ($projects_upload) // project insert
                        {
                            if ($project_name=='' || $time_limit=='' || $goal=='' || $url=='')
                            {
                                echo "<a style='color: whitesmoke'>Proje Ayrıntılarında Boş Alan Bıraktınız !</a>";

                            }else{
                                if ($_FILES["project_img"]["size"])
                                {
                                    $image = $_FILES["project_img"]["name"];
                                    $yol = "../upload/".$image;

                                    if (move_uploaded_file($_FILES["project_img"]["tmp_name"], $yol))
                                    {

                                        $query = mysql_query("insert into projects (project_img,project_name,time_limit,goal,url) values ('$yol','$project_name','$time_limit','$goal','$url')  ");

                                        echo "<a style='color: whitesmoke'>Proje Kaydedildi!</a>";
                                    }
                                }
                            }
                        }
                         ?>
                        <section class="row container">
                            <?php
                            if (isset($_GET["selection"]))
                            {
                            if ($_GET["selection"]=="makale")
                            {
                            ?>
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
                            <?php
                            }
                            else if ($_GET["selection"]=="proje")
                            {?>

                                <center>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <!--PROJECTS UPLOAD START -->
                                        <div class="article container row"><br>
                                            <input  name="project_name" class="eight columns" type="text" placeholder="Proje Adı">
                                            <input  name="time_limit" class="eight columns" type="text" placeholder="Proje Süresi">
                                            <input  name="goal" class="eight columns" type="text" placeholder="Proje Amacı">
                                            <input  name="url" class="eight columns" type="text" value="http://" placeholder="Proje Url">
                                            <input  name="project_img" class="eight columns" type="file"  style="color: whitesmoke" ><br>
                                            <input type="submit" name="projects_upload"  value="Proje Ekle" class="eight columns  btn btn-primary" style="border-color: black;color:black">
                                        </div>
                                        <!--PROJECTS UPLOAD FİNİSH-->
                                    </form>
                                </center>

                                <?php
                            }

                            }?>
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




            <!--Root İndex Page Start-->
                           <!--Database Durumu START-->
                                <div class="row" align="center" >
                                    <div class="three columns column" style="background-color:#800080">
                                        <h2>Yazı :

                                            <?php
                                            $query = mysql_query("SELECT COUNT(*) FROM articles"); //projects tablosundaki bütün alan sayısı
                                            $say = mysql_fetch_array($query);
                                            $sonuc = $say['0'];
                                            echo $sonuc;
                                            ?>

                                        </h2> <!--Toplam  Yazı-->
                                    </div>

                                    <div class="three columns column" style="background-color: 	#008000">
                                        <h2>Proje Sayısı :
                                            <?php
                                            $query = mysql_query("SELECT COUNT(*) FROM projects"); //projects tablosundaki bütün alan sayısı
                                            $say = mysql_fetch_array($query);
                                            $sonuc = $say['0'];
                                            echo $sonuc;
                                            ?>
                                        </h2><!--Toplam  Proje-->
                                    </div>

                                    <div class="three columns column" style="background-color:#FFD700">
                                        <h2>Okunma : 86</h2>
                                    </div>
                                    <div class="three columns column" style="background-color: #008080">
                                        <h2>Yorum : 485</h2>
                                    </div>
                                </div>
                          <!--Database Durumu START-->
            <br>

                          <!--Yazar EKLE && Ekli Yazarlara yetki ver START-->
                                <section class="container">


                                    <div class="row">


                                        <form action="" method="post" enctype="multipart/form-data">

                                            <div class="twelve columns" align="center">

                                                <div class="six columns" align="center" style="background-color: #D5D3D3;">
                                                    <h2>Yazar Ekle</h2>

                                                    <?php
                                                        $auname= mysql_real_escape_string($_POST['author_user_name']);
                                                        $authorpass= mysql_real_escape_string($_POST['author_pass']);
                                                        $aname= mysql_real_escape_string($_POST['author_name']);
                                                        $asname= mysql_real_escape_string($_POST['author_surname']);
                                                        $amail= mysql_real_escape_string($_POST['author_mail']);
                                                        $a_add= mysql_real_escape_string($_POST['author_add']);
                                                        $apass= md5($authorpass);

                                                        if ($a_add)
                                                        {
                                                                if ($auname=='' || $authorpass=='' || $aname=='' || $asname=='' || $amail =='')
                                                                {
                                                                    echo "Boş Alan Bıraktınız !";
                                                                }else{

                                                                    $query =mysql_query("insert into writer (author_user_name,a_pass,author_name,author_surname,mail) VALUES ('$auname','$apass','$aname','$asname','$amail')");

                                                                    echo "Yazar Eklendi !";
                                                                }
                                                        }
                                                    ?>

                                                    <input  name="author_user_name" class="ten columns" type="text" placeholder="USERNAME">
                                                    <input  name="author_pass" class="ten columns" type="password" placeholder="PASSWORD">
                                                    <input  name="author_name" class="ten columns" type="text" placeholder="NAME">
                                                    <input  name="author_surname" class="ten columns" type="text" placeholder="SURNAME">
                                                    <input  name="author_mail" class="ten columns" type="email" placeholder="E-MAİL">
                                                    <input type="submit" name="author_add"  value="Yazar Kaydet" class="ten columns  btn btn-primary" style="border-color: black;color:black;margin-top:20px;margin-bottom: 10px">
                                                </div>

                                                <div class="six columns column" align="center" style="background-color: #D5D3D3">
                                                        <h2>Yazarlar</h2>
                                                        <?php
                                                            $query = mysql_query("SELECT COUNT(*) FROM writer"); //writer tablosundaki bütün alan sayısı
                                                            $say = mysql_fetch_array($query);
                                                            $sonuc = $say['0'] - 1;

                                                            for ($number = 0; $number <= $sonuc; $number++)
                                                            {
                                                                    $num = 1 ;
                                                                    $query = mysql_query("select * from writer order by id ASC limit $number,$num");
                                                                    while ($come = mysql_fetch_assoc($query))
                                                                    {
                                                                        $authors = $come['author_user_name'];

                                                                        echo "<h5>".$authors;
                                                                        echo " <input type='submit' name='delete' value='sil'>";
                                                                        echo "<input type='submit' name='update' value='güncelle'></h5>";
                                                                    }
                                                            }
                                                        ?>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                    <hr/>
                                </section>
                        <!--Yazar EKLE && Ekli Yazarlara yetki ver FINISH-->
            <!--Root İndex Page Finish-->
    </body>