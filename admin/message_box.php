<?php/*** Created by PhpStorm.* User: radmin * Date: 20.12.2016 * Time: 01:23*/?>

<section class="container">

    <?php

    $query = mysql_query("SELECT COUNT(*) FROM contact"); //projects tablosundaki bütün alan sayısı

    $say = mysql_fetch_array($query);

    $sonuc = $say['0'] - 1;

    //Kaç yazı gösterilecek//
    for ($sayi = 0; $sayi <= $sonuc; $sayi++)
    {
        /**İD'ye değer atama start**/
        $say = "1";
        /**İD'ye değer atama finish**/

        $query = mysql_query("select * from contact order by id DESC limit $sayi,$say");
        if (mysql_num_rows($query))
        {
            while ($come = mysql_fetch_array($query))
            {
                $id = $come ['id'];
                $visitor = $come['visitor'];
                $email = $come ['email'];
                $message = $come['message'];
            }
        }

        ?>
        <article class="container" style="background-color: #0f74a8 ">
            <form name="from1" method="post" enctype="multipart/form-data">
                <h4><?php echo $visitor ?> </h4>
                <input type="submit" name="delete_message" value="Mesajı Sil">
                <input type="hidden" name="come_id" value="<?php echo $id ?>">
                <table>
                    <tr>
                        <h5><?php echo $email ?></h5>
                    </tr>
                    <tr>
                        <td><?php echo $message ?></td>
                    </tr>
                </table>
            </form>
        </article>
        <br><br>

        <?php
    }

    //idye göre silme işlemi
    $come_id = mysql_real_escape_string($_POST['come_id']);
    $delete_message = mysql_real_escape_string($_POST['delete_message']);
    if ($delete_message)
    {
        $sql = mysql_query("delete from contact where id=$come_id");
        echo "<H4>Mesaj Silindi..</H4>";

    }

    ?>

</section>