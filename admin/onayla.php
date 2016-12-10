<?php/** * Created by PhpStorm.* User: radmin* Date: 9.12.2016* Time: 23:59 */?>

    <?php

    $sql = mysql_query("select * from articles where status=0"); //Onay bekleyen yazıları(durumu 0) olanları göster

        while ($come = mysql_fetch_assoc($sql)) {

            $id = $come['id'];
            $head = $come ['hood'];
            $write = $come['article'] . "<br>";
            $idm = $_POST['idm'];
            ?>

            <div align="center" style="background-color:darkgray ">
                <form method="post">
                    <h5>
                        <?php echo $head;   ?><br>
                        <input type="submit" name="onayla" value="onayla" style="background-color: #354975;color: whitesmoke">
                        <input type="submit" name="reddet" value="reddet" style="background-color: #75152f;color:whitesmoke;">
                        <input type="hidden" name="idm" value="<?php echo $id ?>">
                    </h5>
                    <p><?php echo $write ?></p>
                </form>
            </div>
            <?php
        }

        if ($_POST['reddet']){
            $query = mysql_query("delete from articles where id=$idm");
            echo "<h1>SİLİNDİ</h1>";

        }elseif ($_POST['onayla']){
            $sqlsorgu = mysql_query("update articles SET status=1 where id=$idm");
            echo "<H1>ONAYLANDI</H1>";
        }
    ?>
