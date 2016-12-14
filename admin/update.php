
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
            <input  name="hood" class="twelve columns" type="text" placeholder="Başlık Yazınız" value="<?php echo $hood;?>">
            <br>
            <br>
            <textarea name="article" class="ckeditor"  cols="30" rows="10"><?php echo $article?></textarea>
            <br>
            <input  name="subject" class="twelve columns" type="text" placeholder="Konu Yazınız" value="<?php echo $subject;?>">
            <br>
            <input  style="color:Red;" name="tags" class="twelve columns" type="text"  value="<?php echo $tags;?>"placeholder="Etiket Ekle (örğn: php,java,jquery)">
            <br><br>
            <input type="submit" name="upload"  value="Güncelle" class="btn btn-primary" style="border-color: black;color: black"><br><br>
            <!--ARTICLES UPLOAD START -->
        </form>
    </center>
