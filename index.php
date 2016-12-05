<?php/* Created by PhpStorm. * User: radmin * Date: 23.10.2016* Time: 23:11*/?>
<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
require "connect.php";
require "settings.php";
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo $settins ;?>css/styles.css">
    <link rel="shortcut icon" href="img/anka.jpg"/>
    <!--CKEditor codesnipper plugin colors start-->
    <link rel="stylesheet" href="ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css">
    <script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js" type="text/javascript"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <!--CKEditor codesnipper plugini colors finish-->
    <script src="js/scripts.js"></script>
    <script src="https://use.fontawesome.com/a6cd1fed07.js"></script>

            <section class="top-bar">
                <div class="container">
                    <div class="row">
                        <!--social media start-->
                        <div class="box box-1">
                            <div class="socials">
                                <ul>
                                    <li><a href="mailto:gelistiricitim@gmail.com"><i class="fa fa-envelope"> </i>   </a></li>
                                    <li><a href="https://www.facebook.com/gelistiricitim/"> <i class="fa fa-facebook-official"> </i>  </a></li>
                                    <li><a href="https://twitter.com/rootradmin"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="https://github.com/rootradmin"><i class="fa fa-github-square"></i></a></li>
                                    <li><a href="https://telegram.me/joinchat/Dt4UD0B4zAK6ospQDWAlRQ"><i class="fa fa-telegram"> </i>   </a></li>
                                </ul>
                            </div>
                        </div>
                        <!--social media finish-->

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

            <!--profil imeges vs start-->
            <header class="header">
                <div class="container">
                    <!--profil resmi ve altındaki icons query start-->
                    <div class="logo">
                        <!-- index profil image query start-->
                        <center>
                            <a href="<?php echo $settings?>">
                                <img src="img/anka.jpg"><br>
                            </a>
                        </center>
                        <!-- index profil image query finish-->
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
                    <!--profil resmi ve altındaki icons query finish-->
                </div>
            </header>
            <!--profil imeges vs finish-->

            <!-- Menü navbar start-->
            <section class="sub-page container">
                <nav class="nav">
                    <ul>
                        <li><a href="<?php echo $settings;?>">BLOG</a></li>
                        <li><a href="<?php echo $settings;?>allposts">YAZILAR</a></li>
                        <li><a href="<?php echo $settings;?>projects">PROJELER</a></li>
                        <li><a href="<?php echo $settings;?>about">KİMİM ?</a></li>
                        <li><a href="<?php echo $settings;?>contact">İLETİŞİM</a></li>

                    </ul>
                </nav>
            </section>
            <!--Menü navbar finish-->

    <?php
         //Seo harf dönüşümü için function
        function seo($s) {
            $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','?','!','+');
            $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','','','');
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

        $pages = $_GET ['pages'];

        if ( $pages == '' || $pages == $settings || $pages =='index') {
            ?>
            <title>root@radmin | Welcome</title>
                <section class="main container">
                    <!-- İçerik Yazısı 1 başladı -->
                    <?php
                        //Kaç yazı gösterilecek//
                        for ($number = 0; $number <= 3; $number++)
                        {
                                /**İD'ye değer atama start**/
                                $num = "1";
                                /**İD'ye değer atama finish**/

                                $query = mysql_query("select * from articles order by id DESC limit $number,$num");
                                if (mysql_num_rows($query)) {
                                    while ($come = mysql_fetch_array($query)) {
                                        $id = $come ['id'];
                                        $seo_url = $come['seo_hood'];
                                        $hood = $come ['hood'];
                                        /*      $date = $cektik ['date'];  */ //**Date Query**//
                                        $article = $come ['article'];
                                    }
                                }
                                ?>
                                <article class="article">
                                    <header>
                                        <div class="meta-data">
                                            <h3><a href="<?=seo($seo_url).'-'.$id;?>.html"><?php echo $hood; ?></a></h3>
                                            <!-- <p class="author">
                                                                                        <time datetime="2015-08-07"><?php echo $date; ?></time>
                                                                                    </p> --> <!--DATE View-->
                                            <div class="socbtn"></div>
                                        </div>
                                    </header>

                                    <div class="entry-content" id="info" align="center">
                                        <p><?php echo $article;?></p>
                                    </div>

                                </article>
                            <?php
                        }
                    ?>       <!-- İçerik Yazısı 1 bitti -->

                </section>
            <?php
        }

        else if ($pages == "allposts"){ require "allposts.php";}
        else if ($pages == "about"){ require "about.php";}
        else if ($pages == "projects") {require "projects.php";}
        else if ($pages == "contact"){ require "contact.php";}
        else if ($pages == "search"){ require "search.php";}
    else{echo   "<h1 align='center'><i class='fa fa-times fa-lg' aria-hidden='true'></i>HATA </h1>";}
    ?>

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

    <!--read more-less start-->
    <script>

    $('.article #info').readmore({
        speed: 1200,
        moreLink: '<a class="button-text" href="#">Read More <span>&darr;</span></a>',
        lessLink: '<a class="button-text" href="#">Read Less <span>&uarr;</span></a>',
        collapsedHeight: 250,
        heightMargin: 20,
        afterToggle: function(trigger, element, expanded) {
            if(! expanded) { // The "Close" link was clicked
                $('html, body').animate({scrollTop: element.offset().top}, {duration: 300});
            }
        }
    });
</script>
    <!--read more-less finish-->
