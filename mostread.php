<?php/*** Created by PhpStorm.* User: radmin * Date: 13.12.2016* Time: 01:18 */?>
<?php
error_reporting(0);
require "connect.php";
require "settings.php";
?>
<title>root@radmin | Most read</title>
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



    <?php

    $query = mysql_query("SELECT Max(counter) AS counter FROM articles"); //en çok opkunanın okunma durumunu al
    $row = mysql_fetch_assoc($query);
    $a =    $row['counter'];



    $query2 = mysql_query("SELECT * FROM articles where counter = '$a' "); //en çok okunanın bilgilerini listeler

    while ($cek=mysql_fetch_assoc($query2)){

        $hood =$cek['hood'];
        $article =$cek['article'];
        $counter = $cek['counter'];
        $user = $cek['users'];
        $tags = $cek['tags'];
        $id = $cek['id'];
        mysql_query("Update articles Set counter =(counter+1) where id='$id'");
        echo "<br><article class='article container'>";
        echo "<h3 align='center'> <a>".$cek['hood']."</a> </h3>";
        echo "<center><i class='fa fa-eye' aria-hidden='true' style='margin-right: 15px'>:".$counter."</i>";
        echo "<i class='fa fa-pencil-square-o' aria-hidden='true'>".$user."</i></center>";
        echo "<center> <div class='entry-content' id='info' align='center'><p class='noline'>$article</p></div></center>";
    }

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














