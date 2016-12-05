<?php /*Created by PhpStorm.* User: radmin * Date: 27.10.2016* Time: 14:31*/?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> root@radmin | About</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://use.fontawesome.com/a6cd1fed07.js"></script>


<section class="container">



    <p align="center"> Hayatımın büyük bir bölümünü yukarıda gördüğünüz iconlar ile özetlemeye çalıştım. </p><h5 align="center">Kimim ? Sorusuna gelince ;</h5>
      <p align="center">
          Şuanda Ordu Üniversitesinde 2.sınıf Programcılık Okuyan ,Özgür Yazılıma ve Açık kaynağa merakımdan dolayı bir şeylerle
          uğraşmayı (bozup söve söve düzeltmeye çalışmayı :D) seven ,Genelde 'PHP' yazmayı, framework olarak 'Laravel'i tercih eden
          ,LINUX'un 'Ubuntu' ve diğer dağıtımlarını kurcalayan biriyim.

      </p>





        <div class="container" align="center" style="color:#C00C17">
                <h2> Neler Yapıyorum ?</h2><hr>
        </div>
        <div class="container">
            <div class="Subscript" align="center">

                <span><i class="fa fa-check" aria-hidden="true"></i> Git ve Github Kullanıyorum.<i class="fa fa-github" aria-hidden="true"></i></span><br><br>

                <span><i class="fa fa-check" aria-hidden="true"></i> Kod Yazmayı Seviyorum.<i class="fa fa-code" aria-hidden="true"></i></span><br><br>

                <span><i class="fa fa-check" aria-hidden="true"></i> Linux Dağıtımları Kullanıyorum.<i class="fa fa-linux" aria-hidden="true"></i></span><br><br>

                <span><i class="fa fa-check" aria-hidden="true"></i> Kahvesiz Yapamıyorum.<i class="fa fa-coffee" aria-hidden="true"></i></span><br><br>

                <span><i class="fa fa-check" aria-hidden="true"></i> Uyumuyorum.</span><br><br>

                <span><i class="fa fa-check" aria-hidden="true"></i> Müzik Dinlemeyi Seviyorum.<i class="fa fa-music" aria-hidden="true"></i></span><br><br>

                <span><i class="fa fa-check" aria-hidden="true"></i> Telegram Kullanıyorum.<i class="fa fa-telegram" aria-hidden="true"></i></span><br><br>



            </div>
        </div>



        <!--
        <div class="row">
            <div class="six columns">
                <h6>DISCIPLINES ----</h6>
            </div>
            <div class="six columns">
                <ul>
                    <li><i>Branding & Identity</i></li>
                    <li><i>Brand Strategy</i></li>
                    <li><i>Typography</i></li>
                    <li><i>Concept Work & Development</i></li>
                    <li><i>Graphic Communication</i></li>
                    <li><i>Photography</i></li>
                </ul>
            </div>
        </div>

        -->


</section>




<script src="js/scripts.js"></script>

<script>

    $('article #info').readmore({
        speed: 600,
        moreLink: '<a class="button-text" href="#">Read More <span>&darr;</span></a>',
        lessLink: '<a class="button-text" href="#">Read Less <span>&uarr;</span></a>',
        collapsedHeight: 120,
        heightMargin: 20,
        afterToggle: function(trigger, element, expanded) {
            if(! expanded) { // The "Close" link was clicked
                $('html, body').animate({scrollTop: element.offset().top}, {duration: 300});
            }
        }
    });

</script>