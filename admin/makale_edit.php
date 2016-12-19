
<?php

        $delete = $_POST['delete'];
        $update = $_POST['update'];
        $gelen = $_POST['gelen'];

            if ($delete) //sile basıldıysa ilgili makaleyi sil
            {
                    $del = mysql_query("delete from articles where id='$gelen'");
                    echo "<h1>Makale Başarıyla Silindi !</h1>";

            }else if ($update) //güncelleye basıldıysa güncelleme işlemin yap
            {

                    $uphood = $_POST['uphood'];
                    $uparticle = $_POST['uparticle'];
                    $upsubject = $_POST['upsubject'];
                    $tags = $_POST['uptags'];
                    $users = $_POST['users'];
                    $upseo_url = seo($uphood);

                    //idye göre data update etme
                    $sql = mysql_query("UPDATE articles SET seo_hood='$upseo_url',hood='$uphood',article='$uparticle',users='$user',subject='$upsubject',tags='$tags',status=1 where id=$gelen ");

                    echo "Makale Başarıyle Güncellendi";

            }else if ($_GET["selection"]=="makale_edit") // makale edite basıldıysa burayı göster
            {

                    $query = mysql_query("select * from articles WHERE hood=hood");
                    $query_two = mysql_num_rows($query);
                    if ($query_two = 1)
                    {

                            while ($come = mysql_fetch_assoc($query)) {
                                $id = $come['id'];
                                $hood = $come['hood'];
                                $article = $come['article'];
                                $subject = $come['subject'];
                                $tags = $come['tags'];
                                ?>


                                    <center>
                                        <form method="post" enctype="multipart/form-data">
                                            <!--ARTICLES UPLOAD START -->
                                            <input name="uphood" class="twelve columns" type="text"
                                                   placeholder="Başlık Yazınız" value="<?php echo $hood ?>">
                                            <br>
                                            <br>
                                            <textarea name="uparticle" class="ckeditor" cols="30"
                                                      rows="10"><?php echo $article; ?></textarea>
                                            <br>
                                            <input name="upsubject" class="twelve columns"
                                                   value="<?php echo $subject ?>" type="text"
                                                   placeholder="Konu Yazınız">
                                            <br>
                                            <input style="color:Red;" name="uptags" value="<?php echo $tags ?>"
                                                   class="twelve columns" type="text"
                                                   placeholder="Etiket Ekle (örğn: php,java,jquery)">
                                            <br>
                                            <!--ARTICLES UPLOAD START -->
                                            <br>
                                            <input type='submit' value='Güncelle' name='update'>
                                            <input type='submit' value='Sil' name='delete'>
                                            <input type='hidden' value='<?php echo $id; ?>' name='gelen'>
                                        </form>
                                    </center>
                                <?php
                            }
                    }else{
                        echo        "Düzenlenecek Makale Henüz Bulunmuyor...";
                    }
            }
    ?>