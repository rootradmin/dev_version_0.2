<?php/*** Created by PhpStorm.* User: radmin * Date: 13.12.2016* Time: 01:18 */?>
<?php
error_reporting(0);
require "connect.php";
require "settings.php";
?>



<section class="main container">
                    <!-- İçerik Yazısı 1 başladı -->
                    <?php
                        //Kaç yazı gösterilecek//
                        for ($number = 0; $number <= 3; $number++)
                        {       /**İD'ye değer atama start**/
                            $num = "1";
                            /**İD'ye değer atama finish**/
                            $query = mysql_query("select * from articles WHERE status=1 AND  order by id DESC limit $number,$num"); //durumu 1 olanları göster
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

                                <div class="entry-content" id="info" align="center">
                                    <header>
                                        <div class="meta-data">
                                            <h3><a href="<?=seo($seo_url).'-'.$id;?>.html"><?php echo $hood; ?></a></h3>
                                            <!-- <p class="author">
                                                                                        <time datetime="2015-08-07"><?php echo $date; ?></time>
                                                                                    </p> --> <!--DATE View-->
                                            <div class="socbtn"></div>
                                        </div>
                                    </header>
                                    <p><?php echo $article;?></p>
                                </div>
                            </article>
                            <?php
                        }
                    ?>       <!-- İçerik Yazısı 1 bitti -->
</section>







