<?php/** * Created by PhpStorm. * User: radmin * Date: 7.12.2016* Time: 22:55 */?>
<meta charset="utf-8">

<!--Yazar EKLE && Ekli Yazarlara yetki ver START-->
    <section class="container">
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="twelve columns" align="center">
                    <!--YAZAR EKLEME ALANI START-->
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
                    <!--YAZAR EKLEME ALANI FINISH-->


                   <?php
                       //update postları start
                           $newusername  = mysql_real_escape_string($_POST['newusername']);
                           $newpa = mysql_real_escape_string($_POST['newpass']);
                           //md5 ile şifremizi koruyoruz
                           $newpass = md5($newpa);

                           $newname = mysql_real_escape_string($_POST['newname']);
                           $newsurname = mysql_real_escape_string($_POST['newsurname']);
                           $newmail  = mysql_real_escape_string($_POST['newmail']);
                       //update postları finish
                        $save = mysql_real_escape_string($_POST['save']);
                        $hiddehid =mysql_real_escape_string($_POST['hiddehid']);
                        $id  = mysql_real_escape_string($_POST['id']);

                       if ($_POST['delete']) //SİL BUTONUNA BASILDIĞINDA İD'Sİ GELEN DEĞERİ SİL
                        {
                          $sql = mysql_query("Delete from writer WHERE id='$id'"); // sil sorugusu
                        }else if ($_POST['update']){
                        ?>

                        <div class="six columns" align="center" style="background-color: darkgray;">
                            <h2>Yazar Güncelle</h2>
                               <form method="post">
                                   <input type="hidden">
                                   <input  name="newusername" type="text"     class="ten columns"  placeholder="NEW USERNAME">
                                   <input  name="newpass"     type="password" class="ten columns"  placeholder="NEW PASSWORD">
                                   <input  name="newname"     type="text"     class="ten columns"  placeholder=" NEW NAME">
                                   <input  name="newsurname"  type="text"     class="ten columns"  placeholder="NEW SURNAME">
                                   <input  name="newmail"     type="email"    class="ten columns"  placeholder="NEW E-MAİL">

                                   <input type="submit"  name="save" value="Güncellemeyi kaydet" class="ten columns  btn btn-primary" style="border-color: black;color:black;margin-top:20px; margin-bottom: 10px">

                                   <!--İd değerini if ile kullanmak-->
                                        <input type="hidden" name="hiddehid" value="<?php echo $id;?>">
                                   <!--İd değerini if ile kullanmak-->

                               </form>

                        </div><br>
                           <?php
                        }
                        if ($save){ //save-"güncellemeyi kaydet butonu"a basıldıyda
                            //güncellenecek alanlar
                           $sorgu = mysql_query("UPDATE writer SET author_user_name='$newusername',a_pass='$newpass',author_name='$newname',author_surname='$newsurname',mail='$newmail'  WHERE id='$hiddehid'");
                           echo "<h1 style='background-color: darkgray'>Güncellendi</h1>";

                        }
                   ?>





                    <div class="twelve columns" align="center" style="background-color: darkgray">
                        <h2>Yazarlar</h2>
                        <?php
                        $query = mysql_query("SELECT COUNT(*) FROM writer"); //writer tablosundaki bütün alan sayısı
                        $say = mysql_fetch_array($query);
                        $sonuc = $say['0'] - 1;

                        for ($number = 0; $number <= $sonuc; $number++) {
                            $num = 1;
                            $query = mysql_query("select * from writer order by id ASC limit $number,$num"); //Tüm kayıtları gösterecek sorgu
                            while ($come = mysql_fetch_assoc($query)) {
                                $authors = $come['author_user_name'];
                                $id = $come ['id'];
                                echo "<form method='post'><div class='ten columns' align='left'>";
                                echo "<h2>" . $authors;
                                echo "<input type='hidden' name='id' value='$id'>";
                                echo " <input type='submit' name='delete' value='SİL'>";
                                echo "<input type='submit' name='update' value='GÜNCELLE'></h2></div></form>";

                            }

                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </section>
<!--Yazar EKLE && Ekli Yazarlara yetki ver FINISH-->



