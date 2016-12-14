
<meta charset="utf-8">
    <?php

        $query = mysql_query("select * from articles WHERE id='$gelen'");

        while ($come = mysql_fetch_assoc($query))
        {
            $id = $come['id'];
            $hood = $come['hood'];
            $article = $come['article'];
            $subject = $come['subject'];
            $tags = $come['tags'];
        }
    ?>


    <center>
        <form action="" method="post" enctype="multipart/form-data">
            <!--ARTICLES UPLOAD START -->
            <input  name="uphood" class="twelve columns" type="text" placeholder="Başlık Yazınız" value="<?php echo $hood;?>">
            <br>
            <br>
            <textarea name="uparticle" class="ckeditor"  cols="30" rows="10"><?php echo $article?></textarea>
            <br>
            <input  name="upsubject" class="twelve columns" type="text" placeholder="Konu Yazınız" value="<?php echo $subject;?>">
            <br>
            <input  style="color:Red;" name="uptags" class="twelve columns" type="text"  value="<?php echo $tags;?>"placeholder="Etiket Ekle (örğn: php,java,jquery)">
            <br><br>
            <input type="submit" name="upupload"  value="Güncelle" class="btn btn-primary" style="border-color: black;color: black"><br><br>
            <!--ARTICLES UPLOAD START -->
        </form>
    </center>


<?php


$upseo_url = seo($uphood);
$uphood = mysql_real_escape_string($_POST['uphood']);
$uparticle = mysql_real_escape_string($_POST['uparticle']);
$upsubject =mysql_real_escape_string($_POST['upsubject']);
$uptags = mysql_real_escape_string($_POST['uptags']);
$button = mysql_real_escape_string($_POST['upupdate']);


    $up = mysql_query("update articles set seo_hood='$upseo_url',hood='$uphood',article='$uparticle',users='$user',subject='$upsubject',tags='$uptags',status=1   where id='$gelen' ");

    echo "<h1>KAYIT GÜNCELLENDİ !</h1>";




?>