<?php

$page=isset($_GET['page'])?$_GET['page']:'aloitus'


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fontit -->
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <!-- Tyylit -->
        <!-- Bootsrtap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- .css -->
        <link rel="stylesheet" href="style.css">
        

    <!-- Title ------------------------------------------------------------------>
    <title>Uppi Palvelu</title>


</head>
<body>



<!-- Poista ulos kommentoinnit diveistä joita haluat käyttää! -------------------->


    <!-- Header ------------------------------------------------------------------>
    <header>Uppi Palvelu</header>



    <!-- Navigaatio -------------------------------------------------------------->

    <?php 
    if($page=="aloitus"){
        include ("navigation.php");
    }
    if($page=="login"){
        include ("navigation.php");
    }
    if($page=="galleria"){
        include ("navigation.php");
    } 
    if($page=="upload"){
        include ("navigation.php");
    }
    if($page=="login_index"){
        include ("navigation2.php");
    }
    if($page=="omat_kuvat"){
        include ("navigation2.php");
    }
    if($page=="omat_tiedot"){
        include ("navigation2.php");
    }
    ?>

<!--
    <nav>
    <ul id="navigaatio">
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo "?page=aloitus"; ?>">Etusivu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo "?page=upload"; ?>">IMG upload</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo "?page=galleria"; ?>">Julkiset kuvat</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo "?page=login"; ?>">Kirjautuminen</a>
        </li>
    </ul>
    </nav>
-->

    <!-- Nappit ------------------------------------------------------------------>

<!--
    <div id="napit">
        <button type="button" class="btn btn-primary">Nappi</button>
        <button type="button" class="btn btn-primary">Nappi</button>
    </div>
    -->



    <!-- Pieni "Huom" Div -------------------------------------------------------->


    

<!--
    <div id="huomautus" class="alert alert-danger" role="alert">
    </div>
-->




    <!-- 95% Leveä Div ------------------------------------------------------------>


    <div id="leveaDiv" class="container-fluid">
        <?php

            if($page=="aloitus"){
                include("aloitus.php");
            }
            if($page=="upload"){
                include("upload.php");
            }
            if($page=="galleria"){
                include("galleria.php");
            }
            if($page=="login"){
                include("login.php");
            }
            if($page=="upload_kasittelija"){
                include("upload_kasittelija.php");
            }
            if($page=="testi") {
                include("testi.php");
            }
            if($page=="login_kasittelija") {
                include("login_kasittelija.php");
            }
            if($page=="login_index") {
                include("login_index.php");
                
            }
            if($page=="logout") {
                include("logout.php");
            }
            if($page=="logout_kasittelija") {
                include("logout_kasittelija.php");
            }
            if($page=="omat_kuvat") {
                include("omat_kuvat.php");
            }
            if($page=="omat_tiedot") {
                include("omat_tiedot.php");
            }
           
        ?>


    </div>




    <!-- 70% Leveä Div ------------------------------------------------------------>

<!--
    <div id="kapeaDiv" class="container">

            <?php
             if($page=="uploadKasittelija"){
                include("uploadKasittelija.php");
            }
            ?>

    </div>

        -->

    <!-- SQL YHTEYS ------------------------------------------------------------------->

    <?php 
        require("db.php"); 
        echo "<strong>Nykyinen sivu:</strong> " . $page;
        echo "<br>";
        echo "<strong>Session tiedot:</strong> " . $_SESSION['uname'];
        echo "<br>";
        echo "<strong>Session tiedot:</strong> " . $uname;
    ?>

    <!-- Footer ------------------------------------------------------------------->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">© Joonas - 2019</span>
        </div>
    </footer>


<!-- JS yms. -->



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</body>
</html>