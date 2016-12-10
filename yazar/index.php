<?php/** * Created by PhpStorm.* User: radmin * Date: 30.11.2016* Time: 19:18 */?>
<?php
error_reporting(0);
header('Content-Type: text/html; charset=utf-8');
require "../connect.php";
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/styles.css">
<link rel="shortcut icon" href="../img/anka.jpg"/>
<script src="https://use.fontawesome.com/a6cd1fed07.js"></script>
    <body style="background-color: #ca500a">

        <div class="row container" align="center" style="background-color: #ca500a">
<br>
            <div class="header">
                <div class="container">
                    <div class="logo" align="center">
                        <i class="fa fa-user-o fa-5x" aria-hidden="true"></i>
                        <br>
                    </div>
                </div>
            </div>



            <form name="form1" action="login.php" method="post" enctype="multipart/form-data">

                <div class="col-xs-12">
                    <input class="form-control"  name="user" type="text" placeholder="Username">
                </div>
                <br>
                <div class="col-xs-12">
                    <input class="form-control" type="password"  name="pass" placeholder="Password">
                </div>
                <br>
                <div class="col-xs-12">
                    <input type="submit"  name="go" class="form-control" value="Giriş Yap" style="color: white">
                </div>
            </form>
        </div>


    </body>





