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

              require "update.php";

        }else if ($_GET["selection"]=="makale_edit") // makale edite basıldıysa burayı göster
        {

            $query = mysql_query("select * from articles WHERE hood=hood");

            while ($come = mysql_fetch_assoc($query)) {
                $id = $come['id'];
                $hood = $come['hood'];
                $article = $come['article'];
                ?>
                <section class="main container">
                    <article class="article">
                        <div class="entry-content" id="info" align="center">
                            <header>
                                <div class="meta-data">
                                    <h3><?php echo $hood; ?></h3>
                                    <form method='post'>
                                        <input type='submit' value='Sil' name='delete'>
                                        <input type='submit' value='Güncelle' name='update'>
                                        <input type='hidden' value='<?php echo $id; ?>' name='gelen'>
                                    </form>
                                </div>
                            </header>
                            <p><?php echo $article; ?></p>
                        </div>
                    </article>
                </section>
                <?php
            }
        }
    ?>