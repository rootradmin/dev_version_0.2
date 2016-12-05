<?php /* Created by PhpStorm. * User: radmin * Date: 21.10.2016 * Time: 23:08*/?>

<?php
error_reporting(0);
@header('Content-Type: text/html; charset=utf-8');

$host="127.0.0.1" ;      //host name(**)
$veritani="personal";         //oluşturduğumuz veritabanı adıdır.
$kullanici ="root";      //kullanıcı adı(**)
$sifre="";               //şifre(**)

$baglan = @mysql_connect($host,$kullanici,$sifre)  or die("Veritabanı Seçilemedi")  ;//veritabanına bağlanmayı sağlar(**)
$baglan2 = @mysql_select_db($veritani, $baglan) or die ("Bağlanamadı");  //mysql veritabanını seç (*)

?>
