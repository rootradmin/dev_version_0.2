<?php/** * Created by PhpStorm.* User: radmin* Date: 1.12.2016 * Time: 22:41*/?>
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
<link rel="stylesheet" href="css/styles.css">
<link rel="shortcut icon" href="img/anka.jpg"/>
<!--CKEditor codesnipper plugin colors start-->
<link rel="stylesheet" href="ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css">
<script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js" type="text/javascript"></script>
<script>hljs.initHighlightingOnLoad();</script>
<!--CKEditor codesnipper plugini colors finish-->
<script src="js/scripts.js"></script>
<script src="https://use.fontawesome.com/a6cd1fed07.js"></script>


        <?php
        $aranan = $_POST ['search'];

        $query = mysql_query("select * FROM  articles where hood LIKE '%$aranan%'  AND UPPER (hood)LIKE '%$aranan%' ");

        $number = mysql_num_rows($query);

        if ($number ==0){

            echo "<h1 align='center'><i class='fa fa-cogs fa-2x' aria-hidden='true'></i> Aranılan kelime ile ilgili bilgi bulunamadı !</h1>";

        }else{

            if ($aranan=="")
            {
                echo "<h1 align='center'>Boş Arama Yaptınız ,Alanı Doldurunuz !</h1>";

            }else{
                ?>
                <div class="container">
                    <h5 align="left"> <a><?php echo $number; ?></a> Sonuç Bulundu ! </h5>
                </div>

                <?php

                while ($come = mysql_fetch_array($query))
                {
                    $id = $come ['id'];
                    $seo_url = $come['seo_hood'];
                    $hood = $come ['hood'];
                    $article = $come ['article'];
                    ?>
                    <section class="main container">

                        <article class="article">
                            <header>
                                <div class="meta-data">

                                    <h3><a href="<?=seo($seo_url).'-'.$id;?>.html"><?php echo $hood; ?></a></h3>


                                    <div class="entry-content" id="info" align="center">
                                        <p><?php echo $article; ?></p>
                                    </div>
                                </div>
                            </header>
                        </article>
                    </section>
                    <?php

                }
            }

        }




        ?>



