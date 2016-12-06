<script src="https://use.fontawesome.com/a6cd1fed07.js"></script>

<?php
//ErsaT
//Mysql bağlantı
$bagla = mysql_connect('localhost', 'bahadirb_dev', 'Radmin-x2');
mysql_select_db('bahadirb_dev');

function sayac(){
    global $bagla;
    $ip = $_SERVER['REMOTE_ADDR'];
    $tarih = time();
    $zamanasimi = time()-40000000000000000000000000;
    //1 günlük zamanaşımına uğrayan ip leri sil
    mysql_query("Delete From ip_tablom where zaman < ".$zamanasimi);

    $sonuc = mysql_query("Select Count(ip) From ip_tablom where ip='$ip'");
    $sayi = mysql_result($sonuc,0);

    if($sayi ==0){
        mysql_query("Insert Into ip_tablom (ip, zaman) Values ('$ip', '$tarih')");
        mysql_query("Update sayac_tablom Set tekil_hit=(tekil_hit+1), cogul_hit=(cogul_hit+1) where id=1");
    }else{
        mysql_query("Update sayac_tablom Set cogul_hit=(cogul_hit+1) where id=1");
    }

    $sonuc2 = mysql_query("Select tekil_hit, cogul_hit From sayac_tablom where id=1");
    $satir = mysql_fetch_array($sonuc2);
    echo '<i class="fa fa-eye" aria-hidden="true"></i> : <strong>'.$satir['tekil_hit'].'</strong> ';
    echo '<i class="fa fa-eye" aria-hidden="true"></i> : <strong>'.$satir['cogul_hit'].'</strong><br>';
    mysql_close($bagla);
}
?>

<?php sayac(); ?>