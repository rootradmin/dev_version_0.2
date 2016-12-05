<?php/** * Created by PhpStorm.* User: radmin * Date: 22.11.2016* Time: 23:50 */?>

<?php
error_reporting(0);
require "connect.php";
require "settings.php";
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/styles.css">
<link rel="shortcut icon" href="img/anka.jpg"/>
<!--CKEditor codesnipper plugin colors start-->
<link rel="stylesheet" href="ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css">
<script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js" type="text/javascript"></script>
<script>hljs.initHighlightingOnLoad();</script>
<!--CKEditor codesnipper plugini colors finish-->
<script src="https://use.fontawesome.com/a6cd1fed07.js"></script>

    <section class="top-bar">
        <div class="container">
            <div class="row">
                <div class="box box-1">
                    <div class="socials">
                        <ul>
                            <li><a href="#!"><i class="fa fa-envelope"> </i>   </a></li>
                            <li><a href="#!"> <i class="fa fa-facebook-official"> </i>  </a></li>
                            <li><a href="https://twitter.com/rootradmin"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="https://github.com/mukadderbahadir"><i class="fa fa-github-square"></i></a></li>
                            <li><a href="#!"><i class="fa fa-telegram"> </i>   </a></li>
                        </ul>
                    </div>
                </div>
                        <!--search start-->
                        <div class="box box-2">
                            <form class="search-box" method="post" action="<?php echo $settings?>search">
                                <div class="btn-close"></div>
                                <p>
                                    <input class="search_bar" type="text" name="search" placeholder="Search" data-ac-placeholder="Aramak için yazın...">
                                </p>
                                <p class="help">
                                    Arama yapmak için ilgili <strong>Git</strong>'e basın  . İptal etmek için <strong>X</strong> tuşuna basın.
                                </p>
                            </form>
                        </div>
                        <!--search finish-->
            </div>
        </div>
    </section>

        <header class="header">
            <div class="container">
                <div class="logo">
                    <center>
                        <a href="<?php echo $settings;?>">
                            <img src="img/anka.jpg"><br>
                        </a>
                    </center>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <i class="fa fa-linux" aria-hidden="true" title="Linux"></i>
                    <i class="fa fa-terminal" aria-hidden="true" title="Terminal"></i>
                    <i class="fa fa-server" aria-hidden="true" title="Server"></i>
                    <i class="fa fa-code" aria-hidden="true" title="Code"></i>
                    <i class="fa fa-coffee" aria-hidden="true" title="Coffe"></i>
                    <i class="fa fa-bug" aria-hidden="true" title="Bug"></i>
                    <i class="fa fa-laptop" aria-hidden="true" title="Laptop"></i>
                    <i class="fa fa-github" aria-hidden="true" title="Github"></i>
                    <i class="fa fa-telegram" aria-hidden="true" title="Telegram"></i>
                    <i class="fa fa-twitter" aria-hidden="true" title="Twitter"></i>
                    <i class="fa fa-quote-right" aria-hidden="true"></i>

                </div>
            </div>
        </header>

        <!-- Menü navbar start-->
        <section class="sub-page container">
            <nav class="nav">
                <ul>
                    <li><a href="<?php echo $settings;?>">BLOG</a></li>
                    <li><a href="<?php echo $settings;?>allposts">YAZILAR</a></li>
                    <li><a href="<?php echo $settings;?>about">KİMİM ?</a></li>
                    <li><a href="<?php echo $settings;?>projects">PROJELER</a></li>
                    <li><a href="<?php echo $settings;?>contact">İLETİŞİM</a></li>
                </ul>
            </nav>
        </section>
    <?php
    $id = $_GET['id'];              //.Htaccesten gelen id datası
    $seo_url = $_GET['seo_hood'];  // .Htasccesten gelen  seo_hood datası

        if (isset($_GET['id']))
        {                               //Seo için gerekli veritabanı sorgusu
                $query = @mysql_fetch_array(mysql_query("select * from articles  WHERE seo_hood='$seo_url' AND id='$id'"));

                $hood = $query ['hood'];
                $article = $query['article'];
                $tags = $query['tags'];
            
                echo "<title>".$hood."</title>";
                echo "<br><article class='article container'>";
                echo "<h3 align='center'> <a>$hood</a> </h3>";
                echo "<center> <div class='entry-content' id='info' align='center'><p class='noline'>$article</p></div></center>";


                     //ETİKET ALANI START
                        echo "<footer><ul  class='tags seven columns'>";
                                    $kelimeler = explode(',', $tags);//virgüle göre parçalandı.

                                    foreach ($kelimeler as $anahtar=>$deger)//ayrılan kelimeleri tek tek bir diziye atandı.
                                    {
                                        $dizi[$i]=$deger;//dizi
                                        $i++;            //dizi değeri arttırıldı
                                    }

                                    $yeni=$dizi;//yinelenen kelimeler geldi

                                    foreach ($yeni as $liste)//yeni kelimeler dizisini ekrana yazdırma
                                    {
                                        echo    "  <li><a href=etiket/$liste class='tag'>$liste</a></li>      ";
                                    }
                        echo "</ul></footer>";
                     //ETİKET ALANI FINISH
                ?>
                       <!--Disqus Yorum Penceresi Start-->
                            <div class='entry-content' id='info' align='center'>
                                <div id="disqus_thread"></div>
                                <script>
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                        var d = document, s = d.createElement('script');
                                        s.src = '//http-rootradmin-xyz.disqus.com/embed.js';
                                        s.setAttribute('data-timestamp', +new Date());
                                        (d.head || d.body).appendChild(s);
                                    })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            </div>
                      <!--Disqus Yorum Penceresi Finish-->
                </article>

            <?php
        }
    ?>

        <!--

                <section>
                    <nav role="navigation">
                        <ul class="pagination">
                            <li><a class="next" href="#0">&larr; next page</a></li>
                            <li><a class="prev" href="#0">prev page &rarr;</a></li>
                        </ul>
                    </nav>
                </section>

        -->
<hr>
<!-- Footer start-->
<footer>
    <div class="inner">
        <div class="container">
            <div class="copyright">
                <span class="sub">© Copyright 2015 <a href="#">root@radmin</a> - All Rights Reserved</span>
            </div>
            <nav class="languages" role="navigation">
                <ul>
                    <li><a href="#" class="active">EN</a></li>
                    <li><a href="#">TR</a></li>
                </ul>
            </nav>
            <a href="#0" class="backtotop">Top</a>
        </div>
    </div>
</footer>
<!-- Footer finish-->

<script src="js/scripts.js"></script>


