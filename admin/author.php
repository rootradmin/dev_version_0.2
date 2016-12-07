<?php/** * Created by PhpStorm. * User: radmin * Date: 7.12.2016* Time: 22:55 */?>
<meta charset="utf-8">

<!--Yazar EKLE && Ekli Yazarlara yetki ver START-->
    <section class="container">
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="twelve columns" align="center">
                    <div class="six columns" align="center" style="background-color: #D5D3D3;">
                        <h2>Yazar Ekle</h2>
                        <?php
                        $auname= mysql_real_escape_string($_POST['author_user_name']);
                        $authorpass= mysql_real_escape_string($_POST['author_pass']);
                        $aname= mysql_real_escape_string($_POST['author_name']);
                        $asname= mysql_real_escape_string($_POST['author_surname']);
                        $amail= mysql_real_escape_string($_POST['author_mail']);
                        $a_add= mysql_real_escape_string($_POST['author_add']);
                        $apass= md5($authorpass);

                        if ($a_add)
                        {
                            if ($auname=='' || $authorpass=='' || $aname=='' || $asname=='' || $amail =='')
                            {
                                echo "Boş Alan Bıraktınız !";
                            }else{
                                $query =mysql_query("insert into writer (author_user_name,a_pass,author_name,author_surname,mail) VALUES ('$auname','$apass','$aname','$asname','$amail')");
                                 echo "Yazar Eklendi !";
                            }
                        }
                        ?>
                        <form name="frmm" method="post" enctype="multipart/form-data" >
                            <input  name="author_user_name" class="ten columns" type="text" placeholder="USERNAME">
                            <input  name="author_pass" class="ten columns" type="password" placeholder="PASSWORD">
                            <input  name="author_name" class="ten columns" type="text" placeholder="NAME">
                            <input  name="author_surname" class="ten columns" type="text" placeholder="SURNAME">
                            <input  name="author_mail" class="ten columns" type="email" placeholder="E-MAİL">
                            <input type="submit" name="author_add"  value="Yazar Kaydet" class="ten columns  btn btn-primary" style="border-color: black;color:black;margin-top:20px;margin-bottom: 10px">
                        </form>
                    </div>
                   <?php if ($_POST['update'])
                    {
                    ?>
                    <div class="six columns" style="background-color: #D5D3D3">

                        <?php

                        $yad= mysql_real_escape_string($_POST['yad']);

                        $ga_add= mysql_real_escape_string($_POST['guncel']);


                        if ($ga_add)
                        {
                             $query =mysql_query("update writer set author_user_name='$yad' WHERE author_user_name='d' ");
                             echo "güncellend";
                             echo $query;
                        }

                        ?>


                        <form method="post" name="frmnjd" enctype="multipart/form-data">
                            <h1> <span>Root</span> Kişisini Güncelle</h1>
                            <input  name="yad" class="ten columns" type="text" placeholder="yeni kul ad">
                            <input  name="gpass" class="ten columns" type="password" placeholder="şifre">
                            <input  name="gname" class="ten columns" type="text" placeholder="ad">
                            <input  name="gsurname" class="ten columns" type="text" placeholder="soyad">
                            <input  name="gmail" class="ten columns" type="email" placeholder="mail">
                            <input type="submit" name="guncel"  value="Yazarı Güncelle" class="ten columns  btn btn-primary" style="border-color: black;color:black;margin-top:20px;margin-bottom: 10px">
                        </form>
                    </div>
                    <?php
                    }

                    ?>

                    <div class="twelve columns" align="center" style="background-color: darkgray">
                        <h2>Yazarlar</h2>
                        <?php
                        $query = mysql_query("SELECT COUNT(*) FROM writer"); //writer tablosundaki bütün alan sayısı
                        $say = mysql_fetch_array($query);
                        $sonuc = $say['0'] - 1;

                        for ($number = 0; $number <= $sonuc; $number++)
                        {
                            $num = 1 ;
                            $query = mysql_query("select * from writer order by id ASC limit $number,$num"); //Tüm kayıtları gösterecek sorgu
                            while ($come = mysql_fetch_assoc($query))
                            {
                                $authors = $come['author_user_name'];

                                echo "<div class='ten columns' align='left'>";
                                echo "<h2>".$authors;
                                echo " <input type='submit' name='delete' value='sil'>";
                                echo "<input type='submit' name='update' value='güncelle'></h2></div>";
                            }
                        }

                        ?>
                    </div>
                </div>
            </form>
        </div>
    </section>
<!--Yazar EKLE && Ekli Yazarlara yetki ver FINISH-->



