<?php/** * Created by PhpStorm.* User: radmin * Date: 26.11.2016 * Time: 01:16*/?>

                                            <title>root@radmin | All Posts</title>
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
<link rel="stylesheet"  type="text/css" href="<?php echo $settings;?>css/styles.css">
<link rel="shortcut icon" href="./favicon.ico"/>
<script src="https://use.fontawesome.com/a6cd1fed07.js"></script>  <!--İcons code-->

        <section class="container">

            <?php

                $query = mysql_query("SELECT COUNT(*) FROM articles"); //projects tablosundaki bütün alan sayısı

                $say = mysql_fetch_array($query);

                $sonuc = $say['0'] - 1;

                    //Kaç yazı gösterilecek//
                    for ($sayi = 0; $sayi <= $sonuc; $sayi++)
                    {
                        /**İD'ye değer atama start**/
                        $say = "1";
                        /**İD'ye değer atama finish**/

                        $query = mysql_query("select * from articles order by id DESC limit $sayi,$say");
                        if (mysql_num_rows($query)) {
                            while ($come = mysql_fetch_array($query)) {
                                $id = $come ['id'];
                                $seo_url = $come['seo_hood'];
                                $hood = $come ['hood'];
                            }
                        }
                        ?>
                            <article class="container">
                                   <h5>
                                       <p>
                                           <i class="fa fa-share" aria-hidden="true">

                                               <a class="noline" href="<?=seo($seo_url).'-'.$id;?>.html"><?php echo $hood; ?></a>

                                          </i>
                                       </p>
                                   </h5>
                            </article>
                        <?php
                    }
            ?>       <!-- İçerik Yazısı 1 bitti -->
        </section>
